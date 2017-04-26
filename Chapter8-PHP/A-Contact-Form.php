<?php

    $error = "";
    $success = "";
    if ($_POST) {

        if (!$_POST["email"]) {
            $error .= "Required email address.<br>";
        }
        if (!$_POST["content"]) {
            $error .= "Required content.<br>";
        }
        if (!$_POST["subject"]) {
            $error .= "Required subject.<br>";
        }
        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "Email address is invalid.<br>";
        }
        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><p><strong>The were error(s) in your form:</strong></p>' . $error . '</div>';
        }
        else {
            $emailTO = "limin9yuan@gmail.com";
            $subject = $_POST["subject"];
            $content = $_POST["content"];
            $headers = "From: ".$_POST["email"];
            if (mail($emailTO, $subject, $content, $headers)) {
                $success = '<div class="alert alert-success" role="alert">Your message was sent, we will get back ASAP!</div>';
            }
            else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>The were error(s) in your form:</strong></p>Your message could\'t be sent - please try again!</div>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <h1>Get in touch</h1>
          <div id="error"><?php echo $error.$success ?></div>
          <form method="post">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                  <label for="content">What would you like to ask us</label>
                  <textarea class="form-control" id="content" rows="3" name="content"></textarea>
              </div>
              <button type="submit" id="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $("form").submit(function (e) {
            var error = "";

            if($("#email").val() == ""){
                error += "The email field is required<br>";
            }
            if($("#subject").val() == ""){
                error += "The subject field is required<br>";
            }
            if($("#content").val() == ""){
                error += "The content field is required<br>";
            }
            if (error != "") {
                $("#error").show();
                $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>The were error(s) in your form:</strong></p>' + error + '</div>');
                e.preventDefault();
            }
            if (error == "") {
                $("#error").hide();
            }
        });

    </script>
  </body>
</html>
