<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login | U4RIA Dance Studio</title>
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
<li><a href="instructors.html">Instructors</a></li>
<li><a href="schedule.html">Schedule</a></li>
<li><a href="tuition.html">Tuition</a></li>
<li><a href="reserve.php">Register</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="signup.php">Sign Up</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>

<div class="container">
<div style="text-align: left">
<p style="color: #FF0000"> Error: Wrong Username/Password </p>
<h3>Welcome!</h3><br/>
</div>
<form action="checklog.php" method="POST">
<label for="username">User Name: </label>
<input type ="text" name="username" /><br>
<label for="password">Password:</label>
<input type="password" name="password" /><br>
<input class="btn btn-lg btn-primary btn-block" type="submit" value="Log In" name="submit"/>
</form>

</div>
<br></br>
<br></br>
<br></br>
<br></br>

<footer>
<p>&copy; U4RIA 2014</p>
</footer>


</div><!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
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

</body>
</html>