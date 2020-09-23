<head><title>
Tablas de multiplicar
</title></head>
<body bgcolor="#555555" text="white" topmargin=100><center><h1>
Tabla de multiplicar<br>
<?php
$numero=8;
echo "<table border=2>";
echo "<tr align=center><td colspan=5>Tabla de multiplicar del ".$numero.":</td></tr>";

for($ciclo2=0;$ciclo2<=10;$ciclo2++)
{
$mult=$numero*$ciclo2;
echo "<tr align=center><td>".$numero."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
}
echo "</table>";

?>
</h1></center></body>