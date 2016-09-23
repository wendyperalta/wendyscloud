<?php
session_start();
$fields = $_GET['fields'];
require('config.php');
mysql_select_db($database, $makeconnection);
$sql_get_class="SELECT * FROM classes";
$get_class = mysql_query($sql_get_class, $makeconnection) or die(mysql_error());
$row_get_class = mysql_fetch_assoc($get_class);
$class_id = $row_get_class['id'];
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
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link href="assets/css/main.css" rel="stylesheet">

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
      <h1>Don't wait in line!</h1>
      <h4>Sometimes it gets crowded. Reserving a spot in class online saves you time and gives you a chance to come to class early and stretch before class starts!</h4>
      <h4>Choose from our available schedule below and save some time at the door!</h4>
      <br><br>
   <form id="reserve" action="confirmation.php" method="post">   
    <select id="class" name="class">
    <option disabled selected>--Choose a class--</option>
<?php do{
echo('<option value='.$row_get_class['id'].'>'.$row_get_class['class_name'].'</option>');
}while ($row_get_class = mysql_fetch_assoc($get_class));
?>
  	</select>
                
    <select id="difficulty" name="difficulty">
    <option disabled selected>--Choose a level--</option>
    </select>
    
    <select id="day" name="day">
    <option disabled selected>--Choose a day--</option>
    </select>
              
    <select id="time" name="time">
    <option disabled selected>--Choose a time--</option>
    </select>
    <br><br>
    <div id="billing">
    <div class="span6">
      <h2>Credit Card Information</h2>
      <input type="radio" name="cctype" value="male"><img src="assets/img/visa.jpg">
      <input type="radio" name="cctype" value="male"><img src="assets/img/master.jpg">
      <input type="radio" name="cctype" value="male"><img src="assets/img/american.jpg">
      <input type="radio" name="cctype" value="male"><img src="assets/img/discover.jpg"><br><br>
      <label for="name">Name (as it appears on card)</label> 
      <input type ="text" name="name" /><br>
      <label for="card">Card Number (no dashes or spaces)</label>
      <input type="text" name="card" maxlength="16"/><br>
      <label for="exp">Expiration Date (mmyy)</label>
      <input type="text" name="exp" maxlength="4"><br>
      <label for="code">Security Code (CVV)</label>
      <input type="text" name="code" maxlength="4"/><br>
      <h6>You will be charged $10 for a class. For monthly payments, please visit our studio.</h6>
    </div> 
    <div class="span6">
      <h2>Billing Information</h2>   
      <label for="street">Street Address</label> 
      <input type ="text" name="street" /><br> 
      <label for="city">City</label> 
      <input type ="text" name="city" /><br> 
      <label for="state">State</label>
      <select>
      <option disabled selected>--State--</option> 
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DE">Delaware</option>
      <option value="DC">District Of Columbia</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PA">Pennsylvania</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
      </select><br><br>
      <label for="zip">Zip Code</label> 
      <input type ="text" name="zip" maxlength="5"/><br>
      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" name="submit"/>
     </div>    
     </div>
   </form>
 
    
    <?php if(isset($fields)){?>
        <span style="color:red;">All fields are required. Please fill them before proceeding.</span>
    <?php } ?>
    <hr>
      <footer>
        <p>&copy; U4RIA 2015</p>
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
