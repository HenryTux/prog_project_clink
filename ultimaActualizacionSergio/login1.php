<?php
//conexion con la base de datos y el server 
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'datos3'); 
 define('DB_USER','root'); 
 define('DB_PASSWORD',''); 
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 function SignIn() 
 { session_start(); //starting the session for user profile page 
   
   if(!empty($_POST['email']))            //checking the 'user' name which is from Sign-In.html, is it empty or have some text
   {$query = mysql_query("SELECT *  FROM tabla_datos where email = '$_POST[email]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
        
   $row = mysql_fetch_array($query);  

   if(!empty($row['email']) AND !empty($row['pass'])){    
           echo "Sesion iniciada"; 
           header('Location: clink.php'); 
             
                 };  
             
   if(empty($row['email']) or empty($row['pass'])){  
            echo "<h2>contraseña incorrecta</h2>";
            echo "<meta http-equiv=\"refresh\" content=\"2;url=clink.html\"/>";
             //header('Location: clink.php');  
                 }                       
          }      
       }
     ;

                   
   if(isset($_POST['submit'])) { SignIn(); }
   
?>