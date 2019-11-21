<?php
if (strtoupper(substr(PHP_OS, 0 , 3)) == 'WIN') {
    header('Content-type: text/html; charset=iso-8859-1');
} else {
    header('Content-type: text/html; charset=utf-8');
}
$xmas2015 = strtotime('12/25/2015');
setlocale(LC_TIME, ['fr-FR', 'fr_FR.UTF-8', 'fr_FR', 'fr']);
echo '<p>Using date(): ' . date('l, F j, Y', $xmas2015) . '</p>';
echo '<p>Using strftime(): ' . strftime('%A, %d %B, %Y', $xmas2015);