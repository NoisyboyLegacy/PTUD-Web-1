<?php
$no1 = $_REQUEST['n1'];
$no2 = $_REQUEST['n2'];
$req = $_REQUEST['req'];
if ($req == 'add') {
    echo $no1 + $no2;
} elseif ($req == 'sub') {
    echo $no1 - $no2;
} elseif ($req == 'mul') {
    echo $no1 * $no2;
} elseif ($req == 'div') {
    echo $no1 / $no2;
}
// echo "Lô con cac" .$no1. "Lô con cac" .$no2;
