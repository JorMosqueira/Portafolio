<?php
$post = $wp_query->post;
if ( in_category('proyectos') ) {
include(TEMPLATEPATH . '/single_proyecto.php'); } 

//  --------------- SINGLE PROYECTO --------------

elseif ( in_category('servicios') ) {
include(TEMPLATEPATH . '/single_proyecto.php'); }

else {
include(TEMPLATEPATH . '/single_default.php');
}
?>
