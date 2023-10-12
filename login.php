<?php
  if(isset($_REQUEST["password"]))
{
 $email = $_REQUEST["email"];
 $password = $_REQUEST["password"];

 include 'connect.php';
 $query = mysqli_prepare($con, "SELECT * FROM `clients` WHERE email = ?");
 mysqli_stmt_bind_param($query, "s", $email);
 mysqli_stmt_execute($query);
 $result = mysqli_stmt_get_result($query);
 if(mysqli_num_rows($result) == 1){
      $customer = mysqli_fetch_assoc($result);
    
      $hash = $customer["password"];
    if(password_verify($password, $hash)){ //compare the password user provided and the hash password. If the passwords matches then the user can login. If they do not match then an error message is displayed using a cookie
   
        //storing user information in a session
         session_start();
         $_SESSION["name"] = $customer["name"];
         $_SESSION["id"] = $customer["id"];
         $_SESSION["logged_in"] = true;
         
         header("location:home.php");

            //success
    }else{
        setcookie("error", "wrong username or password", time()+3);
    }
 }else{
     setcookie("error", "wrong username or password", time()+3);
 }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" type="image/x-icon" href="images/logo.jfif">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
<?php include 'nav.php'?>
     <div class="container">
         <div class="row justify-content-center">
        
             <div class="col-sm-6 border shadow-lg">

             <div class="mt-5 mb-5 flex-column text-center">
                        <div class="mx-auto d-block">
                            <img src="images/logo.jfif" alt="Logo" style="width: 80px;" class="rounded-pill">
                            <h3 class="vollkorn"> Fruits Vendor Ltd</h3>
                        </div>
                        <h4>Login</h4>
             </div>


                 <form action="login.php" method="post" class="mb-5 mt-5 rounded-top rounded-bottom">

                    <div class="form-group">
                    	<label>Enter Your Email</label>
                        <input type="email" class="form-control mb-4" placeholder="email" name="email" required>
                    </div>

                    <div class="form-group">
                    	<label>Enter Your Password</label>
                       <input type="password" class="form-control mb-4" placeholder="password" name="password" required>
                    </div>
                    
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                 <button class="btn btn-control btn-outline-info btn-block col-sm-4">login</button>
                            </div>

                            <div class="col-sm-6 d-flex">
                                 <p class="float-right">Don't have an account? </p>
                                 <a href="register.php" class="signin">register</a>  
                            </div> 
                        </div>
                    </div>

                 </form>
                 
             </div>
         </div>
     </div>

</body>
</html>