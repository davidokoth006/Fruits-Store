<?php include 'protect.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="icon" type="image/x-icon" href="images/logo.jfif">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php include 'nav.php'?>
      <div class="container justify-content-center">
          <div class="row d-flex">
              <div class="col-sm-4">
                  <form action="">
                  <h2>send us a massage</h2>
                     <div class="form-group">
                    	<label>Name</label>
                        <input type="text" class="form-control mb-4" placeholder="text">
                     </div>

                     <div class="form-group">
                    	<label>Subject</label>
                        <input type="text" class="form-control mb-4" placeholder="subject">
                     </div>

                     <div class="form-group">
                    	<label>Subject details</label>
                        <input type="text" class="form-control mb-4" placeholder="subject details">
                     </div>
                     <button>submit</button>
                  </form>
              </div>

              <div class="col-sm-4">
                <h2>Contact details</h2>
                <p>Fruits vendors Ltd</p>
                <p>Witu Road</p>
                <p>Industrial Area</p>
                <p>Nairobi, Kenya</p>
                <p>T: +254 20 2108795,+254 724 253030,+254 735 999917</p>
                <p>E: sales@fruitsvendors.co.ke</p>
              </div>
          </div>
      </div>
</body>
</html>