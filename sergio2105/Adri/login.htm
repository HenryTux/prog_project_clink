<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
   
<?php
    
    try{
        
        $base=new PDO("mysql:host=localhost; dbname=datos3","root","");
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="SELECT * FROM TABLA_DATOS WHERE EMAIL= :email AND PASS= :pass";
            
        $resultado=$base->prepare($sql);
        
        $email=htmlentities($_POST["email"]);
        
        $pass=htmlentities($_POST["pass"]);
        
        $resultado->bindValue(":email", $email);
        
        $resultado->bindValue(":pass", $pass);
        
        $resultado->execute();

        $row = $resultado->fetch();

        $numero_registros=$resultado->rowCount();
        
        if($numero_registros!=0){
            
            session_start();
            
            $_SESSION["usuario"]=$_POST["email"];
            $_SESSION["telef"]=$row['telefono'];
            $_SESSION["ape"]=$row['apellido'];
            $_SESSION["nom"]=$row['nombre_completo'];
            $_SESSION["ciudad"]=$row['localidad'];

            header('location:ClinkPrueba.php');
            
        }else{
            
            header('Location:clinkPortadaLogin.php');
        }
        
        
    }catch(Exception $e){
        
        die("Error: " . $e->getMessage());
        
    }
    
    
    
    ?>
   
    
</body>
</html>
