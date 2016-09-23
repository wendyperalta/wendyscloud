<?php
session_start();
$class = $_POST['class'];
$difficulty = $_POST['difficulty'];
$day = $_POST['day'];
$time = $_POST['time'];
$username = $_SESSION['username'];

if (isset($class) && isset($difficulty) && isset($day) && isset($time)) {

require('config.php');
mysql_select_db($database, $makeconnection);
$sql_get_class="SELECT class_name FROM classes WHERE id=".$class."";
$get_class = mysql_query($sql_get_class, $makeconnection) or die(mysql_error());
$row_get_class = mysql_fetch_assoc($get_class);

$sql_get_difficulty="SELECT level FROM difficulty WHERE id=".$difficulty."";
$get_difficulty = mysql_query($sql_get_difficulty, $makeconnection) or die(mysql_error());
$row_get_difficulty = mysql_fetch_assoc($get_difficulty);

$sql_get_day="SELECT day FROM days WHERE id=".$day."";
$get_day = mysql_query($sql_get_day, $makeconnection) or die(mysql_error());
$row_get_day = mysql_fetch_assoc($get_day);

$sql_get_time="SELECT time FROM times WHERE id=".$time."";
$get_time = mysql_query($sql_get_time, $makeconnection) or die(mysql_error());
$row_get_time = mysql_fetch_assoc($get_time);

$sql_get_instructor="select distinct i.instructor_name, i.image 
from instructors i, schedule s
where s.class_id = ".$class." AND s.day_id = ".$day." AND s.time_id = ".$time." AND s.instructor_id = i.id";
$get_instructor = mysql_query($sql_get_instructor, $makeconnection) or die(mysql_error());
$row_get_instructor = mysql_fetch_assoc($get_instructor);
  
    
    
   
}else{
	header('Location: reserve.php?fields=needed');
}
?>

<?php
   
    
    $classid=$row_get_class['class_name'];
    $dayid=$row_get_day['day'];
    $timeid=$row_get_time['time'];
    
    $con = mysql_connect("localhost","wendyprlt","W3ndy7433");
    if (!$con)
    {
		die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db("wendyscloud", $con);
   
    
    
    // $sql="INSERT INTO registered (user_id, classid, dayid, timeid)
    // VALUES ('$username', '$classid', '$dayid', '$timeid')";
    
    // $sql="INSERT INTO payment (user_ids, dateid, price)
    // VALUES ('$username', now(), '10.00')";
    
    // if (!mysql_query($sql,$con))
    // {
    //     die('Error: ' . mysql_error($con));
    // }
          
?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>U4RIA Dance Studio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<style>
	  body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	  }
	  h1,h2,h4{
	  	text-align:center;
	  }
	  h4{background-color:#fff;padding:20px 0;margin:0;}
	  hr{margin:0;}
	  #instructor-wrapper {background-color: #fff;}
	  #instructor {width: 400px;margin: 0 auto;position:relative;}
	  #instructor h1 {margin:0;position: absolute;bottom: 0;font-size: 40px;width: 100%;background-color: #000;opacity: 0.7;color: #fff;padding: 20px;text-align: center;webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
	</style>
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="../assets/js/html5shiv.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.png">								 
  </head>
  <body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="navbar-inner">
		<div class="container">
		  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="brand" href="index.html">U4RIA Dance Studio</a>
		  <div class="nav-collapse collapse">
			<ul class="nav">
              <li class="dropdown">
               <a href="instructors.html" class="dropdown-toggle" data-toggle="dropdown">Instructors <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="instructors.html">Adri</a></li>
                  <li><a href="instructors.html#ben">Ben</a></li>
                  <li><a href="instructors.html#malu">Malu</a></li>
                  <li><a href="instructors.html#brianna">Brianna</a></li>
                  <li><a href="instructors.html#kevin">Kevin</a></li>
                </ul>
              </li>
              <li><a href="classes.html">Classes</a></li>
			  <li><a href="schedule.html">Schedule</a></li>
              <li><a href="gallery.html">Gallery</a></li>
			  <li><a href="tuition.html">Tuition</a></li>
			  <li class="active"><a href="reserve.php">Register</a></li>
			  <li><a href="contact.html">Contact Us</a></li>
			</ul>
		  </div><!--/.nav-collapse -->
		</div>
	  </div>
	</div>

	<div class="container">	
      <h1>Your Class Reservation</h1>
      <p><h2> You have signed up for: </h2>
      
      <h4><?php echo $row_get_class['class_name']; ?></h4>
      </p>
      
      <p><h2> Difficulty level: </h2>
      
      <h4><?php echo $row_get_difficulty['level']; ?></h4>
      </p>
      
      <p> <h2>On this day: </h2>
      
      <h4><?php echo $row_get_day['day']; ?></h4>
      </p>
      
      <p> <h2>At this time: </h2>
      
      <h4><?php echo $row_get_time['time']; ?></h4>
      </p>
     
      <p> <h2>With: </h2>      
      <div id="instructor-wrapper">
      <div id="instructor">
      <img src="assets/img/instructors/<?php echo $row_get_instructor['image']; ?>" width="400" />
      <h1><?php echo $row_get_instructor['instructor_name']; ?></h1>         
      </div>
	  </div>
	  
      <p><h2> Amount charged: </h2>      
      <h4>$10.00</h4>
      </p>
        	 
	  <footer>
	  <br><br><br>
		<p>&copy; U4RIA 2014</p>
	  </footer>
	  
	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-2.0.3.min.js"></script>
	<script src="assets/js/bootstrap-transition.js"></script>
	<script src="assets/js/bootstrap-alert.js"></script>
	<script src="assets/js/bootstrap-modal.js"></script>
	<script src="assets/js/bootstrap-dropdown.js"></script>
	<script src="assets/js/bootstrap-scrollspy.js"></script>
	<script src="assets/js/bootstrap-tab.js"></script>
	<script src="assets/js/bootstrap-tooltip.js"></script>
	<script src="assets/js/bootstrap-popover.js"></script>
	<script src="assets/js/bootstrap-button.js"></script>
	<script src="assets/js/bootstrap-collapse.js"></script>
	<script src="assets/js/bootstrap-carousel.js"></script>
	<script src="assets/js/bootstrap-typeahead.js"></script>
	<script src="assets/js/main.js"></script>
  </body>
</html>
