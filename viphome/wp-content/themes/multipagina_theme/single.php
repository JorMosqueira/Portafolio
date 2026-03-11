<?php
$post = $wp_query->post;
if ( in_category('inicio') ) {
include(TEMPLATEPATH . '/single_index.php'); } 

//  --------------- SINGLE ADOPCION --------------

elseif ( in_category('productos-destacados') ) {
include(TEMPLATEPATH . '/single_producto.php'); }
elseif ( in_category('casas-modulares') ) {
include(TEMPLATEPATH . '/single_producto.php'); }
elseif ( in_category('baterias-de-bano') ) {
include(TEMPLATEPATH . '/single_producto.php'); }
elseif ( in_category('bodegas-modulares') ) {
include(TEMPLATEPATH . '/single_producto.php'); }
elseif ( in_category('cabanas') ) {
include(TEMPLATEPATH . '/single_producto.php'); }
elseif ( in_category('casetas-de-vigilancia') ) {
include(TEMPLATEPATH . '/single_producto.php'); }
elseif ( in_category('oficinas-modulares') ) {
include(TEMPLATEPATH . '/single_producto.php'); }


else {
include(TEMPLATEPATH . '/single_default.php');
}
?>
