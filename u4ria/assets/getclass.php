{\rtf1\ansi\ansicpg1252\cocoartf1265\cocoasubrtf190
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural

\f0\fs24 \cf0 <?php\
$categoryId= $_POST['categoryId\'92];\
require('config.php');\
mysql_select_db($database, $makeconnection);\
$sql_get_classes="select distinct c.class, c.id \
from classes c, schedule s\
where s.category_id = ".$categoryId." AND s.class_id = c.id";\
$get_classes = mysql_query($sql_get_classes, $makeconnection) or die(mysql_error());\
$row_get_classes = mysql_fetch_assoc($get_classes);\
echo ('<option disabled selected>--Choose your class--</option>');\
do\{\
echo('<option value='.$row_get_classes[\'91id'].'>'.$row_get_classes[\'91class'].'</option>');\
\}while ($row_get_classes = mysql_fetch_assoc($get_classes));\
?>\
}