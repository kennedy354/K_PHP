<?php
	$arr = array("Uva","Pera",8=>"Maça","Banana","manga",20=> array ("Figo","Pera"));//Array dentro de um Array
	
	echo"<pre>";
	print_r($arr);
	echo"</pre>";

	array_pop($arr);//apaga o ultimo elemento
	//array_push($arr);//insere no final do array-
	//echo $arr[20][1];//Imprimir uma variavel de um array dentro de outro
	unset($arr[10]);//Apagar indice de um array
	unset($arr);//Apagar array inteiro (Também pode ser usado para apagar variáveis)
	/*
	array_shift();//remove primeiro elemento
	array_slice();//Dvide e retorna determinado elemento
	array_replace();//Substitui elemento
	*/
	


/*
	$array = array(
		1 =>"A",
		"1" =>"B",
		1.8 =>"C",
		true =>"d",

	);
	print_r($array);
	//var_dump($array);//Informa o tipo das variaveis
*/
/*
//Maneiras de declaração de array
	$arr = array("uva","pera","maçã");

	$arr2 = [
		"Fruta-1" => "uva",
		"Fruta-2" => "Pera",
		"Fruta-3" => "Maçã",
	];

	$arr3=[];
	$arr3[10]=1000;
	$arr3[9]="Caderno";
	echo"<pre>";//Mostra espaços e quebra de linhas
	print_r($arr);
	echo"</pre>";
*/