<?php

namespace Alura\DesignPattern\Taxas;
use Alura\DesignPattern\Saldo;

interface Taxa
{
    public function calculaTaxa(Saldo $saldo): float;
}