<?php

class Paciente {
    public $peso; // em kg
    public $altura; // em metros

    public function __construct($peso, $altura) {
        $this->peso = $peso;
        $this->altura = $altura;
    }
}

class IMC {
    public static function calc($paciente) {
        if ($paciente->altura <= 0) {
            echo "A altura deve ser maior que zero.";
        }
        return $paciente->peso / ($paciente->altura ** 2);
    }

    public static function classifica($paciente) {
        $imc = self::calc($paciente);
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 24.9) {
            return "Peso normal";
        } elseif ($imc < 29.9) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }
}

$paciente = new Paciente(40, 1.75);
$imc = IMC::calc($paciente);
$classificacao = IMC::classifica($paciente);

echo "IMC: " . number_format($imc, 2) . "\n";
echo "Classificação: " . $classificacao . "\n";
?>
