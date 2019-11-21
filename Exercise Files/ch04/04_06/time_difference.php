<?php
$id1 = 'America/New_York';
$id2 = 'Asia/Tokyo';
$tz1 = new DateTimeZone($id1);
$tz2 = new DateTimeZone($id2);
$offset1 = $tz1->getOffset(new DateTime());
$offset2 = $tz2->getOffset(new DateTime());
