
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>01</title>
    </head>
</head>
<body>
    <?php
    $nombre="Mario";
    $apellidos="Pérez Murcia";
    $edad="21 años";
    $movil="601317626";
    $correo="marioperezmurcia847@gmail.com";
  
    echo "<table border=2 border-collapse: separate>";
    echo"<tr>";
    echo "<td>","NOMBRE";
    echo "<td>","APELLIDOS";
    echo "<td>","EDAD";
    echo "<td>","MOVIL";
    echo "<td>","CORREO";
    echo"</tr>";
    echo"<tr>";
    echo "<td>",$nombre;
    echo "<td>",$apellidos;
    echo "<td>",$edad;
    echo "<td>",$movil;
    echo "<td>",$correo;
    echo"</tr>";



    echo "</table>";
    ?>
    <table>
<tr>
    <th>NOMBRE</th>
    <td><?= $nombre ?></td>
</tr>
<tr>
    <th>APELLIDOS</th>
    <td><?= $apellidos ?></td>
</tr>
<tr>
    <th>EDAD</th>
    <td><?= $edad ?></td>
</tr>
<tr>
    <th>movil</th>
    <td><?= $movil ?></td>
</tr>
<tr>
    <th>CORREO</th>
    <td><?= $correo ?></td>
</tr>

</table>
</body>
</html>