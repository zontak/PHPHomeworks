<?php
$month = date("F");
$year = date("Y");
$allDays = date("t");
for($i = 1; $i <= $allDays; $i++){
    $strDate = strtotime("$i $month $year");
    if(date("l", $strDate) == "Sunday") {
        echo date("jS F, Y", $strDate) . "<br />";
    }
}
?>