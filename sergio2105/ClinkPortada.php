<!DOCTYPE html>
<html>
<title>CLINK, limpieza en un click</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="principal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", Arial, Helvetica, sans-serif
    }
    
    .myLink {
        display: none
    }
</style>

<body class="w3-light-grey">

    <!-- Navigation Bar -->
    <div id="nav" class="w3-bar w3-white w3-border-bottom w3-xlarge top">
        <a style="text-decoration:none" href="#" class="w3-bar-item w3-text-red"><b><i class="fa fa-map-marker w3-margin-right"></i>Clink, tu servicio de limpieza en un CLICK</b></a>
        <a href="#" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey" onclick="document.getElementById('id02').style.display='block'">Registrate</a>
        <a href="#" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey" onclick="document.getElementById('id01').style.display='block'">Login</a>
    </div>



    <!-- Header -->
    <header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">



        <img class="w3-image" src="LOFT-portada.jpeg" alt="London" width="1500" height="700">

        <div class=class="w3-display-middle" style="width:65%">
            <form class="w3-container w3-white flotador w3-display-middle" style="width:65%" action="ficherophp.php" method="post">
                <h2 style="text-align:center">Busca tu asistente del hogar</h2>
                <div class="w3-section">
                    <label>Ciudad</label>
                    <br>
                    <select id="localidadBuscador" name="localidad" required>
             <option value="">- Seleccione una provincia -</option>
             <option value='alava'>Álava</option>
             <option value='albacete'>Albacete</option>
             <option value='alicante'>Alicante</option>
             <option value='almeria'>Almería</option>
             <option value='asturias'>Asturias</option>
             <option value='avila'>Ávila</option>
             <option value='badajoz'>Badajoz</option>
             <option value='barcelona'>Barcelona</option>
             <option value='burgos'>Burgos</option>
             <option value='caceres'>Cáceres</option>
             <option value='cadiz'>Cádiz</option>
             <option value='cantabria'>Cantabria</option>
             <option value='castellon'>Castellón</option>
             <option value='ceuta'>Ceuta</option>
             <option value='ciudadreal'>Ciudad Real</option>
             <option value='cordoba'>Córdoba</option>
             <option value='cuenca'>Cuenca</option>
             <option value='girona'>Girona</option>
             <option value='laspalmas'>Las Palmas</option>
             <option value='granada'>Granada</option>
             <option value='guadalajara'>Guadalajara</option>
             <option value='guipuzcoa'>Guipúzcoa</option>
             <option value='huelva'>Huelva</option>
             <option value='huesca'>Huesca</option>
             <option value='illesbalears'>Illes Balears</option>
             <option value='jaen'>Jaén</option>
             <option value='acoruna'>A Coruña</option>
             <option value='larioja'>La Rioja</option>
             <option value='leon'>León</option>
             <option value='lleida'>Lleida</option>
             <option value='lugo'>Lugo</option>
             <option value='madrid'>Madrid</option>
             <option value='malaga'>Málaga</option>
             <option value='melilla'>Melilla</option>
             <option value='murcia'>Murcia</option>
             <option value='navarra'>Navarra</option>
             <option value='ourense'>Ourense</option>
             <option value='palencia'>Palencia</option>
             <option value='pontevedra'>Pontevedra</option>
             <option value='salamanca'>Salamanca</option>
             <option value='segovia'>Segovia</option>
             <option value='sevilla'>Sevilla</option>
             <option value='soria'>Soria</option>
             <option value='tarragona'>Tarragona</option>
             <option value='tenerife'>Tenerife</option>
             <option value='teruel'>Teruel</option>
             <option value='toledo'>Toledo</option>
             <option value='valencia'>Valencia</option>
             <option value='valladolid'>Valladolid</option>
             <option value='vizcaya'>Vizcaya</option>
             <option value='zamora'>Zamora</option>
             <option value='zaragoza'>Zaragoza</option>

      </select>

                </div>

                <div class="w3-row">
                    <div class="w3-half">
                        <input id="manana" class="w3-check" type="checkbox">
                        <label>Mañana</label>
                        <br>
                        <input id="tarde" class="w3-check" type="checkbox">
                        <label>Tarde</label>
                        <br><br>
                    </div>

                    <div class="w3-half">
                        <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
                        <label>Hombre</label>
                        <br>
                        <input id="female" class="w3-radio" type="radio" name="gender" value="female">
                        <label>Mujer</label>
                        <br>
                    </div>
                </div>
                <p id="busqueda"><button id="desa" class="w3-button w3-dark-grey" disabled>Buscar</button> *<a onclick="document.getElementById('id01').style.display='block'" style="text-decoration:underline; cursor:pointer">Inicia Sesión</a> para realizar una busqueda</p>

            </form>
        </div>
    </header>

    <!-- Pop Up Login -->

    <div id="id01" class="modal">

        <!-- Modal Content -->
        <form class="modal-content animate" action="login.php" method="post">

            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="fpo_avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Email</b></label>
                <br><br>
                <input style="width: 100%" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,3}" placeholder=" Introduzca su email" name="email" required>
                <br><br>
                <label><b>Contraseña</b></label>
                <br><br>
                <input style="width: 100%" type="password" placeholder=" Introduzca contraseña" name="pass" required>
                <br><br>
                <button type="submit" name="submit">Login</button>
                <input type="checkbox" checked="checked"> Recuerdame
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
                <span class="psw">Olvidó su <a href="#">contraseña?</a></span>
            </div>
        </form>
    </div>

    <!-- Registro -->


    <div id="id02" class="modal">

        <form id="id020" class="modal-content animate" method="post" action="ficherophp.php">

            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <label><b>Nombre</b></label>
                <br><br>
                <input style="width: 100%" type="text" placeholder="Escriba su nombre" name="nombre" required>
                <br><br>
                <label><b>Apellido</b></label>
                <br><br>
                <input style="width: 100%" type="text" placeholder="Escriba su apellido" name="apellido" required>
                <br><br>
                 <label><b>Teléfono</b></label>
                <br><br>
                <input style="width: 100%" type="string" placeholder="Escriba su telefono" name="telefono" pattern="[0-9]{9}" required>
                <br><br>
                <label><b>Email</b></label>
                <br><br>
                <input style="width: 100%" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,3}" placeholder=" Introduzca su email" name="email" required>
                <br><br>
                <label><b>Contraseña</b></label>
                <br><br>
                <input style="width: 100%" type="password" placeholder="Contraseña" name="pass" required>
                <br><br>
                <label><b>Localidad</b></label>
                <br><br>
                <select id="localidad" name="localidad" required>
             <option value="">- Seleccione una provincia -</option>
             <option value='alava'>Álava</option>
             <option value='albacete'>Albacete</option>
             <option value='alicante'>Alicante</option>
             <option value='almeria'>Almería</option>
             <option value='asturias'>Asturias</option>
             <option value='avila'>Ávila</option>
             <option value='badajoz'>Badajoz</option>
             <option value='barcelona'>Barcelona</option>
             <option value='burgos'>Burgos</option>
             <option value='caceres'>Cáceres</option>
             <option value='cadiz'>Cádiz</option>
             <option value='cantabria'>Cantabria</option>
             <option value='castellon'>Castellón</option>
             <option value='ceuta'>Ceuta</option>
             <option value='ciudadreal'>Ciudad Real</option>
             <option value='cordoba'>Córdoba</option>
             <option value='cuenca'>Cuenca</option>
             <option value='girona'>Girona</option>
             <option value='laspalmas'>Las Palmas</option>
             <option value='granada'>Granada</option>
             <option value='guadalajara'>Guadalajara</option>
             <option value='guipuzcoa'>Guipúzcoa</option>
             <option value='huelva'>Huelva</option>
             <option value='huesca'>Huesca</option>
             <option value='illesbalears'>Illes Balears</option>
             <option value='jaen'>Jaén</option>
             <option value='acoruna'>A Coruña</option>
             <option value='larioja'>La Rioja</option>
             <option value='leon'>León</option>
             <option value='lleida'>Lleida</option>
             <option value='lugo'>Lugo</option>
             <option value='madrid'>Madrid</option>
             <option value='malaga'>Málaga</option>
             <option value='melilla'>Melilla</option>
             <option value='murcia'>Murcia</option>
             <option value='navarra'>Navarra</option>
             <option value='ourense'>Ourense</option>
             <option value='palencia'>Palencia</option>
             <option value='pontevedra'>Pontevedra</option>
             <option value='salamanca'>Salamanca</option>
             <option value='segovia'>Segovia</option>
             <option value='sevilla'>Sevilla</option>
             <option value='soria'>Soria</option>
             <option value='tarragona'>Tarragona</option>
             <option value='tenerife'>Tenerife</option>
             <option value='teruel'>Teruel</option>
             <option value='toledo'>Toledo</option>
             <option value='valencia'>Valencia</option>
             <option value='valladolid'>Valladolid</option>
             <option value='vizcaya'>Vizcaya</option>
             <option value='zamora'>Zamora</option>
             <option value='zaragoza'>Zaragoza</option>

      </select>
                <br><br>
                <div class="w3-row">
                    <div class="w3-half">
                        <input id="male" class="w3-radio" type="radio" name="gender1" value="hombre" checked>
                        <label>Hombre</label>
                        <br>
                        <input id="female" class="w3-radio" type="radio" name="gender1" value="mujer">
                        <label>Mujer</label>
                        <br><br>
                    </div>

                    <div class="w3-half">
                        <input id="usuario" class="w3-radio" type="radio" name="gender2" value="u" checked>
                        <label>Usuario</label>
                        <br>
                        <input id="empleado" class="w3-radio" type="radio" name="gender2" value="a">
                        <label>Asistente</label>
                    </div>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancelar</button>
                    <button type="submit" name="submit">Registro</button>
                </div>

            </div>
        </form>
    </div>

    <!-- Page content -->
    <div class="w3-content" style="max-width:1100px;">



        <!-- Explore Nature -->
        <div class="w3-container">
            <h3>Explore Nature</h3>
            <p>Travel with us and see nature at its finest.</p>
        </div>
        <div class="w3-row-padding">
            <div class="w3-half w3-margin-bottom">

                <div class="w3-container w3-white">
                    <h3>West Coast, Norway</h3>
                    <p class="w3-opacity">Roundtrip from $79</p>
                    <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                    <button class="w3-button w3-margin-bottom">Buy Tickets</button>
                </div>
            </div>
            <div class="w3-half w3-margin-bottom">

                <div class="w3-container w3-white">
                    <h3>Mountains, Austria</h3>
                    <p class="w3-opacity">One-way from $39</p>
                    <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                    <button class="w3-button w3-margin-bottom">Buy Tickets</button>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="w3-container">
            <div class="w3-panel w3-padding-16 w3-black w3-opacity w3-card-2 w3-hover-opacity-off">
                <h2>Enterate de todas nuestras novedades</h2>
                <p>Suscribete a nuestro newsletter.</p>
                <label>E-mail</label>
                <input class="w3-input w3-border" type="text" placeholder="Tu dirección de Email">
                <button type="button" class="w3-button w3-red w3-margin-top">Suscríbete</button>
            </div>
        </div>




        <!-- End page content -->
        <div>
            <!-- Footer -->
            <footer class="w3-container w3-center w3-opacity w3-margin-bottom">
                <h5>Encuentranos en:</h5>
                <div class="w3-xlarge w3-padding-16">
                    <a href="#" class="fa fa-facebook-official w3-hover-opacity" style="text-decoration:none"></a>
                    <a href="#" class="fa fa-instagram w3-hover-opacity" style="text-decoration:none"></a>
                    <a href="#" class="fa fa-twitter w3-hover-opacity" style="text-decoration:none"></a>
                    <a href="#" class="fa fa-linkedin w3-hover-opacity" style="text-decoration:none"></a>
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
</html>