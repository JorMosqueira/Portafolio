<?php wp_footer(); ?>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $numero = $_POST["telefono"];
        // Obtén otros valores del formulario

        // Configura el destinatario del correo
        $destinatario = "j.mosqueira.aguayo@gmail.com";

        // Asunto del correo
        $asunto = "Contacto a travez de formulario";

        // Contenido del correo
        $mensaje = "Nombre: $nombre\nCorreo: $correo\nNúmero telefónico: $numero\n $mensajeinput\n Por favor no responder este mensaje.\n"; // Agrega otros campos aquí

        // Envío del correo
        if (@mail($destinatario, $asunto, $mensaje)) {
            echo "<script>alert('El correo se ha enviado correctamente.')</script>";
        } else {
            echo 'Hubo un error al enviar el correo. Detalles del error: ' . error_get_last()['message'];

        }
    }
?>
<!-- ----------------------FOOTER------------------- -->

<footer class="container-fluid " id="contacto">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="row">
                        <div class="col-md-3 logo-footer">
                            <img src="<?php echo get_theme_file_uri("img/logo3.png"); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-1"></div>

                    <div class="col-md-3 contactar">
                            <h1 class="mb-5">DATOS DE CONTACTO</h1>
                            <ul class="listas">
                                <li class="mb-5"><a href=" "><i class="fa-regular fa-envelope mr-4"></i><span>jor.mosqueira@duocuc.cl</span></a></li>
                                <li class="mb-5"><a href=" "><i class="fa-brands fa-whatsapp mr-4"></i><span>+56971589971</span></a></li>
                                <li class="mb-5"><a href=" "><i class="fa-brands fa-instagram mr-4"></i><span>@jor.mosqueira</span></a></li>
                            </ul>
                        </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-3">
                        <h1 class="mb-4">FORMULARIO DE CONTACTO</h1>

                        <form class="formulario justify-content-center" action="POST">
                            <div class="mb-4">
                                <input class="formulario__item mx-auto" type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido" required>
                                <span class="error"> Ingresa tu nombre</span>
                                <span class="correcto"> Bien hecho!</span>
                            </div>

                            <div class="formulario__full mb-4">
                                <input class="formulario__item mx-auto" type="text" name="correo" id="correo"
                                    placeholder="Correo Electronico" required
                                    pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?">
                                <span class="error"> Ingresa tu correo electrónico</span>
                                <span class="correcto"> Bien hecho!</span>
                            </div>
                            <div class="mb-4">
                                <input class="formulario__item mx-auto" type="text" name="telefono" id="telefono"
                                    placeholder="Telefono" required
                                    pattern="^(\+?56)?(\s?)(0?9)(\s?)[98765432]\d{7}$">
                                <span class="error"> Ingresa tu número telefónico</span>
                                <span class="correcto"> Bien hecho!</span>
                            </div>

                            <div class="formulario__full">
                                <button class="btn btn-danger w-100 p-3" type="submit">Enviar</button>
                            </div>
                        </form>

                </div>

            </div>
        </div>
    </div>
</footer>
<div class="container-fluid">
    <div class="row copyright py-4 px-3">
        <div class="col-md-5 mx-auto text-white text-center">
            <span>Copyright © 2024 JorMosqueira. Todos los derechos reservados</span>
        </div>
    </div>
</div>


    <script src="https://kit.fontawesome.com/c0e79807e2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>

