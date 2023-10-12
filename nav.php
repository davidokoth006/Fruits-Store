<nav class="navbar navbar-expand-sm navbar-light bg-info p-2 mb-5">

  <div class="container-fluid">
      <a class="navbar-brand d-block mx-auto text-center" href="home.php">
          <img src="images/logo.jfif" alt="Logo" style="width: 80px;" class="rounded-pill">
          <h4 class="vollkorn text-white">fruits vendor Ltd</h4>
      </a>

       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
       </button>

    <div class="collapse navbar-collapse m-3" id="mynavbar">
      <ul class="navbar-nav ms-auto px-4">

      
        <li class="nav-item">
          <a class="nav-link link-success" href="home.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link link-primary" href="register.php">Register</a>
        </li>

       
        <?php if (isset($_SESSION["logged_in"])): ?>

        <li class="nav-item">
          <a class="nav-link link-primary" href="contact.php">contact us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link link-primary" href="about.php">about us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link link-primary" href="logout.php">logout</a>
        </li>

        <?php endif; ?>

        <?php if (! isset($_SESSION["logged_in"])): ?>

        <li class="nav-item">
          <a class="nav-link link-primary" href="login.php">login</a>
        </li>
        
        <?php endif; ?>
        

      </ul>
    </div>
  </div>
</nav>