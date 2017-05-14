<?php
    include("dbconnect.php");
    
    if (!isset($_POST['search'])) {
        header("Location:index.php");
    }

    $search_sql="SELECT * FROM usuarios WHERE ciudad LIKE '%".$_POST['search']."%'";
    $search_query=mysql_query($search_sql);

    if (mysql_num_rows($search_query) != 0) {
        $search_rs=mysql_fetch_assoc($search_query);
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda</title>
</head>
<body>
    <p>
        Resultados de búsqueda:
    </p>
    <?php
       if (mysql_num_rows($search_query) != 0) {
            do { ?>
            <p><?php echo $search_rs['ciudad']; ?></p>
           <?php } while ($search_rs = mysql_fetch_assoc($search_query));
       } else {
           echo "No se han encontrado resultados"
       }
    ?>
</body>
</html>
