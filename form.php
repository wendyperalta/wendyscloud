<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if ( empty($name) OR empty($message) OR empty($phone) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Set a 400 (bad request) response code and exit.
      http_response_code(400);
      echo "Oops! There was a problem with your submission. Please complete the form and try again.";
      exit;
    }

    // Set the recipient email address.
    $mail_to = "wendy@wendyscloud.com";

    $subject = "Contact form submitted by $name!";

    $body = "From: $name\n";
    $body .= "E-mail: $email\n\n";
    $body .= "Phone: $phone\n";
    $body .= "Message: \n$message\n";

    $headers = "From: $name <$email>";

    if (mail($mail_to, $subject, $body, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    }else{
      // Set a 500 (internal server error) response code.
      http_response_code(500);
      echo "Oops! Something went wrong and we couldn't send your message.";
    }

  }else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
  }
?>