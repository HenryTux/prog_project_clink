<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: none;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $connection = mysqli_connect('localhost','root','','clink') or die(mysql_error());
        
        $query = "SELECT * 
                  FROM users 
                  WHERE turno LIKE '" . $_POST["turno"] . "' AND sexo LIKE '" . $_POST["gender"] . "' AND localidad LIKE '" . $_POST["loca"] . "';";
        $result = mysqli_query($connection,$query);
        $n_filas = mysqli_num_rows($result);
        //$link_address = "http://www.google.es";
        
        if ($n_filas == 0) {
            echo "No se han encontrado resultados";
        } else {
            echo "<table border='1'";
            echo "<tr>";
       
            while($row = mysqli_fetch_array($result))
            {

                echo "<td>";
                //echo "<td>" . "<a href='" . $link_address . "'>" . $row['nombre'] . "</a></td>";
                echo "<p><img height='100' width='100' src='data:image/jpeg;base64," . base64_encode($row['profile_pic']) . "'/></p>";
                $id = $row['id_usuario'];
                echo "<p><a href='perfil.php?id=$id'>" . $row['nombre'] . " " . $row['apellido'] . "</a></p>";
                echo "<p>" . $row['email'] . "</p>";
                echo "<p>Contraseña del formulario sin encriptar >>> " . $_POST['password'] . "</p>";
                echo "<p>Contraseña del formulario encriptada >>> " . md5($_POST['password']) . "</p>";
                echo "<p>Contraseña de la base de datos >>> " . $row['pass'] . "</p>";
                
                if (md5($_POST['password']) == $row['pass'])
                    echo "Contraseña correcta!";
                else 
                    echo "Contraseña incorrecta :(";
                echo "</td>";
            }

            echo "</tr>";
            echo "</table>";
        }
        mysqli_close($connection);
    ?>
</body>
</html>