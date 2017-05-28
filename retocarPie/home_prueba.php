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
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="https://embed.tawk.to/5918e31d4ac4446b24a6f07f/default" charset="UTF-8" crossorigin="*"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Quicksand, Arial, Helvetica, sans-serif;
        }
        
        .myLink {
            display: none;
        }
        
        #bloque {
            overflow: auto;
            display: none;
            margin: -477px auto 0px 423px;
            position: relative;
            z-index: 1;
            width: 915px;
            height: 420px;
            left: 350px;
            top: -36px;
            background-color: transparent;
        }
        
        table {
            margin:     auto;
        }
        
        .scrollbar {
            margin-left: 30px;
            float: left;
            height: 300px;
            width: 65px;
            background: #F5F5F5;
            overflow-y: scroll;
            margin-bottom: 25px;
        }

        .force-overflow {
            min-height: 450px;
        }
        
        #bloque::-webkit-scrollbar-track
        {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
        }

        #bloque::-webkit-scrollbar
        {
        width: 12px;
        background-color: transparent;
        }

        #bloque::-webkit-scrollbar-thumb
        {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #39C0BA;
        }

    </style>
    
        <?php
    
        session_start();
    
        if(!isset($_SESSION["usuario"])){
            
            
            header("location:ClinkPortada.php");
            
        }
    
    ?>
    
    

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var counter = 0;
            $('#frmbuscar').submit(function() { // catch the form's submit event
                $.ajax({
                    data: $(this).serialize(),
                    type: $(this).attr('method'),
                    url: $(this).attr('action'),
                    success: function(data) {
                        $('#bloque').html(data);
                        $('#bloque').slideDown("slow");
                    }
                });
                return false; // cancel original event to prevent form submitting
            });

            $("#search").click(function() {
                if (counter == 0) {
                    $("#frmbuscar").animate({
                        marginLeft: "-=400px"
                    });
                    counter++;
                }
                $('#bloque').delay(500).fadeIn("slow");
            });
        });
    </script>



</head>

<body class="w3-light-grey">



    <!-- Navigation Bar -->
    <div id="nav" class="w3-bar w3-white w3-border-bottom w3-xlarge top">
        <a style="text-decoration:none" href="#" class="w3-bar-item w3-text-red"><img src="logo.png" style="width:25px;heigth:25px; margin-right:5px; margin-bottom:0.5px">Clink, tu servicio de limpieza en un CLICK</a>
        <div id="container">
            <div class="dropdown">
                    <button class="w3-button w3-hover-red" style="min-width:230px;border-radius:0px;border:0px"><img id="fotousu" src="imagenes/<?php echo $_SESSION['foto'] ?>">
                    <?php echo $_SESSION['nom'] . " " . $_SESSION['ape']; ?>
                </button>
                <div class="dropdown-content">
                    <a href="perfilUsuario.php"><img style="width:40px;height:35px" src="user.png">Ver perfil</a>
                    <a href="CierreSesion.php"><img style="width:50px;height:35px" src="logout.png">Cerrar Sesion</a>

                </div>
            </div>
        </div>

    </div>

    <!-- Header -->

    <header class="w3-display-container w3-content w3-hide-small" style="left: -22px; top: -32px; width: 964px; height: 282px;">

        <form id="frmbuscar" class="w3-container w3-white flotador w3-display-middle" style="left: 262px; top: 131px; width: 44.19%; margin-left: 498px; margin-top: 360px;" action="submit.php" method="post">
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

    <div id="bloque" class="scrollbar">
        <div class="force-overflow"></div>
    </div>

    <!-- End page content -->


    <!-- Footer -->
    <footer class="w3-container w3-center w3-opacity" style="border-radius:0px;bottom:0px">
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