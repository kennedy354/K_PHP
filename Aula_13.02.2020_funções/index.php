<?php
$n=4;
$z=3;
function mult($a,$b){
    return $a * $b;
}
//print mult($n,$z);
//print "<br>";
print mult(3,3);

/*//Exemplo 3
$nome = "Ana";
function escrever($n){//$n é um parametro
    //$n= "Beatriz<br>";
    $n .= " Beatriz";//".=" para somar nomes
    print "$n<br>";
}
escrever($nome);//$nome é um argumento
print $nome;*/

/*//Exemplo 2
$nome="João<br>";
function escrevernome(){
    global $nome;
    echo $nome;
    $nome = "Kuririn";
}
escrevernome();
escrevernome();*/

/*//Exemplo 1
$nome="Maria";//variável global
function escrevernome(){
    $nome ="José";//variável local
    echo $nome;
}
escrevernome();
echo $nome;*/