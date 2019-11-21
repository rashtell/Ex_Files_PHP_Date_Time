<?php
$date = new DateTime();
echo $date->format('l, F j, Y') . '<br>';
$ts = $date->getTimestamp();
