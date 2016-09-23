<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>U4RIA Dance Studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--styles -->
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
              <li class ="active"><a href="signup.php">Sign Up</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="container">
	  <?php
	  $con = mysql_connect("localhost","wperalta","wendy51192");
	  if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
 
		mysql_select_db("wperalta", $con);
		
		$sql="INSERT INTO users (fname, lname, user, email, pass)
		VALUES ('$_POST[fname]','$_POST[lname]','$_POST[user]','$_POST[email]','$_POST[pass]')";
	 
		if (!mysql_query($sql,$con))
		{
			die('Error: ' . mysql_error($con));
		}
		/*echo "Thank you for Signing Up! ";*/
		header('Location: login.php'); /*Redirects to Login Page*/
		exit;
	 
		mysql_close($con)
      ?>
    </div>
    
</body>
</html>