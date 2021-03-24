#!/usr/bin/php
<?php
require __DIR__.'/config.php';
if(@!isset($argv[1])){
    echo "\n É necessário informar os watts para calcular. Ex.: calculadoraenergia.php 20.8 \n";
    exit;
}
$watts = $argv[1];
$calculo_kwh_hora = number_format((($watts*1)/1000)*$tarifa, 2, ',', '.');
echo "GASTO EM REAIS POR HORA: R$".$calculo_kwh_hora."\nCONTA SIMPLIFICADA: \n";

$calculo_kwh_dia = (($watts*$horas_uso_diario)/1000);
echo "KWH DIA: ".$calculo_kwh_dia."\n";
$calculo_mes = $calculo_kwh_dia*$dias_uso_mes;
echo "KWH MES: ".$calculo_mes."\n";
$valor_total_reais = number_format($calculo_mes*$tarifa, 2, ',', '.');
echo "VALOR EM REAIS MES: R$".$valor_total_reais."\n";
