<?php
function get_memory() {
  foreach(file('/proc/meminfo') as $ri)
    $m[strtok($ri, ':')] = strtok('');
  return 100 - round(($m['MemFree'] + $m['Buffers'] + $m['Cached']) / $m['MemTotal'] * 100);
}

//Ping Function
function get_ping($ip=NULL) {
$ip = $_SERVER['REMOTE_ADDR'];
$exec = exec("ping -c 3 -s 64 -t 64 ".$ip);
$array = explode("/", end(explode("=", $exec )) );
return ceil($array[1]) . 'ms';
}

//Server IP Function
function get_ip() {
  echo $_SERVER['SERVER_ADDR'];
}

//HDD Free Space Function
function get_hdd() {
	exec("df -h",$a);
if ($start=strpos($a[1], '%')) {
$b = substr($a[1], $start-2, 3);
echo $b;
unset ($a, $b);
}
else
echo 'Error getting HDD space';
}

//CPU Model Info Function
function get_cpuinfo() {
	exec("cat /proc/cpuinfo | grep 'model name'",$a);
if ($start=strpos($a[0], ':')) {
$end=strlen($a[0])-$start;
$b = substr($a[0], $start+1, $end);
echo $b;
unset ($a, $b);
}
else
echo 'Error getting cpuinfo';
}

//Load test Function
function get_load() {
	exec("uptime",$load);
if ($start=strpos($load[0], 'age:')) {
$end=strlen($load[0])-$start;
$b = substr($load[0], $start+5, $end);
echo $b;
unset ($a, $b);
}
else
echo "Error getting load";
}

//Uptime Function
function get_uptime() {
$uptime = shell_exec("cut -d. -f1 /proc/uptime");
$days = floor($uptime/60/60/24);
$hours = $uptime/60/60%24;
$mins = $uptime/60%60;
$secs = $uptime%60;
echo "$days days $hours hours $mins minutes and $secs seconds";
}

//Speedtest Function
function get_speedtest() {
exec("/usr/bin/wget -O /dev/null http://cachefly.cachefly.net/1mb.test 2>&1",$output);
end($output);
$a=prev($output);
if ($start=strpos($a, '('))
if ($end=strpos(substr($a,$start+1), ')')) {
$b = substr($a, $start+1, $end);
echo $b;
unset ($a, $b);
}
else
echo 'Error running speedtest';
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Killer - Server Test </title>
<head>
<center>
<h2><span style="font-size:220%;font-weight:bold;font-style:normal;color:red;text-decoration:none;text-shadow:#000 2px 2px  2px;font-variant:small-caps; background-image: url(http://i46.tinypic.com/2dwc6s1.gif)" ;align="center">  Killer Server Test </span></h2>
</head>

<body>
<div id="container">

		<div id="content">

        
        <div id="content_top"></div>
        <div id="content_main"> 
   
          <table width="600" border="1">
            <tr>
              <th colspan="2" scope="col">Server's Statistics</th>
            </tr>
            <tr>
              <td><img src='http://i.imgur.com/KIqauHT.png' alt='Load' />Server IP Address :</td>
              <td><?php

    echo get_ip();


?></td>
            </tr>
            <tr>
              <td><img src='http://i.imgur.com/DvfdijN.png' alt='Uptime' />Server Uptime :</td>
              <td><?php

echo get_uptime();

?></td>
            </tr>
            <tr>
              <td><img src='http://i.imgur.com/8a87UFo.png' alt='Load' />Average Load :</td>
              <td><?php

echo get_load();


?></td>
            </tr>
            <tr>
              <td><img src="http://i.imgur.com/n3SgjPq.png" alt="CPU" />Server CPU Info :</td>
              <td><?php 

echo get_cpuinfo();

?></td>
            </tr>
            <tr>
              <td><img src="http://i.imgur.com/4mH6HOO.png" alt="HDD"/>Server Disk Usage :</td>
              <td><?php 

echo get_hdd();

?></td>
            </tr>
            <tr>
              <td><img src="http://i.imgur.com/cmQMphK.png" alt="HDD" />Memory Usage :</td>
              <td><?php

echo get_memory();
echo '%';

?></td>
            </tr>
            <tr>
              <td><img src="http://i.imgur.com/JdcXR8E.png" alt="Ping"/>Ping to this server :</td>
              <td><?php 

echo get_ping();

?></td>
            </tr>
            <tr>
              <td><img src="http://i.imgur.com/tCQtEMV.png" alt="Ping"/>Server Download Speed Test :</td>
              <td><?php

    echo get_speedtest(); 

?></td>
            </tr>
            <tr>
              <td colspan="2"><input name="Refresh" type=button id="Refresh" onclick="history.go()" value="Refresh" /></td>
            </tr>
          </table>
        </div>
        <center>

</body>
</html>
