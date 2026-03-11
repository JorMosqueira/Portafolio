<?php


class ClassWCMAPSearchFilter {

    public $tableName, $wpdb;

    public function __construct()
    {
        global $wpdb;

        $this->wpdb = $wpdb;
        $this->tableName = $wpdb->prefix . 'stm_wcmap_prod_atts_relation';

        add_action('init', array($this, 'stmWCMAPCreateAttsDB'));
        add_action('woocommerce_update_product', array($this, 'stm_wcmap_add_new_prod_term_in_stm_term_rel'), 50, 1);
        add_action('stm_after_import_woocommerce_update_product', array($this, 'stm_wcmap_add_new_prod_term_in_stm_term_rel'), 50, 1);
        add_action('wp_ajax_stm_ajax_get_child_categories', array($this, 'getWCMAPOptions'));
        add_action('wp_ajax_nopriv_stm_ajax_get_child_categories', array($this, 'getWCMAPOptions'));
        add_action('demo_import_plugin_activated_stm-woocommerce-motors-auto-parts', array($this, 'setWCMAPTaxonomies'));
        add_action('delete_term', array($this, 'stmWCMAPwoocommerce_before_attribute_delete'), 50, 5);
    }

    public function stmWCMAPCreateAttsDB() {

        if($this->wpdb->get_var("SHOW TABLES LIKE '$this->tableName'") != $this->tableName) {
            $charset_collate = $this->wpdb->get_charset_collate();

            $sql = "CREATE TABLE {$this->tableName} (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          prod_id int DEFAULT 0,
          attr_type varchar(20),
          attr_parent_name text,
          attr_parent_slug text,
          attr_parent int DEFAULT 0,
          attr_childs int DEFAULT 0,
          PRIMARY KEY  (id)
        ) $charset_collate;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }
    }

    private function stm_wcmap_delete_db_row( $prod_id, $attr_type ) {
        $this->wpdb->delete(
            $this->tableName,
            array(
                'prod_id' => $prod_id,
                'attr_type' => $attr_type
            ),
            array( '%d', '%s' )
        );
    }

    private function stm_wcmap_force_delete_db_row( $attr_type, $attr_parent_slug ) {
        $this->wpdb->delete(
            $this->tableName,
            array(
                'attr_type' => $attr_type,
                'attr_parent_slug' => $attr_parent_slug
            ),
            array( '%s', '%s' )
        );
    }

    private function stm_wcmap_insert_db_row( $prod_id, $attr_type, $attr_parent_name, $attr_parent_slug, $attr_parent, $attr_childs ) {
        $this->wpdb->insert(
            $this->tableName,
            array(
                'prod_id' => $prod_id,
                'attr_type' => $attr_type,
                'attr_parent_name' => $attr_parent_name,
                'attr_parent_slug' => $attr_parent_slug,
                'attr_parent' => $attr_parent,
                'attr_childs' => $attr_childs,
                ),
            array(
                '%d',
                '%s',
                '%s',
                '%s',
                '%d',
                '%d',
            )
        );
    }

    public function stm_wcmap_add_new_prod_term_in_stm_term_rel($id) {

        $make = wc_get_product_terms($id, 'pa_make', array('fields' => 'all'));
        $model = wc_get_product_terms($id, 'pa_model', array('fields' => 'all'));
        $year = wc_get_product_terms($id, 'pa_part-year', array('fields' => 'all'));

        $this->stm_wcmap_delete_db_row($id, 'pa_part-year');
        $this->stm_wcmap_delete_db_row($id, 'pa_model');
        $this->stm_wcmap_delete_db_row($id, 'pa_make');

        $makeIds = array();
        $modelIds = array();
        $yearIds = array();

        if( !empty($year) ) {
            foreach ($year as $k => $val) {
                $yearIds[] = $val->term_taxonomy_id;
                $this->stm_wcmap_insert_db_row($id, 'pa_part-year', $val->name, $val->slug, $val->term_taxonomy_id, 0);
            }
        }

        if( !empty($model) ) {
            foreach ($model as $k => $val) {
                $modelIds[] = $val->term_taxonomy_id;
                if( !empty( $yearIds ) ) {
                    foreach ($yearIds as $yId) {
                        $this->stm_wcmap_insert_db_row($id, 'pa_model', $val->name, $val->slug, $val->term_taxonomy_id, $yId);
                    }
                } else {
                    $this->stm_wcmap_insert_db_row($id, 'pa_model', $val->name, $val->slug, $val->term_taxonomy_id, 0);
                }
            }
        }

        if( !empty($make) ) {
            foreach ($make as $k => $val) {
                $makeIds[] = $val->term_taxonomy_id;
                if( !empty( $modelIds ) ) {
                    foreach ($modelIds as $mId) {
                        $this->stm_wcmap_insert_db_row($id, 'pa_make', $val->name, $val->slug, $val->term_taxonomy_id, $mId);
                    }
                } else {
                    $this->stm_wcmap_insert_db_row($id, 'pa_make', $val->name, $val->slug, $val->term_taxonomy_id, 0);
                }
            }
        }
    }

    public function getWCMAPMakesArr($where = '') {
        $where = (empty($where)) ? 'GROUP BY attr_parent' : $where;
        $result = $this->wpdb->get_results("SELECT * FROM {$this->tableName} WHERE attr_type='pa_make' {$where}");
        return $result;
    }

    public function getWCMAPModelsArr($where = '') {
        $where = (empty($where)) ? 'GROUP BY attr_parent' : $where;
        $result = $this->wpdb->get_results("SELECT * FROM {$this->tableName} WHERE attr_type='pa_model' {$where}");
        return $result;
    }

    public function getWCMAPYearsArr($where = '') {
        $where = (empty($where)) ? 'GROUP BY attr_parent' : $where;
        $result = $this->wpdb->get_results("SELECT * FROM {$this->tableName} WHERE attr_type='pa_part-year' {$where}");
        return $result;
    }

    public function getWCMAPOptArr($parentSlug) {
        $result = $this->wpdb->get_results(
                "SELECT t1.attr_parent_name, t1.attr_parent, t1.attr_parent_slug FROM {$this->tableName} AS t1 
                        LEFT JOIN {$this->tableName} AS t2 ON t2.attr_childs = t1.attr_parent 
                        WHERE t2.attr_parent_slug = '{$parentSlug}' 
                        GROUP BY t1.attr_parent ORDER BY t1.attr_parent_name"
        );

        return $result;
    }

    public function stmWCMAPwoocommerce_before_attribute_delete($term, $tt_id, $taxonomy, $deleted_term, $object_ids) {

        $this->stm_wcmap_force_delete_db_row($taxonomy, $deleted_term->slug);
    }

    public function getWCMAPFilterHtml() {
        $makes = $this->getWCMAPMakesArr();

        $shop_page_id = apply_filters( 'woocommerce_get_shop_page_id' , get_option( 'woocommerce_shop_page_id' ) );
    ?>
        <div class="wcmap-part-filter">
            <form action="<?php echo get_the_permalink($shop_page_id); ?>">
                <div class="row">
                    <div class="col-md-2">
                        <div class="select-wrap">
                            <select name="filter_make">
                                <option value=""><?php echo esc_html__('Select Make', 'stm-woocommerce-motors-auto-parts');?></option>
                            <?php
                                $opt = '';
                                foreach ($this->getWCMAPMakesArr() as $k => $val ) {
                                    $opt .= '<option value="' . $val->attr_parent_slug . '" >' . $val->attr_parent_name . '</option>';
                                }
                                echo apply_filters('stm_wcmap_sf_opt', $opt);
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="select-wrap">
                            <select name="filter_model">
                                <option value=""><?php echo esc_html__('Select Model', 'stm-woocommerce-motors-auto-parts');?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="select-wrap">
                            <select name="filter_part-year">
                                <option value=""><?php echo esc_html__('Select Year', 'stm-woocommerce-motors-auto-parts');?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="filter_part-number" placeholder="<?php echo esc_html__('Part Number', 'stm-woocommerce-motors-auto-parts'); ?>" />
                    </div>
                    <div class="col-md-2">
                        <button>
                            <?php echo esc_html__('Search', 'stm-woocommerce-motors-auto-parts'); ?>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    <?php

    }

    public function getWCMAPOptions() {

        $parentType = $_POST['pType'];
        $parentId = $_POST['catId'];

        $res = $this->getWCMAPOptArr($parentId);
        $opt = '';

        if($parentType == 'make') {
            $opt .= "<option value=''>" . esc_html__('Select Model', 'stm-woocommerce-motors-auto-parts') ."</option>";
        } else if($parentType == 'model') {
            $opt .= "<option value=''>" . esc_html__('Select Year', 'stm-woocommerce-motors-auto-parts') ."</option>";
        }

        if(!empty($res)) {
            foreach ($res as $k => $val) {
                $opt .= '<option value="' . $val->attr_parent_slug . '">' . $val->attr_parent_name . '</option>';
            }
        }

        $response['opt'] = $opt;

        wp_send_json($response);
        exit;
    }

    public function setWCMAPTaxonomies () {
        require_once 'demo/woo_attributes.php';

        stm_woo_create_attr('auto_parts');
    }
}

new ClassWCMAPSearchFilter;