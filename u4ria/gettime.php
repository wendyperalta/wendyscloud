<?php
$classId = $_POST['classId'];
$dayId = $_POST['dayId'];
require('config.php');
mysql_select_db($database, $makeconnection);
$sql_get_times="select distinct t.time, t.id 
from times t, schedule s
where s.class_id = ".$classId." AND s.day_id = ".$dayId." AND s.time_id = t.id";
$get_times = mysql_query($sql_get_times, $makeconnection) or die(mysql_error());
$row_get_times = mysql_fetch_assoc($get_times);
echo ('<option disabled selected>--Choose your time--</option>');
do{
echo ('<option value='.$row_get_times['id'].'>'.$row_get_times['time'].'</option>');
}while ($row_get_times = mysql_fetch_assoc($get_times));

 ?>