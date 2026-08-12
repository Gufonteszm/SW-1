<?php
$peso = $_POST['peso'];
$altura = $_POST['altura'];

            if ($peso <= 0 || $altura <= 0) {
                return [
                    "imc" => null,
                    "classificacao" => "Valores inválidos"
                ];
            }

            $imc = $peso / ($altura * $altura);

            if ($imc < 18.5) {
                $classificacao = "Abaixo do peso";
            } elseif ($imc < 25) {
                $classificacao = "Peso normal";
            } elseif ($imc < 30) {
                $classificacao = "Sobrepeso";
            } elseif ($imc < 35) {
                $classificacao = "Obesidade Grau I";
            } elseif ($imc < 40) {
                $classificacao = "Obesidade Grau II";
            } else {
                $classificacao = "Obesidade Grau III";
            }

            return [
                "imc" => number_format($imc, 2, ".", ""),
                "classificacao" => $classificacao
            ];
    
?>