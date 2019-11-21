<?php
$date = new DateTime('July 7, 2015 America/Los_Angeles');
$lat = 34.385244;
$long = -119.485251;
$carp = date_sun_info($date->getTimestamp(), $lat, $long);
$sunrise = $date->setTimestamp($carp['sunrise'])->format('g:i a');
$sunset = $date->setTimestamp($carp['sunset'])->format('g:i a');
echo $date->format('F j, Y') . ": the sun rises in Carpinteria at $sunrise and sets at $sunset.";