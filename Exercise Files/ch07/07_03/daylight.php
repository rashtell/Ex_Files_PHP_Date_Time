<?php
$date = new DateTime('June 21, 2015 Europe/London');
$lat = 51.507351;
$long = -0.127758;
$london = date_sun_info($date->getTimestamp(), $lat, $long);
