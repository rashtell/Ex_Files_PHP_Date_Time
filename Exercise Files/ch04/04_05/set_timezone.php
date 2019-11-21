<?php
$date = new DateTime();
echo $date->format('g:i a') . '<br>';
echo $date->getTimezone()->getName() . '<br>';
