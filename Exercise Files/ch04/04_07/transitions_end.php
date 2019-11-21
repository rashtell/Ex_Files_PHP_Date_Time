<?php
$id = 'Asia/Tokyo';
$tz = new DateTimeZone($id);
$transitions = $tz->getTransitions(strtotime('1/1'), strtotime('12/31 +4 years'));
echo '<pre>';
print_r($transitions);
echo '</pre>';