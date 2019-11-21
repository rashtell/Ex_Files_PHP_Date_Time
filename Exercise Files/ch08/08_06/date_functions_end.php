<?php
require_once './db_connect.php';
/*$sql = 'SELECT title, DATE_FORMAT(submitted, "%l:%i %p %a, %b %e, %Y") AS submit FROM posts
        WHERE DAYNAME(submitted) = "Saturday" || DAYOFWEEK(submitted) = 1
        ORDER BY submitted ASC';*/
$sql = 'SELECT title, DATE_FORMAT(submitted, "%l:%i %p %a, %b %e, %Y") AS submit FROM posts
        WHERE submitted > DATE_SUB(NOW(), INTERVAL 2 WEEK)
        ORDER BY submitted ASC';
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
<h1>Using MySQL Date Functions</h1>
<table>
    <?php
    if ($db) {
        foreach ($db->query($sql) as $row) {
            echo '<tr>';
            echo '<td>' . $row['submit'] . '</td><td>' . $row['title'] . '</td>';
            echo '</tr>';
        }
    }
    ?>
</table>
</body>
</html>