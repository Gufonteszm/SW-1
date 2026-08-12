<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

$cpf = preg_replace('/[^0-9]/', '', $cpf);
if (strlen($cpf) != 11) 
    echo "CPF inválido. O CPF deve conter 11 dígitos.";
else 
{
    $soma = 0;
    for ($i = 0; $i < 9; $i++) 
        $soma += $cpf[$i] * (10 - $i);
    $resto1 = $soma % 11;
    $soma = 0;
    for ($i = 0; $i < 10; $i++) 
        $soma += $cpf[$i] * (11 - $i);
    $resto2 = $soma % 11;

    if ($resto1 < 2 && $cpf[9] == 0 || $resto1 >= 2 && $cpf[9] == 11 - $resto1 || $resto2 < 2 && $cpf[10] == 0 || $resto2 >= 2 && $cpf[10] == 11 - $resto2)
            echo "$nome, seu CPF é válido.";
    else 
        echo "$nome, seu CPF não é válido.";
}
?>