<?php
$ny = new DateTime('1200 America/New_York');
$india = new DateTime('1200 Asia/Kolkata');
$diff = $ny->diff($india);
echo $diff->invert ? '-' : '+';
echo "$diff->h hours $diff->i minutes.";
echo '<br>';
echo $india->getTimestamp() - $ny->getTimestamp();