<?php

function ArraySortido(){

	$array;

	//gerar vetor de 20 posições randomico com números de 1 a 10
	for($i = 0; $i < 20; $i++){
		$array[$i] = rand(1,10);
	}
	echo "Array sorteado".json_encode($array)."</br>";

	//Identificar incidência de cada número
	$repeticao = array_count_values($array);

	$cont = 0;
	foreach($repeticao as $key => $value){
		//verificar números não repetidos e armazenar
	    if($value == 1){
		   $n_repetidos[$cont] = $key;
		   $cont++;
	    }
	}
	echo "Os números que não se repetem são o ".json_encode($n_repetidos).".";

}

ArraySortido();
?>
