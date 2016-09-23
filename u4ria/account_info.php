<?php
    session_start();
    require('config.php');
    mysql_select_db($database, $makeconnection);
    $id = $_SESSION["username"];
    
    $result3 = mysql_query("SELECT * FROM users where user='$id'");
    while($row3 = mysql_fetch_array($result3))
    {
       $fname=$row3['fname'];
       $lname=$row3['lname'];
       $email=$row3['email'];
       $pass=$row3['pass'];
       $picture=$row3['picture'];
        
    }
    
 
    
?>
<?php
    session_start();
    require('config.php');
    mysql_select_db($database, $makeconnection);
    $id = $_SESSION["username"];
    
    $result5 = mysql_query("SELECT * FROM payment where user_ids='$id'");
    while($row5 = mysql_fetch_array($result5))
    {
        $dateid=$row5['dateid'];
        $price=$row5['price'];
    }
    
?>
<?php
    session_start();
    require('config.php');
    mysql_select_db($database, $makeconnection);
    $id = $_SESSION["username"];
    
    $result4 = mysql_query("SELECT * FROM registered where user_id='$id' and timeid< now()");
    while($row4 = mysql_fetch_array($result4))
    {
        $classid=$row4['classid'];
        $dayid=$row4['dayid'];
        $timeid=$row4['timeid'];
    }
    
    ?>

    
    

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Account Info | U4RIA Dance Studio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
    padding-top: 60px;
    padding-bottom: 40px;
}
</style>
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<link href="assets/css/main.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/ico/favicon.png">
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
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
<li><a href="reserve.php">Register</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="account_info.php">Account Info</a></li>
<li><a href="logged_out.php">Log Out</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>


<div class="row">
<div class="span7">
<div class="home"><h2>Your Profile Information</h2></div>
</div></div>
<table width="580" align="left" cellpadding="0">
<tr>
<td width="129" rowspan="5"><img src="upload/<? echo $picture; ?>" width="129"><br></br>
<form action="newupload.php" method="post"
enctype="multipart/form-data">
<input type="hidden" name="user" value="<?php echo $id ?>" />
<input type="file" name="file" id="file"><br></br>
<div style="text-align: left">
<input type="submit" name="upload" value="Upload">
</div>
</form>
</td>
<tr>
<td width="40" valign="baseline"><div align="left" > <h5> First Name: </h5> </div></td>
<td width="40"<p> <?php echo $fname ?></td> </p>
</tr>
<tr>
<td valign="baseline"><div align="left"> <h5> Last Name: </h5> </div></td>
<td valign="baseline"><p><?php echo $lname ?></td></p>
</tr>
<tr>
<td valign="baseline"><div align="left"> <h5>Email Address: </h5> </div></td>
<td valign="baseline"><p><?php echo $email ?></p> </td>
</tr>
<tr>
<td valign="baseline"><div align="left"> <h5> Password: </h5> </div></td>
<td valign="baseline"><p><?php echo $pass ?></p><br></br>
</td>
</tr>
</table>

<p align="center"><a href="account_info.php"></a></p>
<td>

<br></br>

<div class="row">
<div class="span7">
<div class="home"><h2>Most Recent Payment</h2></div>
<tr>
<td width="82" valign="baseline"><div align="center" > <h5> Payment Date: </h5> </div></td>
<td width="165" valign="baseline"><p> <?php echo $dateid ?></td> </p>
</tr>
<tr>
<td valign="baseline"><div align="center"> <h5> Payment Amount: </h5> </div></td>
<td valign="baseline"><p><?php echo $price ?></td></p>
</tr>
</td>
</tr>
</table>

<br></br>
<br></br>

<div class="row">
<div class="span7">
<div class="home"><h2>Upcoming Class</h2></div>
<tr>
<td width="82" valign="baseline"><div align="center" > <h5> Class Day: </h5> </div></td>
<td width="165" valign="baseline"><p> <?php echo $dayid ?></td> </p>
</tr>
<tr>
<td valign="baseline"><div align="center"> <h5> Class Time: </h5>  </div></td>
<td valign="baseline"><?php echo $timeid ?></td>
</tr>
<tr>
<td valign="baseline"><div align="center"> <h5> Class Name: </h5> </div></td>
<td valign="baseline"><p><?php echo $classid ?></td></p>
</tr>
</td>
</tr>
</table>
</div></div>
</div>


<div class = "container">
<br></br><br></br><br></br>
<footer>
<p> &copy; U4RIA 2014</p>
</footer>
</div>


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