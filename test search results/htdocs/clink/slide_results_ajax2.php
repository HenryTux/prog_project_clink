<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        
        function getData(nloca,nturno,ngen) {
            var selectLoca = document.getElementsByName(nloca);
            var strLoca = selectLoca.options[selectLoca.selectedIndex].value;
            
            var strTurno = document.querySelector('input[name="nturno"]:checked').value;
            
            var strGen = document.querySelector('input[name="ngen"]:checked').value;
            
            alert("php");
            
            <?php $lcld = "<script>document.write(strLoca)</script>"?>
            <?php $trn = "<script>document.write(strTurno)</script>"?>
            <?php $gen = "<script>document.write(strGen)</script>"?>
        }
        
        $(document).ready(function()
        {
            $('form').on('submit', function (e) 
            {
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: 'slide_results.php',
                    data: $('form').serialize(),
                    success: function () 
                    {
                        $("#bloque").slideDown("slow");
                        alert("Enviado");
                    }
                });
            });
        });
    </script>
    <style>
        #bloque {
            width: 100%;
            padding: 50px 0;
            text-align: center;
            background-color: lightgrey;
            margin-top:20px;
            display:none;
        }
        img {
            border-radius:50%;
        }
    </style>
</head>
    
<body>
    <iframe frameborder="0" class="juxtapose" width="992px" height="434" src="https://cdn.knightlab.com/libs/juxtapose/latest/embed/index.html?uid=ad15406a-3b28-11e7-a6aa-0edaf8f81e27"></iframe>
    <div class="w3-display-middle" style="width:65%">
        <form class="w3-container w3-white flotador w3-display-middle" style="width:65%" method="POST" action="slide_results.php" id="busqform">
        <h2 style="text-align:center">Busca tu asistente del hogar</h2>
        <div class="w3-section">     
            <label>Ciudad</label>
            <br>
            <select name="loca" required>
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
                 <option value='acoruña'>A Coruña</option>
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
                    <input id="manana" class="w3-check" type="checkbox" value="manana" name="turno">
                    <label>Mañana</label>
                    <br>
                    <input id="tarde" class="w3-check" type="checkbox" value="tarde" name="turno">
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
            <input type="submit" name="submit" value="Buscar" onclick="getData('loca','turno','gender')"/>
        </form>
    </div>
    <div id="bloque">
    <?php
        $connection = mysqli_connect('localhost','root','','clink') or die(mysql_error());
        echo $trn;
        echo $lcld;
        echo $gen;
        $query = "SELECT * 
                  FROM users 
                  WHERE turno LIKE '%" . $_POST['turno'] . "%' AND sexo LIKE '%" . $_POST['gender'] . "%' AND localidad LIKE '%" . $_POST['loca'] . "%';";
        $result = mysqli_query($connection,$query);
        
        $link_address = "http://www.google.es";
        
        echo "<table border='1'";
        echo "<tr>";
        
        while($row = mysqli_fetch_array($result))
        {
        
            echo "<td>";
            //echo "<td>" . "<a href='" . $link_address . "'>" . $row['nombre'] . "</a></td>";
            echo "<p><img height='100' width='100' src='data:image/jpeg;base64," . base64_encode($row['profile_pic']) . "'/></p>";
            echo "<p><a href='http://www.google.es'>" . $row['nombre'] . " " . $row['apellido'] . "</a></p>";
            echo "<p>" . $row['email'] . "</p>";
            echo "</td>";

        }
        
        echo "</tr>";
        echo "</table>";
        
        mysqli_close($connection);
    ?>
    </div>
    
</body>
</html>