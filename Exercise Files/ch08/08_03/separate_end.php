<?php
require_once  './db_datecheck.php';
$months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
$currentMonth = date('n');
$currentDay = date('j');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Separate Input Elements</title>
<style>
    body {
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        color: #1B1B1B;
        margin-left: 30px;
    }
    #year {
        width: 3.75em;
    }
</style>
</head>

<body>
<h1>Separate Input Elements</h1>
<form id="form1" name="form1" method="post">
  <p>
    <label for="month">Month:</label>
    <select name="month" id="month">
    <?php
    for ($i = 1; $i <= 12; $i++) {
        echo "<option value='$i'";
        if ((!$_POST && $currentMonth == $i) ||
            (isset($_POST['month']) && $_POST['month'] == $i)) {
            echo 'selected';
        }
        echo '>' . $months[$i-1] . '</option>';
    }    
    ?>    
    </select>
    <label for="day">Day:</label>
    <select name="day" id="day">
    <?php
    for ($i = 1; $i <= 31; $i++) {
        echo "<option value='$i'";
        if ((!$_POST && $currentDay == $i) ||
            (isset($_POST['day']) && $_POST['day'] == $i)) {
            echo 'selected';
        }
        echo ">$i</option>";
    }    
    ?>
    </select>
    <label for="year">Year:</label>
    <input type="number" maxlength="4" required name="year" id="year" value="<?php
        if(!isset($_POST['year'])) {
            echo date('Y');
        } else {
            echo $_POST['year'];
        }                                                                    
    ?>">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit">
  </p>
</form>
<?php
if (isset($_POST['submit'])) {
    $result = db_datecheck($_POST['month'], $_POST['day'], $_POST['year']);
    if ($result[0]) {
        echo '<p>The selected date is ' . $result[1] . '.</p>';
    } else {
        echo "<p>$result[1]</p>";
    }
}  
?>
</body>
</html>