<!DOCTYPE html>
<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
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
        });
    </script>
   
    <style>
        #bloque {
            width: 50%;
            padding: 50px 0;
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

    <div class="w3-display-middle" style="width:65%">
        <form class="w3-container w3-white flotador w3-display-middle" style="width:65%" method="POST" action="submit.php" id="frmbuscar">
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
            <input type="password" name="password" id="password">
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
            <input type="submit" id="buscar" value="Buscar"/>
        </form>
    </div>

    <div id="bloque"></div>
    
</body>
</html>