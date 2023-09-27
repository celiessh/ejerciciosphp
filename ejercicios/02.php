<?php
echo "<!DOCTYPE><html><body><table border='4'>";
define("MAX",10);
$contador=0;
const OPERADOR = "*";
const TABLA=8;
echo "<tr><td colspan='2'>Tabla del ".TABLA."</td></tr>";
for($contador;$contador<=MAX;$contador++){
    echo "<tr><td>$contador".OPERADOR.TABLA."</td><td>".($contador*TABLA)."</td></tr>";
}
echo "</table></body></html>";