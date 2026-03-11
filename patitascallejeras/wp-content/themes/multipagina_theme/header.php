<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- ICONOS FOTS AWESOME -->
    <script src="https://kit.fontawesome.com/c0e79807e2.js" crossorigin="anonymous"></script>

    <!-- CSS link -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'style.css' ); ?>">

    <?php wp_head(); ?>
    <style>

* {
  margin: 0px;
  padding: 0px;
  font-family: "Montserrat", sans-serif;
}

/*----------------------- INICIO -----------------------------*/
/*---------- CARTA ADOPCION -----------*/
.carta-adopcion {
  border-radius: 5px;
  border: 1px solid rgb(231, 231, 231);
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
  transition: all 500ms ease;
}

.carta-adopcion:hover {
  transform: translateY(-10px);
}

.color-naranja {
  color: #FFAD09;
}

.img-fluid {
  border-radius: 5px;
}

.btn-danger {
  padding: 0px;
  background-color: #FFAD09;
  border: none;
  font-size: 18px;
  font-weight: 700;
}

.titulo-adopcion {
  border-bottom: 2px solid black;
  width: 70%;
  margin: auto;
}

.btn-danger:hover {
  background-color: #da9100;
}

i {
  font-size: 20px;
}

.fa-mars {
  margin-right: 10px;
}

.fa-venus {
  margin-right: 10px;
}

.botona {
  padding: 10px 10px;
}

/* --------------------SINGLE ADOPCION------------------ */
.info h2, h4 {
  color: #FFAD09;
  font-size: 28px;
}

.info li, p {
  font-size: 18px;
  list-style: none;
}

.linea-formulario {
  border-bottom: 2px white solid;
  padding: 10px 0;
}

/* --------------------SINGLE NOTICIA------------------ */
.noticia h1 {
  font-size: 36px;
  font-weight: 600;
}

.img-sombra {
  box-shadow: 10px 10px 21px -3px rgba(204, 204, 204, 0.71);
}

.color-naranja {
  color: #FFAD09;
  border: 2px solid;
}

.noticia h3 {
  color: #FFAD09;
  font-weight: 600;
}

.noticia a {
  text-decoration: none;
  font-style: normal;
  color: black;
}

/*-------------------- PLUGIN OWL CAROUSEL -------------------*/
.owl-container {
  max-width: 900px;
  margin: 0 auto;
}

.item {
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10rem;
}

/* --------------------Granito de arena------------------ */
.granito {
  background-color: #2D2D2D;
  text-align: end;
}

.granito h1 {
  font-weight: 700;
  color: #FFAD09;
}

.granito .btn-danger {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 60px;
  font-size: 25px;
}

/* ----------------------Noticias cartas-------------------- */
.carta-noticia {
  border: 1px solid #c4c4c4;
  padding: 0px;
  margin: 0px;
  border-radius: 5px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: all 200ms ease;
  margin-left: 2px;
  margin-right: 2px;
}

.carta-noticia:hover {
  transform: translateY(-9px);
  border: 0px solid #c4c4c4;
  border-top: 4px solid #FFAD09;
}

.carta-noticia a {
  text-decoration: none;
  font-style: normal;
  color: black;
}

.carta-noticia a {
  text-decoration: none;
  font-style: normal;
  color: black;
}

.carta-noticia h1 {
  font-size: 24px;
  font-weight: 600;
}

.carta-noticia p {
  font-size: 16px;
  text-align: center;
}

.carta-noticia h5 {
  color: #da9100;
  font-size: 17px;
}

.imagen-noticia {
  height: 200px;
  margin: auto;
  background-size: contain;
}
/* ---------------- DONACIONES --------------- */

.metodo-pago{
    border: 2px solid gray;
    border-radius: 5px;
    padding: 30px;
    box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
}
/* ----------------- VOLUNTARIO -------------- */
.voluntario {
  background-color: #2D2D2D;
  text-align: start;
}

.voluntario h1 {
  font-weight: 700;
  color: #FFAD09;
}

.voluntario .btn-danger {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 60px;
  font-size: 25px;
}

.inscripcion {
  background-color: #2D2D2D;
}

.inscripcion h1 {
  font-weight: 600;
  font-size: 36px;
}

.inscripcion h3 {
  color: #FFAD09;
  font-weight: 500;
}

