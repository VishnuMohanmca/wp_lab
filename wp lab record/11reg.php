<?php

  $con=mysqli_connect("localhost","root","","aquarium");
  if(isset($_POST['reg_submit'])){
      $first_name= $_POST['first_name'];
      $last_name= $_POST['last_name']; 
      $email= $_POST['email'];
      $passwrd= $_POST['psw'];

      $email_check = mysqli_query($con,"SELECT email_Id FROM user WHERE email_Id='$email'");
        if(mysqli_num_rows($email_check) >= 1){
            echo "<script><script>window.location.href='11reg.php?message=Email ID already exists !!.';</script>";
        }
        else{
          $reg_query = "INSERT INTO user VALUES('$first_name','$last_name','$email','$passwrd')";

          if(mysqli_query($con,$reg_query)){
              echo "<script> window.location.href='11reg.php?message=Registration Successful.'; </script>";
          }
          else {
            echo "<script>window.location.href='11reg.php?message=Registration failed !!.';</script>";
          }
      }
  }
?>
    <html>

    <head>
        <title>Registration Form</title>
    </head>

    <body>
        <h2> Signup Form </h2>
        <form action="" method="post" id="reg_form">
            First Name:<br>
            <input type="text" name="first_name">
            <br> Last Name:<br>
            <input type="text" name="last_name">
            <br> Email:
            <br>
            <input type="email" name="email">
            <br> Password:
            <br>
            <input type="password" name="psw">
            <br><br>
            <input type="submit" name="reg_submit" value="Register">
        </form>
        <p id="result_txt">
            <?php if(isset($_GET['message'])){ echo $_GET['message']; } ?>
        </p>
        <p><a href="11view.php">Click here</a> to search and view the users</p>
    </body>

    </html>