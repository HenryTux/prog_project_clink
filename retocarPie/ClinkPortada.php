<head>
    <style></style>
    <title>CLINK, limpieza en un click</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="principal.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

           $('#search').click(function() {
              alert("Inicia sesion para realizar la busqueda");
           });
            
            $('#signin').submit(function() { // catch the form's submit event

                 $.ajax({

                     data: $(this).serialize(),

                     type: $(this).attr('method'),

                     url: $(this).attr('action'),

                     success: function(data) {

                         $('#error').html(data);
                         $('#error').slideDown("slow");

                     }

                 });

                 return false; // cancel original event to prevent form submitting

             });
             
             

            $('#register').submit(function() { // catch the form's submit event

                $.ajax({

                    data: $(this).serialize(),

                    type: $(this).attr('method'),

                    url: $(this).attr('action'),

                    success: function(data) {

                        $('#duplicate').html(data);
                        $('#duplicate').slideDown("slow");

                    }

                });

                return false; // cancel original event to prevent form submitting

            });

        });

        function cancelar() {
            document.getElementById('id02').style.display = 'none';
        };

        
    </script>
    
     <script type = "text/javascript">
    function changeHashOnLoad() {
        window.location.href += "#";
        setTimeout("changeHashAgain()", "50");
    }

    function changeHashAgain() 
    {          
        window.location.href += "1";
    }

    var storedHash = window.location.hash;
    window.setInterval(function () {
        if (window.location.hash != storedHash) {
            window.location.hash = storedHash;
        }
    }, 50);

    </script>
    
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Quicksand", Arial, Helvetica, sans-serif
        }
        
        .myLink {
            display: none
        }
        
        #error {
            display: none;
            color: red;
        }
        
        #duplicate {
            display: none;
            color: red;
        }
        /* The snackbar - position it at the bottom and in the middle of the screen */
        
        #snackbar {
            opacity: 0;
            /* Hidden by default. Visible on click */
            
            min-width: 250px;
            /* Set a default minimum width */
            
            margin-left: -125px;
            /* Divide value of min-width by 2 */
            
            background-color: #39C0BA;
            /* Black background color */
            
            color: #fff;
            /* White text color */
            
            text-align: center;
            /* Centered text */
            
            border-radius: 15px;
            /* Rounded borders */
            
            padding: 16px;
            /* Padding */
            
            position: fixed;
            /* Sit on top of the screen */
            
            z-index: 1;
            /* Add a z-index if needed */
            
            left: 50%;
            /* Center the snackbar */
            
            top: 100px;
            /* 30px from the bottom */
            
            font-size: 20px;
        }
    </style>

</head>

