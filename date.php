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