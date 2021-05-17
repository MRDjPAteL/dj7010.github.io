<html>
<head>
<title>TODO supply a title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial- scale=1.0">
</head>
<body>
<center><h1>Enter Two Dates to get between days</h1></center>
<center><form action="date.php" method="post">
<input type="date" name="date1">
<input type="date" name="date2"><br><br>
<input type="submit" name="submit" value="submit">
</form></center>
<br><br>
</body>
<?php
function dateDiffInDays($date1, $date2)
{
$diff = strtotime($date2) - strtotime($date1);
 return abs(round($diff / 86400));
}
$date1 = $_POST["date1"];
$date2 = $_POST["date2"];
$dateDiff = dateDiffInDays($date1, $date2); 
echo '<h1 align = center>Difference between two dates: '.$dateDiff.' Days </h1>';
echo '</body>';
?>