<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML5 Date Input</title>
    <style>
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            color: #1B1B1B;
            margin-left: 30px;
        }
    </style>
</head>

<body>
<h1>HTML5 Date Input</h1>
<form id="form1" name="form1" method="post">
  <p>
    <label for="date">Date:</label>
    <input type="date" name="date" id="date">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
  </p>
</form>
<?php
if (isset($_POST['submit'])) {
    echo '<p>The selected date is ' . $_POST['date'] . '.</p>';
}    
?>
</body>
</html>