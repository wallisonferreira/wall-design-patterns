<?php 
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoradeTaxas;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Saldo;
use Alura\DesignPattern\Taxas\BradescoTaxa;

require 'vendor/autoload.php';

// A classe Calculadora de Impostos representa uma classe de serviço
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento;
$orcamento->valor = 100;

//echo $calculadora->calcula($orcamento, new Iss());

// -------------------------------------------------

$calculadoraTaxa = new CalculadoradeTaxas();

$saldo = new Saldo;
$saldo->valor = 250;

echo $calculadoraTaxa->calcula($saldo, new BradescoTaxa());