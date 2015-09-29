<?php

include_once 'Trading.php';

$model = new Trading;

//$metode = 'add_fix';
//$metode = 'add_auction';

//$model->add($metode);

$model->get_my_sellings();