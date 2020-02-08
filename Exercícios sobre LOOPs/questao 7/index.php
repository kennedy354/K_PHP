<?php
$imp=0;
for($i=0;$i<=100;$i++){
    if($i%2!=0){
       $imp=$imp+$i;
    }
}
echo "Soma de todos os impares entre 0 e 100 = $imp<br>";