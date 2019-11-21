<?php
$id = 'America/Los_Angeles';
$tz = new DateTimeZone($id);
$transitions = $tz->getTransitions();
echo '<pre>';
print_r($transitions);
echo '</pre>';