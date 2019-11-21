<?php
function db_datecheck($month, $day, $year) {
    $month = trim($month);
    $day = trim($day);
    $year = trim($year);
    $result[0] = false;
    if (empty($month) || empty($day) || empty($year)) {
        $result[1] = 'All fields must be filled in';
    } elseif (!is_numeric($month) || !is_numeric($day) || !is_numeric($year)) {
        $result[1] = 'Please use numbers only';
    } elseif (($month < 1 || $month > 12) || ($day < 1 || $day > 31) || ($year < 1000 || $year > 9999)) {
        $result[1] = 'Out of range';
    } elseif (!checkdate($month, $day, $year)) {
        $result[1] = 'Invalid date';
    } else {
        $result[0] = true;
        $result[1] = sprintf('%d-%02d-%02d', $year, $month, $day);
    }
    return $result;
}