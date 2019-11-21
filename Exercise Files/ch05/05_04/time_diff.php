<?php
$ny = new DateTime('America/New_York');
$india = new DateTime('Asia/Kolkata');
$diff = $ny->diff($india);
echo "$diff->h hours $diff->i minutes.";
