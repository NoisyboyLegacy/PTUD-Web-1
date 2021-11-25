<?php
$array = ['Aenean', 'Lorem', 'Morbi'];

array_walk($array, function (& $item) {
    $item['new_key'] = $item['old_key'];
    unset($item['old_key']);
 });
// echo "<pre>";
var_dump($array);
// echo "</pre>";
?>