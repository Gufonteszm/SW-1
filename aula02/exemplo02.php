<?php
$nome = "joão✌";
$idade = 25;
$altura = 1.75;
$status = true;
//exibir os valores

echo "o nome é: $nome"; //primeira forma
echo "<br>";
echo "o nome é: " . $nome; //segunda forma
echo "<br>";
echo "a altura é: $altura";
echo "<br>";

//verificar tipo e valor de uma variável
var_dump($altura);
echo "<br>";
print_r($altura);

//curiosidades
for ($i=0; $i <6; $i++) { 
    echo $i . "<br>";
}

echo "o status é: $status";
?>