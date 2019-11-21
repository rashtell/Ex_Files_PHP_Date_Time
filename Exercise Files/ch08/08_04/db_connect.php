<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=datetime_esst', 'training', 'lynda');
} catch (PDOException $e) {
    echo $e->getMessage();
}