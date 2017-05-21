<!DOCTYPE html>
<html>
<title>Perfil Usuario</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href= "W3S_1.css">
<link rel='stylesheet' href= "googleapis.css">
<link rel="stylesheet" href= "W3S_2.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">


    <?php
    
        session_start();
    
        if(!isset($_SESSION["usuario"])){
            
            
            header("location:ClinkPortada.php");
            
        }
    
    ?>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
         <form action="procesar.php" method="post" enctype="multipart/form-data">
	       <input type="file" name="foto" />
	       <input type="submit" value="Upload" />
         </form>
          <img src= "avatar.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $_SESSION['nom'] . " " . $_SESSION['ape']; ?></h2>
          </div>
        </div>
        <div class="w3-container">
         
          <p><a style="text-decoration:none" href="https://www.google.es/maps/place/<?php echo $_SESSION['ciudad']; ?>" target="_blank"><img id="wasap" src= ubicacion%20image.png width ="25px">   <?php echo $_SESSION['ciudad']; ?></a></p>
          <p><a style="text-decoration:none" href="https://mail.google.com/mail" target="_blank"><img id="wasap" src= "gmail%20image.jpg" width ="20px">     <?php echo $_SESSION['usuario']; ?></a></p>
          <p><a style="text-decoration:none" href="https://api.whatsapp.com/send?phone=34<?php echo $_SESSION['telef']; ?>&text=Hola%20he%20visto%20tu%20perfil%20en%20CLINK,%20y%20me%20gustaría%20concertar%20una%20entrevista%20con%20usted." target="_blank"><img id="wasap" src= WhatsApp%20Image.jpeg width="25px">   <?php echo $_SESSION['telef']; ?></a></p>
          <hr>

          <p class="w3-large w3-text-theme"><b><img src="ico%20world.png" width="35px"> IDIOMAS</b></p>
          <p>Castellano</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Inglés</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Alemán</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>
        <div class="w3-container w3-card-2 w3-white">
            <div class="valoraciones">
        <p> ¡PRÓXIMAMENTE... VALORACIONES DE TODOS LOS USUARIOS! </p>
            <p><img src="ICO%20ESTRELLA.png" width="50px"><img src="ICO%20ESTRELLA.png" width="50px"><img src="ICO%20ESTRELLA.png" width="50px"><img src="ICO%20ESTRELLA.png" width="50px"><img src="ICO%20ESTRELLA.png" width="50px"></p>

            </div>
        </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2> <a style="text-decoration:none" target="_blank"><img id="laboral" src= "exp%20laboral.png" width ="50px"> EXPERIENCIA LABORAL </a> </h2>
        <div class="w3-container">
          <h5 class="w3-opacity" contenteditable="true"><b>Puesto de Trabajo</b></h5>
          <h6 class="w3-text-teal" contenteditable="true"><img src="ico%20calendar.jpg" width="30px" contenteditable="false">Desde.../Hasta...</h6>
          <p contenteditable="true">Haz una breve descripción de tus responsabilidades en este puesto.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity" contenteditable="true"><b>Puesto de Trabajo</b></h5>
          <h6 class="w3-text-teal" contenteditable="true"><img src="ico%20calendar.jpg" width="30px" contenteditable="false">Desde.../Hasta...</h6>
          <p contenteditable="true">Haz una breve descripción de tus responsabilidades en este puesto.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity" contenteditable="true"><b>Puesto de Trabajo</b></h5>
          <h6 class="w3-text-teal" contenteditable="true"><img src="ico%20calendar.jpg" width="30px" contenteditable="false">Desde.../Hasta...</h6>
          <p contenteditable="true">Haz una breve descripción de tus responsabilidades en este puesto.</p><br>
        </div>
      </div>

      <div class="w3-container w3-card-2 w3-white">
        <div class="w3-container">
          <h2> <a style="text-decoration:none" target="_blank"><img id="laboral" src= "estudios%20image.png" width ="55px"> ESTUDIOS </a> </h2>
          <h5 class="w3-opacity" contenteditable="true"><b>Título</b></h5>
          <h6 class="w3-text-teal" contenteditable="true"><img src="ico%20calendar.jpg" width="30px" contenteditable="false">Desde.../Hasta...</h6>
          <p contenteditable="true">Centro donde adquirió dicho título.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity" contenteditable="true"><b>Título</b></h5>
          <h6 class="w3-text-teal" contenteditable="true"><img src="ico%20calendar.jpg" width="30px" contenteditable="false">Desde.../Hasta...</h6>
          <p contenteditable="true">Centro donde adquirió dicho título.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity" contenteditable="true"><b>Título</b></h5>
          <h6 class="w3-text-teal" contenteditable="true"><img src="ico%20calendar.jpg" width="30px" contenteditable="false">Desde.../Hasta...</h6>
          <p contenteditable="true">Centro donde adquirió dicho título.</p><br>
        </div>
        </div>
        
        
      

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Quiénes Somos</p>
  <p>FAQ</p>
  <p><a href="Politica%20de%20Privacidad.html">Política de Privacidad </a> </p>
  
 
</footer>

</body>
</html>
