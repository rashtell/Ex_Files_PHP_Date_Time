<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery UI Datepicker</title>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style>
    body {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        color: #1B1B1B;
        margin-left: 30px;
    }
</style>
</head>

<body>
<h1>jQuery UI Datepicker</h1>
<form id="form1" name="form1" method="post">
  <p>
    <label for="date">Date:</label>
    <input type="text" name="date" id="date">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
  </p>
</form>
<?php
  if (isset($_POST['submit'])) {
      $parts = explode('/', $_POST['date']);
      $date = "$parts[2]-$parts[0]-$parts[1]";
      echo '<p>The selected date is ' . $date . '.</p>';
  }  
?>
<script src="https://code.jquery.com/jquery-1.12.3.min.js";></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
    $(function() {
        $('#date').datepicker({
            //dateFormat: 'yy-mm-dd'
        });
    });
</script>
</body>
</html>