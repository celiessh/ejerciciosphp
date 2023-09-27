<?php
    $var1 = 5;
    $var2 = "a";
    $var3= 'A';
    $var4='5';
    //comentario
    /*
        mas comentarios
    */
    echo $var1."<br>\n";
    var_dump($var1,$var2,$var3);
    echo "<br>\n c".$var2." ".$var3."<br>";
    print_r($var1);
    echo "<br>". gettype($var3);
    if($var1>6 && $var1<9){
        echo "<br>EEE";
    }elseif(false){

    }
    if($var1==0 || $var1==5){
        echo "<br>oincvxionfg";
    }else if(false){

    }
    echo "<br>".(6 + 7) . "<br>";
    echo (4*4)."<br>";
    echo (2^3)."<br>";
    if($var1==$var4){
        echo "iguales<br>";
    }
    if($var1===$var4){
        echo "iguales en tipo y contenido<br>";
    }else{
        echo "no son iguales en tipo o en contenido<br>";
    }