/* ----------------------FUNDACION------------------------ */
.fundacion h2 {
  color: #FFAD09;
  font-weight: 700;
}

.fundacion p {
  font-size: 20px;
}

.seccion-fundacion {
  padding: 40px 20px;
  background-color: #2D2D2D;
  color: white;
  font-size: 24px;
  font-weight: 700;
}

.seccion-fundacion h6 {
  font-size: 18px;
  color: white;
  text-align: end;
}

.borde-fundacion {
  border-right: 4px solid #FFAD09;
}

.colaboradores {
  background-color: rgba(219, 219, 219, 0.5);
}

.economica {
  background-color: #F3F3F3;
}

.economica h3 {
  font-size: 28px;
  font-weight: 700;
  color: #FFAD09;
}

/* ----------------------LEGALIDAD------------------------ */
.legalidad h3 {
  color: #FFAD09;
  font-size: 28px;
  font-weight: 700;
}

.legalidad p {
  font-size: 18px;
}

.voluntariado {
  background-color: rgba(232, 232, 232, 0.5);
}

/* ----------------------CONTACTO------------------------ */
.contacto h1 {
  font-size: 36px;
  font-weight: 700;
}

.contacto p {
  font-size: 20px;
}

.formulario {
  background-color: #2D2D2D;
  border-radius: 7px;
}

.wpforms-field-container {
  width: 100%;
}

.wpforms-submit-container .wpforms-submit {
  width: 100%;
}

.wpforms-field .wpforms-field-email {
  width: 100%;
}

/* ----------------------- PAGINA CONTACTO ---------------------------- */
.formulario label {
  font-size: 25px;
  font-weight: 500;
}

.formulario input {
  height: 40px;
  padding-left: 10px;
  width: 50%;
}

.formulario textarea {
  padding: 10px;
}

.single-index a {
  color: white;
  text-decoration: none;
}

div.wpforms-container .wpforms-form .wpforms-field > * {
  color: white;
}

div.wpforms-container .wpforms-form .wpforms-field > input {
  color: black;
}

div.wpforms-container-full input[type=email] {
  width: 100%;
}

/* -------------- NAVEGACION ADOPCION ----------- */
.pages {
  background: #FFAD09;
  color: white;
  box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
  padding: 10px;
}

.page {
  color: white;
  background: #FFAD09;
  box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
  padding: 10px 5px;
}

.nextpostslink {
  color: white;
  background: #FFAD09;
  box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
  padding: 10px 5px;
}

.previouspostslink {
  color: white;
  background: #FFAD09;
  box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
  padding: 10px 5px;
}

.current {
  color: white;
  background: #FFAD09;
  box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
  padding: 10px 5px;
}

.wp-pagenavi a {
  border: none;
  padding: 10px 20px;
  margin-right: 20px;
}

.wp-pagenavi a:hover {
  background: rgba(255, 53, 53, 0.5);
  transition: all 500ms ease-out;
}

.wp-pagenavi span {
  border: none;
  padding: 10px 20px;
  margin-right: 20px;
}

/* ---------------------- PLUGIN WP FORMS -------------------- */
:root {
  --wpforms-field-border-radius: 6px;
  --wpforms-field-background-color: #ffffff;
  --wpforms-field-border-color: rgba( 0, 0, 0, 0.25 );
  --wpforms-field-text-color: rgba( 0, 0, 0, 0.7 );
  --wpforms-label-color: rgba( 0, 0, 0, 0.85 );
  --wpforms-label-sublabel-color: rgba( 0, 0, 0, 0.55 );
  --wpforms-label-error-color: #d63637;
  --wpforms-button-border-radius: 3px;
  --wpforms-button-background-color: #FFAD09;
  --wpforms-button-text-color: #ffffff;
  --wpforms-field-size-input-height: 43px;
  --wpforms-field-size-input-spacing: 15px;
  --wpforms-field-size-font-size: 16px;
  --wpforms-field-size-line-height: 19px;
  --wpforms-field-size-padding-h: 14px;
  --wpforms-field-size-checkbox-size: 16px;
  --wpforms-field-size-sublabel-spacing: 5px;
  --wpforms-field-size-icon-size: 1;
  --wpforms-label-size-font-size: 20px;
  --wpforms-label-size-line-height: 19px;
  --wpforms-label-size-sublabel-font-size: 14px;
  --wpforms-label-size-sublabel-line-height: 17px;
  --wpforms-button-size-font-size: 17px;
  --wpforms-button-size-height: 41px;
  --wpforms-button-size-padding-h: 15px;
  --wpforms-button-size-margin-top: 20px;
}

   /* ---------------------- FOOTER -------------------- */
