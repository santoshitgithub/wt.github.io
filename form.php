<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP CRUD Operations</title>
</head>

<body>
      <div class="container">
          <form action="#" method="POST">
           <div class="title">
                Registration Form
             </div>

             <div class="form">
             	<div class="input_field">
             		<label>First Name</label>
             		<input type="text" class="input" name="fname">
             	</div>
             	<div class="input_field">
             		<label>Last Name</label>
             		<input type="text" class="input" name="lname">
             	</div>
             		<div class="input_field">
             		<label>Password</label>
             		<input type="password" class="input" name="password">
             	</div>
             		<div class="input_field">
             		<label>Confirm password</label>
             		<input type="password" class="input" name="conpassword">
             	</div>
             		<div class="input_field">
             		<label>Gender</label>
                    <div class="custom_select">
             		<select name="gender">
             			<option value="Not Selected">Select</option>
             			<option value="Male">Male</option>
             			<option value="female">Female</option>
             		</select>
               </div>
             	</div>
             	<div class="input_field">
             		<label>Email Address</label>
             		<input type="text" class="input" name="email">
             	</div>
             	<div class="input_field">
             		<label>Phone Number</label>
             		<input type="text" class="input" name="phone">
             	</div>
             	<div class="input_field">
             		<label>Address</label>
             		<textarea class="textarea" name="address"></textarea>
             	</div>
             	<div class="input_field terms">
             		<label class="check">
             			<input type="checkbox">
             			<span class="checkmark"></span>
             		</label>
             		<p>Agree to terms and condition </p>
             		
             	</div>
             	<div class="input_field">
             		<input type="submit" value="register" class="btn" name="register">
             	</div>
             </div>
          </form>
     </div>
</body>

</html>


<?php
     if($_POST['register'])
     {
          $fname  =$_POST['fname'];
          $lname  =$_POST['lname'];
          $pwd  =$_POST['password'];
          $cpwd =$_POST['conpassword'];
          $gender  =$_POST['gender'];
          $email =$_POST['email'];
          $phone  =$_POST['phone'];
          $address  =$_POST['address'];

          $query = " INSERT INTO FORM VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
          $data=mysqli_query($conn,$query);

          if($data)
          {
              echo "Data Inserted into Database";
          }
          else
          {
               echo "Failed";
          }

     }
     
?>
