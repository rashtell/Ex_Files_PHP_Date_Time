<?php
$identifiers = DateTimeZone::listIdentifiers();
echo '<p>' . count($identifiers) . ' identifiers found:</p>';
echo '<ul>';
foreach ($identifiers as $id) {
    echo '<li>';
    echo $id;
    echo '</li>';
}
echo '</ul>';