<?php
$abbr = DateTimeZone::listAbbreviations();
echo '<pre>';
print_r($abbr['cet']);
echo '</pre>';
