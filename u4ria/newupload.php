<?php
    session_start();
	
	$user = $_POST['user'];
	
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    
    if ((($_FILES["file"]["type"] == "image/gif")
         || ($_FILES["file"]["type"] == "image/jpeg")
         || ($_FILES["file"]["type"] == "image/jpg")
         || ($_FILES["file"]["type"] == "image/pjpeg")
         || ($_FILES["file"]["type"] == "image/x-png")
         || ($_FILES["file"]["type"] == "image/png"))
        && ($_FILES["file"]["size"] < 5000000)
        && in_array($extension, $allowedExts)) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        } else {
            
                        if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " already exists. ";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                                   "upload/" . $_FILES["file"]["name"]);
                
                 require('config.php');
    mysql_select_db($database, $makeconnection);
    $imgName = $_FILES["file"]["name"];
    $result3 = mysql_query("UPDATE users SET picture = '$imgName' WHERE user = '$user'");
	 header("location:account_info.php?imgname=$user");
	
			}
        }
    } else {
        echo "Invalid file";
    }
    ?>