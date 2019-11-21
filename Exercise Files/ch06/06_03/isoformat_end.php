<?php
$date = new DateTime('1/1/2016');
echo $date->format('l, F j, Y') . '<br>';
echo 'ISO week date: ' . $date->format('o-\WW-N');