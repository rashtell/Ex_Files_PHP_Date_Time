<?php
$ts = strtotime('7/4/2015');
$date = new DateTime();
echo $date->format('l, F j, Y') . '<br>';
$date->setTimestamp($ts);
echo $date->format('l, F j, Y') . '<br>';