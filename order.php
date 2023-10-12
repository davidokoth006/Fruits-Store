<?php include 'protect.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="images/logo.jfif">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
<?php include 'nav.php'?>
         <div class="row justify-content-center">
             <div class="col-sm-6 border shadow-lg">
                 
                 <form action="signin.php" method="post" class="mb-5 mt-5 rounded-top rounded-bottom form-group">

                    <div class="mt-5 mb-5 flex-column text-center">
                        <div class="mx-auto d-block">
                            <img src="images/logo.jfif" alt="Logo" style="width: 80px;" class="rounded-pill">
                            <h3>Fruits vendors Ltd</h3>
                        </div>
                        <h4>Order Now!!</h4>
                    </div>

                    <div class="form-group">
                    	<label>Enter Your Names</label>
                        <input type="text" class="form-control mb-4" placeholder="name" name="name" required>
                    </div>

                    <div class="form-group">
                    	<label>Enter Fruit quantity</label>
                        <input type="tel" class="form-control mb-4" placeholder="phone" name="quantity" required>
                    </div>

                    <div class="form-group">
                          <label> Pay Using</label>
                          <select name="" class="form-control mb-3">
                              <option value="paypal">Paypal</option>
                              <option value="airtm">AirTm</option>
                              <option value="mpesa">Mpesa</option>
                          </select>
                      </div>

                    
                    <button class="btn btn-block col-sm-4 btn-outline-info btn-control">Pay</button>

                 </form>
             </div>
         </div>
     </div>

</body>
</html>