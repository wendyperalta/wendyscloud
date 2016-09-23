<?php
$classId = $_POST['classId'];
require('config.php');
mysql_select_db($database, $makeconnection);
$sql_get_difficulty="select distinct l.level, l.id 
from difficulty l, schedule s
where s.class_id = ".$classId." AND s.difficulty_id = l.id";
$get_difficulty = mysql_query($sql_get_difficulty, $makeconnection) or die(mysql_error());
$row_get_difficulty = mysql_fetch_assoc($get_difficulty);
echo ('<option disabled selected>--Choose a level--</option>');
do{
echo ('<option value='.$row_get_difficulty['id'].'>'.$row_get_difficulty['level'].'</option>');
}while ($row_get_difficulty = mysql_fetch_assoc($get_difficulty));

 ?>