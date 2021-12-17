<?php
header('Content-type: appliation/json');

$sum = (int) $_POST['sum'];
$sumAdd = (int)$_POST['sumAdd'];
$precent = (int)$_POST['precent'];
$daysY = 365;
$term = (int)$_POST['term'];
$date = $_POST['startDate'];
$type = $_POST['type'];
$amountAdd = 0;


switch ($type) {
  case 'day':
    $days = $term;
    $month = $term / 31;
  break;
  case 'month': 
    $days = $term * 31;
    $month = $term;
  break;
  case 'year': 
    $days = $term * 31 * 12;
    $month = $term * 12;
  break;
}

if ($_POST['everyMonth'] && $sumAdd !== 0) {
  $amountAdd = $sumAdd *  $month;
}

$sumPrecent = ($sum * $precent * $days / $daysY) / 100;
$result = round($sum + $sumPrecent + $amountAdd, 2);
$json = json_encode(['sum' => $result]);

echo $json;