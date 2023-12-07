<?php

namespace Alura\DesignPattern;
use Alura\DesignPattern\Taxas\Taxa;

class CalculadoradeTaxas
{
    public function calcula(Saldo $saldo, Taxa $taxa) : float {
        return $taxa->calculaTaxa($saldo);
    }
}