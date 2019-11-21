<?php
$date = new DateTime('July 7, 2015 America/Los_Angeles');
$lat = 34.385244;
$long = -119.485251;
$carp = date_sun_info($date->getTimestamp(), $lat, $long);
echo '<pre>';
print_r($carp);
echo '</pre>';