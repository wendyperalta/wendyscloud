<?php
$classId = $_POST['classID'];
$difficultyId = $_POST['difficultyId'];
require('config.php');
mysql_select_db($database, $makeconnection);
$sql_get_days="select distinct d.day, d.id 
from days d, schedule s
where s.class_id = ".$classId." AND s.difficulty_id = ".$difficultyId." AND s.day_id = d.id";
$get_days = mysql_query($sql_get_days, $makeconnection) or die(mysql_error());
$row_get_days = mysql_fetch_assoc($get_days);
echo ('<option disabled selected>--Choose a day--</option>');
do{
echo ('<option value='.$row_get_days['id'].'>'.$row_get_days['day'].'</option>');
}while ($row_get_days = mysql_fetch_assoc($get_days));

 ?>
 
