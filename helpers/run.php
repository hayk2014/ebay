<?php

include_once 'Trading.php';

$model = new Trading;

//$metode = 'add_fix';
//$metode = 'add_auction';
$metode = 'get_my_sellings';

$model->add($metode);

$model->get_my_sellings($metode);