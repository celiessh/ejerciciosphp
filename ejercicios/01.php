<?php
//nombre, apellidos, edad, teléfono, email
$nombre="Carlos";
$apellidos="Enguita Lopez";
$edad=23;
$telefono=482984234;
$email='enguitalopez2022@iessantiagohernandez.com';

$array=array($nombre, $apellidos,$edad,$telefono,$email);
$tamano=sizeof($array);

echo '<!DOCTYPE html><html><body>
<table border="4">';
echo "
<tr>
    <td>$nombre</td>
    <td>$apellidos</td>
</tr>
";
print "
<tr>
    <td>$edad</td>
    <td>$telefono</td>
</tr>";
print "<tr><td colspan=\"2\">".$email."</td></tr></table>";

echo '<table border="3">';
for($i = 0;$i<$tamano;$i++){
    echo "<tr><td>";
    echo $array[$i];
    echo "</td></tr>";
}
print"</table></body></html>";