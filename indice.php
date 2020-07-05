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
    <div>
    <table>
            <tr>
                <th>ID</th>
                <th>USUARIO</th>
                <th>EMAIL</th>
                <th>ACCIONES</th>
            </tr>


            <?php 
                while($filas=mysql_fetch_assoc($resultado)){  
                }
            ?>
            <tr>
                <td><?php echo $filas['id'] ?></td>
                <td><?php echo $filas['usuario'] ?></td>
                <td><?php echo $filas['email'] ?></td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Eliminar</a>
                </td>
            </tr>
    </table>
    </div>
</body>
</html>