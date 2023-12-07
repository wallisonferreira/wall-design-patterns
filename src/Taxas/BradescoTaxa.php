<?php

namespace Alura\DesignPattern\Taxas;
use Alura\DesignPattern\Saldo;

class BradescoTaxa implements Taxa
{
    public function calculaTaxa(Saldo $saldo): float {
        return $saldo->valor * 0.8;
    }
}