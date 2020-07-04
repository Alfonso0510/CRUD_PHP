<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'conexion.php';
        $sql="select * from persona";
        $resultado=mysql_query($sql);
    ?>
</body>
</html>