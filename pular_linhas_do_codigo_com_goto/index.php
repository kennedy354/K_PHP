<?php
$a=0;
for($i=0;$i<=500;$i++){

    $a=mt_rand(0, 50);
        if($a==37){
            goto a;//pular linha
        }
        else{
            echo"$a<br>";
        }
}
a:
echo '37 Fim<br>';