<?php
$post = $wp_query->post;
if ( in_category('inicio') ) {
include(TEMPLATEPATH . '/single_index.php'); } 

//  --------------- SINGLE ADOPCION --------------

elseif ( in_category('adopcion') ) {
include(TEMPLATEPATH . '/single_adopcion.php'); }
elseif ( in_category('adopcion-inicio') ) {
include(TEMPLATEPATH . '/single_adopcion.php'); }

//  --------------- SINGLE NOTICIA --------------

elseif ( in_category('noticias-inicio') ) {
include(TEMPLATEPATH . '/single_noticia.php'); }
elseif ( in_category('noticias') ) {
include(TEMPLATEPATH . '/single_noticia.php'); }

//  --------------- PAGINA VOLUNTARIADO --------------

elseif ( in_category('seccion-voluntariado') ) {
include(TEMPLATEPATH . '/voluntariado.php'); }

//  --------------- PAGINA VOLUNTARIADO --------------

elseif ( in_category('inscripcion') ) {
include(TEMPLATEPATH . '/legalidad.php'); }
elseif ( in_category('formulario-adopcion') ) {
include(TEMPLATEPATH . '/legalidad.php'); }

//  --------------- PAGINA DONACIONES --------------

elseif ( in_category('seccion-granito') ) {
include(TEMPLATEPATH . '/donaciones.php'); }
elseif ( in_category('seccion-economica') ) {
include(TEMPLATEPATH . '/donaciones.php'); }
    
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>
