<?php
$post = $wp_query->post;
if ( in_category('ultimas-noticias') ) {
include(TEMPLATEPATH . '/single_noticias.php'); } 
elseif ( in_category('noticias-destacadas') ) {
include(TEMPLATEPATH . '/single_noticias.php'); }
elseif ( in_category('descargas') ) {
include(TEMPLATEPATH . '/single_descargas.php'); }

else {
include(TEMPLATEPATH . '/single_default.php');
}
?>