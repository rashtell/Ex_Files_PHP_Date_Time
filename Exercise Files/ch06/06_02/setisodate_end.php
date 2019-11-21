<?php
//$date = new DateTime('2015-W01-5');
//$date->modify('2015-W01-6');
//echo $date->format('l, F j, Y');

$date = new DateTime();
echo $date->setISODate(2015, 9, 8)->format('l, F j, Y');