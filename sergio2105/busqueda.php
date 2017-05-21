<?php
        $connection = mysqli_connect('localhost','datos3','root','') or die(mysql_error());
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        
        }
        $result = mysqli_query($connection,"SELECT * FROM tabla_datos");
        
        $link_address = "http://www.google.es";
        
        echo "<table border='1' align='center'>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        //echo "<td>" . "<a href='" . $link_address . "'>" . $row['nombre'] . "</a>" . "</td>";
        echo "<td><a href='http://www.google.es'>" . $row['nombre'] . "</a></td>";
        echo "<td>" . $row['apellido'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";

        mysqli_close($connection);
    ?>