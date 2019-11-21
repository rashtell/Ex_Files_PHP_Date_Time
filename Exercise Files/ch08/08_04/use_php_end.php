<?php
require_once './db_connect.php';
$sql = 'SELECT title, submitted FROM posts';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dates from DB</title>
<style>
    body {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        color: #1B1B1B;
        margin-left: 30px;
    }
    table {
        border-collapse: collapse;
    }
    td {
        padding: 5px 20px;
    }
    tr {
        border-bottom: 1px solid #B8B8B8;
    }
</style>
</head>

<body>
<h1>Displaying Dates from a Database</h1>
<table>
    <?php
    if ($db) {
        foreach ($db->query($sql) as $row) {
            $submitted = date('g:i A D, M j, Y', strtotime($row['submitted']));
            echo '<tr>';
            echo '<td>' . $submitted . '</td><td>' . $row['title'] . '</td>';
            echo '</tr>';
        }
    }
    ?>
</table>
</body>
</html>