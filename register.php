<?php
     if(isset($_REQUEST["name"]))
     {
      $name = $_REQUEST["name"];
      $email= $_REQUEST["email"];
      $phone = $_REQUEST["phone"];
      $password = $_REQUEST["password"];
         $password = password_hash($password, PASSWORD_BCRYPT);
     
    include 'connect.php';
     $sql = "INSERT INTO `clients`(`id`, `name`, `email`, `phone`, `password`) VALUES (null,'$name','$email','$phone','$password')";
     mysqli_query($con,$sql) or die(mysqli_error($con));
     
     header("location:home.php");
     }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="images/logo.jfif">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php include 'nav.php'?>
    
<div class="container">
         <div class="row justify-content-center">
             <div class="col-sm-6 border shadow-lg">
                 
                 <form action="register.php" method="post" class="mb-5 mt-5 rounded-top rounded-bottom form-group">

                    <div class="mt-5 mb-5 flex-column text-center">
                        <div class="mx-auto d-block">
                            <img src="images/logo.jfif" alt="Logo" style="width: 80px;" class="rounded-pill">
                            <h3>Fruits vendors Ltd</h3>
                        </div>
                        <h4>Registration form</h4>
                    </div>

                    <div class="form-group">
                    	<label>Enter Your Name</label>
                        <input type="text" class="form-control mb-4" placeholder="name" name="name" required>
                    </div>

                    <div class="form-group">
                    	<label>Enter Your Email</label>
                        <input type="email" class="form-control mb-4" placeholder="email" name="email" required>
                    </div>

                    <div class="form-group">
                    	<label>Enter Your Phone Number</label>
                        <input type="tel" class="form-control mb-4" placeholder="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                    	<label>Set Password</label>
                       <input type="password" class="form-control mb-4" placeholder="password" name="password" required>
                    </div>
                    
                    
                    <button class="btn btn-block col-sm-4 btn-outline-info btn-control">register</button>

                 </form>
             </div>
         </div>
     </div>

</body>
</html>