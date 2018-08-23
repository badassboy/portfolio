<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("database.php");
include("functions.php");

  $username = $email = $info = "";

if (isset($_POST['send_btn'])) {

  $formErrors =  array();

// validate username
  if (!array_key_exists('username', $_POST) || empty($_POST['username'])) {
    $formErrors['username'] = "username required";
  }else if (validate_username($_POST['username']) == false) {
    $formErrors['username'] = "<p class='error'>enter valid username</p>";
  }

// validate email
 if (!array_key_exists('email', $_POST) || empty($_POST['email'])) {
    $formErrors['email'] = "email required";
  }else if (validate_email($_POST['email']) == false) {
    $formErrors['email'] = "<p class='error'>invalid email</p>";
  }

// validate message
 if (!array_key_exists('info', $_POST) || empty($_POST['info'])) {
    $formErrors['info'] = "message required";
  }else if (validate_string($_POST['info']) == false) {
    $formErrors['info'] = "<p class='error'>enter valid message</p>";
  }

  if (emailExist($email) == false) {
    $formErrors['email'] = "<p class='error'>email taken,try again</p>";
  }

  if (usernameExist($username) == false) {
    
    $formErrors['email'] = "<p class='error'>username taken,try again</p>";
  }
  
// error handling
// whern there are no errors
if (!$formErrors) {
  // insert into database
  $stmt = $pdo->prepare("INSERT INTO contactus(username,email,message) VALUES(:uname,:uemail,:umessage)");
  $stmt->bindParam(':uname',$_POST['username']);
  $stmt->bindParam(':uemail',$_POST['email']);
  $stmt->bindParam(':umessage',$_POST['info']);
  $stmt->execute();
  $result = $stmt->rowCount();
  if ($result > 0) {
    $success = '<p class="success">message sent successfully</p>';
  }else {
    $formErrors[] = '<p class"error">unable to send message,try again</p>';
  }

}


  
}


  



?>   
<html>
<head>
<link rel="stylesheet" type="text/css" href="contact.css">  
</head>
<body>

      <!-- header -->
      <div class="container-fluid header">
         <?php  include("header.php"); ?>
      </div>
      <!-- header -->


    



        <div class="cnt">

          <div class="contact-info">

            <?php
            if (isset($success)) {
              echo $success;
            }

            if (isset($formErrors)) {
              foreach ($formErrors as $Error) {
                  echo $Error;
              }
            }

             ?>

            <h3>CONTACT</h3>     
             <h4>Emmanuel</h4><br>
               <address>
                 Adiebeba AA20,Ahodwo-Roundabout<br>
                  Opposite Ahodwo Melcom,Kumasi<br>
                  CO 2234 PO Box<br>
                  Kumasi,Ghana<br>
                 <abbr title="Phone">P:</abbr> (+233) 545-804-166
               </address><br>

             <address>
               <strong>Email</strong><br>
               <a href="mailto:#">emmanuelobeng7788@gmail.com</a>
             </address>
             
          </div>

          <div class="contact-form">
            <h4>We will like to hear from you</h4>
            <form method="post" action="" class="myForm">

              <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="username" id="Username" placeholder="username" 
                required="required">
              </div>

              <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="email" id="Email" placeholder="email" 
                required="required">
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" rows="3" name="info" required="required"></textarea>
              </div>

              
              <button type="submit" class="btn btn-default" name="send_btn" value="Send">Send</button>
            </form>
          </div>
          
          </div>
                  
        


                  

          



        <!--footer-->

        <div class="container-fluid footer">
          
         <?php include("footer.php");?>
        
          </div>
        
        </div>

        <!--footer-->

        



</body>
</html>






