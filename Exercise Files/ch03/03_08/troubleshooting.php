<?php
$date = new DateTime('1/31/2015');
echo $date->format('F j, Y') . '<br>';
echo $date->modify('last day +1 month')->format('F j, Y') . '<br>';
echo $date->modify('last day -1 month')->format('F j, Y') . '<br>';
echo '<pre>';

echo '</pre>';