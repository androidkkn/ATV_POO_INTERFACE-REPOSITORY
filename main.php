<?php
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$clt = new FuncionarioCLT(
    'Ana Souza',
    'ana@email.com',
    '123.456.789-00',
    '1234567',
    '11/11/2026',
    40,
    3500
);

$pj = new FuncionarioPJ(
    'Bruno Lima',
    'bruno@email.com',
    '12.345.678/0001-90',
    'Bruno Serviços LTDA',
    5000,
    'Mensal'
);

echo "FUNCIONÁRIO CLT\n";
echo $clt->getDados();
echo $clt->contratar() . "\n";
echo $clt->demitir() . "\n\n";

echo "FUNCIONÁRIO PJ\n";
echo $pj->getDados();
echo $pj->contratar() . "\n";
echo $pj->demitir() . "\n";