.container-fluid{
    --bs-gutter-x: 0;
}
.container-fluid footer{
    width: 100%;
}
footer{
    background-color: #2D2D2D;
    padding-top: 30px;
    padding-bottom: 30px;

    color: white;
}
footer h1{
    font-size: 28px;
    font-weight: 600;
}
.fa-angle-double-right{
    color: #FFAD09;
}
.fa-regular{
    color: #FFAD09;

}
.fa-brands{
    color: #FFAD09;

}
.listas a{
    text-decoration: none;
    color: white;
    font-style: normal;
    font-weight: 500;
    font-size: 20px;
}
.listas span{
    margin-left: 10px;
    margin-bottom: 15px;
}
.listas li{
    list-style: none;

}
.empaginado{
      border-radius: 6px;
      padding: 25px 10px;

   }

   /* ---------------------------- HEADER ------------------------- */

   .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 4rem;
      box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.1);
    }
    .navbar li{
        margin-top: 20px;
    }

    .navbar-brand {
      margin: 0 auto;
      position: relative;
    }

    .navbar-brand img{
      margin: 0 auto;
      position: absolute;
      width: 150px !important;
      left: 50%;
      top: -450%;
      transform: translateX(-50%);
      transition: transform 0.3s ease;
    }

    .navbar-nav {
      flex-direction: row;
    }

    .nav-item {
      margin: 0 10px;
    }

    .nav-link {
      font-family: 'Montserrat', sans-serif !important;
      font-size: 14px !important;
      font-weight: bold !important;
      color: #414141 !important;
    }

    .nav-item:hover{
      color: #FFAA07 !important;
    }

    .nav-link:hover{
      color: #FFAA07 !important;
    }

    .scrolled .navbar-brand img {
        transform: translateX(-50%) translateY(10px); /* Mueve el logo hacia arriba */
  }

  
  /* -------------------------------------------------------------- RESPONSIVE -------------------------------------------------------------------------------- */
  @media screen and (max-width: 1664px){

    footer .contactar li a i{
      font-size: 16px;
      
    }
    footer .contactar li a span{
      font-size: 16px;        
    }

  }

  @media screen and (max-width: 1420px){
    .granito p{
      font-size: 15px;
    }
    .noticia .h-50{
      height: 30%!important;
    }
    .voluntario p{
      font-size: 15px;
    }
    .colaboradores{
      padding: 0rem!important;
    }
    footer .contactar li a i{
      font-size: 14px;
      
    }
    footer .contactar li a span{
      font-size: 14px;        
    }
    .noticia .w-25{
      width: 50%!important;
    }
    .noticia h5{
      font-size: 18px;

    }
  }
  @media screen and (max-width: 1150px){
    .carta-adopcion a p{
      font-size: 14px;
    }
    .seccion-fundacion h6{
      font-size: 14px;

    }
    .seccion-fundacion p{
      font-size: 14px;

    }
    .color-naranja{
      padding: 1rem!important
    }
    .color-naranja{
      display: none;
    }
    .noticia h1{
      font-size: 28px;

    }
    .noticia p{
      font-size: 16px;

    }
  }

  @media screen and (max-width: 950px){

    .carta-adopcion p{
      font-size: 14px;
    }
    .carta-adopcion a p{
      font-size: 12px;
    }
    .banner{
      display: none;
    }
    h1{
      margin-top: 50px;
    }
    .animales{
      text-align: center!important;
    }
    .noticia h5{
      font-size: 16px;

    }
  }

  @media screen and (max-width: 767px){
    .borde-voluntario{
      border: 2px solid rgb(177, 177, 177);
      border-radius: 7px;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);
      margin-bottom: 20px;
    }
    .noticia{
      margin-top: 1.5rem!important;
      margin-bottom: 1.5rem!important;
    }

    .aside{
      display: none;
    }
    .img-economica{
      display: none;
    }
    .row .borde-voluntario{
      --bs-gutter-x: 0rem!important;
    }
    .texto-voluntario{
      text-align: center!important;
    }
    .texto-voluntario h1{
      font-size: 26px;
    }
    .texto-voluntario p{
      font-size: 14px;
    }
    .row{
      padding: 20px;
    }
    .navbar img{
      display: none
    }
  .metodo-pago{
    padding: 10px;
  }
  .contacto h1{
    text-align: center!important;
  }
    /* --------------- CARTAS DE ADOPCIÓN ------------------- */
    .carta-adopcion p{
      font-size: 18px;
    }
    .carta-adopcion a p{
      font-size: 18px;
    }

    .carta-noticia a .row .col-md-9{
      margin: 0rem!important;
    }
    /* --------------- SECCION APORTA TU GRANITO DE ARENA ------------------- */
    .granito{
      padding: 10px;
    }
    .granito h1, p, a{
      text-align: center;
    }
    .granito h1{
      font-size: 22px;
    }
    .granito p{
      font-size: 16px;
    }
    .granito img{
      display: none;
    }
    .inscripcion h1{
      font-size: 26px;
      font-weight: 700;
    }
    .voluntario img{
      display: none;
    }
    .voluntario{
      padding-top: 0rem!important;
      padding-bottom: 0rem!important;
      text-align: center;
    }


    footer{
      text-align: center;
    }
    footer .rapidos{
      display: none;
    }
    footer ul{
      padding-left: 0rem!important;
    }
    .fundacion{
      text-align: center;
      
    }
    .fundacion h2{
      font-size: 22px;
    }
    .fundacion p{
      font-size: 16px;
    }
    .fundacion .text-end{
      text-align: center!important;

    }
    .segunda-foto{
      display: none;
    }
    .color-naranja{
      display: none;
    }

    .borde-fundacion{
      border: 4px solid #FFAD09;

    }
    .colaboradores .col-md-2{
      display: flex;
      justify-content: center;
      margin: 0 auto;
    }

    .colaboradores h1{
      font-size: 26px;
      font-weight: 700;
    }
    .seccion-fundacion{
      margin: 0rem!important
    }
    .economica .text-end{
      text-align: center!important;
    }
    .economica h3{
      font-size: 24px;
    }
    .economica p{
      font-size: 16px;
    }

    .info li,h1,h2,h4{
      text-align: center;
    }
    .info h2,h4{
      font-size: 20px;

    }
    .info p{
      font-size: 14px;

    }
    .info li{
      font-size: 14px;

    }
    .noticia .h-50{
      height: 20%!important;
    }
    .noticia h1{
      font-size: 24px;

    }
    .noticia p{
      font-size: 14px;

    }
    .navbar a{
      display: inline-block;
    }
    .navbar{
      height: 15%;
    }
  }
  @media screen and (max-width: 466px){
    /* -------------- NAVEGACION ADOPCION----------- */
    .empaginado .pages {
      background: #FFAD09;
      color: white;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 10px;
      width: 200px;
    }
    
    .contacto h1{
      font-size: 24px;
    }
    .contacto p{
      font-size: 14px;
    }

    .page {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 10px 5px;
    }

    .nextpostslink {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 10px 5px;
    }

    .previouspostslink {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 10px 5px;
    }

    .current {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 10px 5px;
    }

    .wp-pagenavi a {
      border: none;
      padding: 10px 20px;
      margin-right: 5px;
    }


    .wp-pagenavi span {
      border: none;
      padding: 10px;
      margin-right: 5px;
    }
    .donacion p{
      font-size: 14px;
    }
    .donacion h2{
      font-size: 18px;
      font-weight: 700;
    }
    
    .contacto{
      text-align: center;
    }

    .padding-cero .row{
      padding: 3px;
    }
    .formulario{
      padding-top: 1rem!important;
      padding-bottom: 1rem!important;
    }
    .borde-voluntario h3{
      font-size: 18px;

    }
    .borde-voluntario p{
      font-size: 14px;

    }
    .texto-voluntario h1{
      font-size: 20px;
    }
    .texto-voluntario p{
      font-size: 12px;
    }
    .inscripcion h1{
      font-size: 22px;
      font-weight: 700;
    }
    .inscripcion{
      padding: 0rem!important;
    }
    :root{
      --wpforms-label-size-font-size: 16px;

    }

    .inscripcion .col-md-11{
      padding-top: 0rem!important;
      padding-bottom: 0rem!important;
    }
    .inscripcion .col-md-11 .row{
      margin-top: 0rem!important;
      margin-bottom: 0rem!important;
    }
    .inscripcion h3{
      font-size: 17px;
      font-weight: 700;

    }
    .inscripcion p{
      font-size: 12px;
    }
    .inscripcion a p{
      font-size: 18px;
      font-weight: 700;
    }
    .carta-noticia .row{
      padding-top: 0rem!important;
      padding-bottom: 0rem!important;
      margin-top: 0rem!important;
      margin-bottom: 0rem!important;
    }
    .noticia .h-50{
      height: 15%!important;
    }
    .noticia h1{
      font-size: 20px;

    }
    .noticia p{
      font-size: 12px;

    }
  }

  @media screen and (max-width: 391px){
    /* -------------- NAVEGACION ADOPCION----------- */
    .empaginado .pages {
      background: #FFAD09;
      color: white;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 5px;
      width: 200px;
    }

    .page {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 5px 5px;
    }

    .nextpostslink {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 5px 5px;
    }

    .previouspostslink {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 5px 5px;
    }

    .current {
      color: white;
      background: #FFAD09;
      box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
      padding: 5px 5px;
    }

    .wp-pagenavi a {
      border: none;
      padding: 5px 20px;
      margin-right: 0px;
    }


    .wp-pagenavi span {
      border: none;
      padding: 5px;
      margin-right: 0px;
    }
  }
  @media screen and (max-width: 400px){

    h1{
      font-size: 20px;
    }

    /* --------------- SECCION APORTA TU GRANITO DE ARENA ------------------- */

    .granito p{
      font-size: 12px;

    }
    .granito a p{
      font-size: 15px;

    }
    .granito{
      padding-top: 0rem!important;
      padding-bottom: 0rem!important;

    }


    /* --------------- CARTAS DE ADOPCIÓN ------------------- */

    .carta-noticia {
      padding: 10px;

    }
    .carta-noticia a .row .col-md-9{
      margin: 0rem!important;
    }

    .carta-noticia h1{
      font-size: 16px;
    }
    .carta-noticia p{
      font-size: 14px;
    }
    .economica h3{
      font-size: 20px;
    }
    .economica p{
      font-size: 12px;
    }
    .economica a p{
      font-size: 18px;
      font-weight: 700;
    }
    /* --------------- VOLUNTARIADO ------------------- */


    .voluntario h3{
      font-weight: 700;
      font-size: 18px;
    }
    .voluntario p{
      font-weight: 300;
      font-size: 12px;
    }
    .voluntario a p{
      font-weight: 700;
      font-size: 16px;
    }

    /* --------------- FOOTER ------------------- */
    footer{
      text-align: center;
    }
    footer .col-md-3 li a i{
      display: none
    }
    footer img{
      display: none;
    }
    footer .rapidos{
      display: none;
    }
    footer ul span{
      padding-left: 0rem!important;
      font-size: 15px;
    }
    footer .col-md-3 h1{
      font-size: 20px;
      color: #FFAD09;
    }
    .row{
      --bs-gutter-x: 0rem!important;
    }
  }
    </style>
    
</head>
<body>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/patitascallejeras/inicio/">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/patitascallejeras/adopcion/">Adopción</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/patitascallejeras/donaciones/">Donaciones</a>
      </li>
    </ul>
    <a class="navbar-brand" href="http://localhost/patitascallejeras/inicio/">
      <img src="http://localhost/patitascallejeras/wp-content/uploads/2023/11/logo2.png" alt="Logo" width="80">
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/patitascallejeras/voluntariado/">Voluntariado</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/patitascallejeras/fundacion/">Fundación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/patitascallejeras/contacto/">Contacto</a>
      </li>
    </ul>
  </div>
</nav>

<script>
  // Obtén el elemento que quieres animar
  var logo = document.querySelector('.navbar-brand img');

  // Escucha el evento de scroll
  window.addEventListener('scroll', function() {
    // Verifica la posición de scroll
    if (window.scrollY > 100) {
      // Cuando el scroll sea mayor a 100px, agrega la clase 'scrolled'
      document.body.classList.add('scrolled');
    } else {
      // Si no, quita la clase 'scrolled'
      document.body.classList.remove('scrolled');
    }
  });


</script>