<body class="w3-light-grey">

    <!-- Navigation Bar -->
    <div id="nav" class="w3-bar w3-white w3-border-bottom w3-xlarge top">
        <a style="text-decoration:none" href="#" class="w3-bar-item w3-text-red"><img src="logo.png" style="width:25px;heigth:25px; margin-right:5px; margin-bottom:0.5px">Clink, tu servicio de limpieza en un CLICK</a>
        
        <a href="#" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey" onclick="document.getElementById('id02').style.display='block'">Registrate</a>
        <a href="#" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey" onclick="document.getElementById('id01').style.display='block'">Login</a>
    </div>



    <!-- Header -->

    <header class="w3-display-container w3-content w3-hide-small">
        <form id="frmbuscar" class="w3-container w3-white flotador w3-display-middle" style="left: 262px; top: 131px; width: 44.19%; margin-left: 498px; margin-top: 360px;" method="post">
            <h2 style="text-align:center">¿Qué estás buscando?</h2>


            <div class="w3-row">

                <div class="w3-half">
                    <input id="male" class="w3-radio" type="radio" name="tipouser" value="asistente" checked="">
                    <label>Asistente</label>
                    <br>
                    <input id="female" class="w3-radio" type="radio" name="tipouser" value="cliente">
                    <label>Cliente</label>
                    <br>
                </div>
            </div>
            
                        <div class="w3-section" style="margin:0 auto">
                <label>en</label>
                
                <select id="localidadBuscador" name="loca" required="">
                    <option value="">- Seleccione una provincia -</option>
                    <option value="alava">Álava</option>
                    <option value="albacete">Albacete</option>
                    <option value="alicante">Alicante</option>
                    <option value="almeria">Almería</option>
                    <option value="asturias">Asturias</option>
                    <option value="avila">Ávila</option>
                    <option value="badajoz">Badajoz</option>
                    <option value="barcelona">Barcelona</option>
                    <option value="burgos">Burgos</option>
                    <option value="caceres">Cáceres</option>
                    <option value="cadiz">Cádiz</option>
                    <option value="cantabria">Cantabria</option>
                    <option value="castellon">Castellón</option>
                    <option value="ceuta">Ceuta</option>
                    <option value="ciudadreal">Ciudad Real</option>
                    <option value="cordoba">Córdoba</option>
                    <option value="cuenca">Cuenca</option>
                    <option value="girona">Girona</option>
                    <option value="laspalmas">Las Palmas</option>
                    <option value="granada">Granada</option>
                    <option value="guadalajara">Guadalajara</option>
                    <option value="guipuzcoa">Guipúzcoa</option>
                    <option value="huelva">Huelva</option>
                    <option value="huesca">Huesca</option>
                    <option value="illesbalears">Illes Balears</option>
                    <option value="jaen">Jaén</option>
                    <option value="acoruna">A Coruña</option>
                    <option value="larioja">La Rioja</option>
                    <option value="leon">León</option>
                    <option value="lleida">Lleida</option>
                    <option value="lugo">Lugo</option>
                    <option value="madrid">Madrid</option>
                    <option value="malaga">Málaga</option>
                    <option value="melilla">Melilla</option>
                    <option value="murcia">Murcia</option>
                    <option value="navarra">Navarra</option>
                    <option value="ourense">Ourense</option>
                    <option value="palencia">Palencia</option>
                    <option value="pontevedra">Pontevedra</option>
                    <option value="salamanca">Salamanca</option>
                    <option value="segovia">Segovia</option>
                    <option value="sevilla">Sevilla</option>
                    <option value="soria">Soria</option>
                    <option value="tarragona">Tarragona</option>
                    <option value="tenerife">Tenerife</option>
                    <option value="teruel">Teruel</option>
                    <option value="toledo">Toledo</option>
                    <option value="valencia">Valencia</option>
                    <option value="valladolid">Valladolid</option>
                    <option value="vizcaya">Vizcaya</option>
                    <option value="zamora">Zamora</option>
                    <option value="zaragoza">Zaragoza</option>

                </select>

            </div>
            <p id="busqueda">
                <button id="search" class="w3-button w3-dark-grey" style="float:right; margin-bottom:10px;margin-right:10px">Buscar</button>
            </p>

        </form>

        <!--<div class="w3-display-middle" style="width: 65%; left: 384px; top: 380px;"></div>-->
    </header>

    <!-- Pop Up Login -->

    <div id="id01" class="modal">

        <!-- Modal Content -->
        <form class="modal-content animate" action="login.php" method="post" id="signin">

            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                <img src="fpo_avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Email</b>
                </label>
                <br>
                <br>
                <input style="width: 100%" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,3}" placeholder=" Introduzca su email" name="email" required="">
                <br>
                <br>
                <label><b>Contraseña</b>
                </label>
                <br>
                <br>
                <input style="width: 100%" type="password" placeholder=" Introduzca contraseña" name="pass" required="">
                <div id="error"></div>
                <br>
                <br>
                <button type="submit" name="submit" value="Login">Login</button>
                <input type="checkbox" checked="checked"> Recuerdame
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                
            </div>
        </form>
    </div>

    <!-- Registro -->


    <div id="id02" class="modal">

        <form id="register" class="modal-content animate" method="post" action="ficherophp.php">

            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">x</span>
            </div>
            <div class="container">
                <label><b>Nombre</b>
                </label>
                <br>
                <br>
                <input style="width: 100%" type="text" placeholder="Escriba su nombre" name="nombre" pattern="[a-z A-Z]{1,15}" required="">
                <br>
                <br>
                <label><b>Apellido</b>
                </label>
                <br>
                <br>
                <input style="width: 100%" type="text" placeholder="Escriba su apellido" name="apellido" pattern="[a-z A-Z]{1,20}" required="">
                <br>
                <br>
                <label><b>Teléfono</b>
                </label>
                <br>
                <br>
                <input style="width: 100%" type="string" placeholder="Escriba su telefono" name="telefono" pattern="[0-9]{9}" required="">
                <br>
                <br>
                <label><b>Email</b>
                </label>
                <br>
                <br>
                <input style="width: 100%" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,3}" placeholder=" Introduzca su email" name="email" required="">
                <br>
                <br>
                <label><b>Contraseña</b>
                </label>
                <br>
                <br>
                <input style="width: 100%" type="password" placeholder="Contraseña" name="pass" required="">
                <br>
                <br>
                <div id="duplicate"></div>
                <label><b>Localidad</b>
                </label>
                <br>
                <br>
                <select id="localidad" name="localidad" required="">
                    <option value="">- Seleccione una provincia -</option>
                    <option value="alava">Álava</option>
                    <option value="albacete">Albacete</option>
                    <option value="alicante">Alicante</option>
                    <option value="almeria">Almería</option>
                    <option value="asturias">Asturias</option>
                    <option value="avila">Ávila</option>
                    <option value="badajoz">Badajoz</option>
                    <option value="barcelona">Barcelona</option>
                    <option value="burgos">Burgos</option>
                    <option value="caceres">Cáceres</option>
                    <option value="cadiz">Cádiz</option>
                    <option value="cantabria">Cantabria</option>
                    <option value="castellon">Castellón</option>
                    <option value="ceuta">Ceuta</option>
                    <option value="ciudadreal">Ciudad Real</option>
                    <option value="cordoba">Córdoba</option>
                    <option value="cuenca">Cuenca</option>
                    <option value="girona">Girona</option>
                    <option value="laspalmas">Las Palmas</option>
                    <option value="granada">Granada</option>
                    <option value="guadalajara">Guadalajara</option>
                    <option value="guipuzcoa">Guipúzcoa</option>
                    <option value="huelva">Huelva</option>
                    <option value="huesca">Huesca</option>
                    <option value="illesbalears">Illes Balears</option>
                    <option value="jaen">Jaén</option>
                    <option value="acoruna">A Coruña</option>
                    <option value="larioja">La Rioja</option>
                    <option value="leon">León</option>
                    <option value="lleida">Lleida</option>
                    <option value="lugo">Lugo</option>
                    <option value="madrid">Madrid</option>
                    <option value="malaga">Málaga</option>
                    <option value="melilla">Melilla</option>
                    <option value="murcia">Murcia</option>
                    <option value="navarra">Navarra</option>
                    <option value="ourense">Ourense</option>
                    <option value="palencia">Palencia</option>
                    <option value="pontevedra">Pontevedra</option>
                    <option value="salamanca">Salamanca</option>
                    <option value="segovia">Segovia</option>
                    <option value="sevilla">Sevilla</option>
                    <option value="soria">Soria</option>
                    <option value="tarragona">Tarragona</option>
                    <option value="tenerife">Tenerife</option>
                    <option value="teruel">Teruel</option>
                    <option value="toledo">Toledo</option>
                    <option value="valencia">Valencia</option>
                    <option value="valladolid">Valladolid</option>
                    <option value="vizcaya">Vizcaya</option>
                    <option value="zamora">Zamora</option>
                    <option value="zaragoza">Zaragoza</option>

                </select>
                <br>
                <br>
                <div class="w3-row">
                    <div class="w3-half">
                        <input id="male" class="w3-radio" type="radio" name="gender" value="hombre" checked="">
                        <label>Hombre</label>
                        <br>
                        <input id="female" class="w3-radio" type="radio" name="gender" value="mujer">
                        <label>Mujer</label>
                        <br>
                        <br>
                    </div>

                    <div class="w3-half">
                        <input id="usuario" class="w3-radio" type="radio" name="tipouser" value="cliente" checked="">
                        <label>Cliente</label>
                        <br>
                        <input id="empleado" class="w3-radio" type="radio" name="tipouser" value="asistente">
                        <label>Asistente</label>
                    </div>
                </div>

                <div class="container" style="background-color:#f1f1f1; padding:'10px'">
                    <button type="button" onclick="cancelar()" class="cancelbtn" style="padding:'20px'">Cancelar</button>
                    <button type="submit" name="submit">Registro</button>

                </div>
            </div>

        </form>

    </div>


    <!-- End page content -->
    <div id="snackbar">Registrado con éxito</div>
   
    <!-- Footer -->
    <footer class="w3-container w3-center w3-opacity w3-margin-bottom">
        <h5>Encuentranos en:</h5>
        <div class="w3-xlarge w3-padding-16">
            <a href="#" class="fa fa-facebook-official w3-hover-opacity" style="text-decoration:none"></a>
            <a href="#" class="fa fa-instagram w3-hover-opacity" style="text-decoration:none"></a>
            <a href="#" class="fa fa-twitter w3-hover-opacity" style="text-decoration:none"></a>
            <a href="#" class="fa fa-linkedin w3-hover-opacity" style="text-decoration:none"></a>
        </div>

        <div id="faq">
            <a href="quienesSomos/">Quienes somos</a>
            <a href="FAQS.html" target="_blank">Preguntas frecuentes</a>
            <a href="#">Política de privacidad</a>
        </div>

    </footer>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == pmodal) {
                pmodal.style.display = "none";
            }
        }
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == pmodal) {
                pmodal.style.display = "none";
            }
        }
    </script>

   
</body>