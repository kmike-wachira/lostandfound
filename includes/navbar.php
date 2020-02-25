  <!-- Navbar -->
 
  <nav class="navbar navbar-expand-lg fixed-top  grey lighten-5 p-3">

<!-- Navbar brand -->
<a class="navbar-brand text-dark" href="/">Maseno lost and found</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link text-dark" href="/">Home
        <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" data-toggle="modal" data-target="#modalContactForm" href="#">Write to us</a>
    </li>
    <!-- Dropdown -->
  </ul>
  <form class="form-inline">
    <div class="md-form my-0">
      <input class="form-control mr-sm-2"  class="text-dark" type="text" placeholder="Search" aria-label="Search">
    </div>
  </form>
  <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">1
          <i class="fas fa-envelope"></i>
        </a>
      </li>
      <li class="nav-item avatar dropdown">
      <?php 
          if(isset($_SESSION['user'])):?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"> <?=$_SESSION['user'];?>        
        </a>     
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item" href="logout.php">Logout</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#additem" href="#">Add item</a>
        </div>
          <?php else:?>
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Profile         
        </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
            aria-labelledby="navbarDropdownMenuLink-55">
            <a class="dropdown-item"data-toggle="modal" data-target="#modalLoginForm" href="#">Login</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#modalRegisterForm" href="#">Sign in</a>
          </div>
         <?php endif;
        ?>
      </li>
    </ul>
  <!-- Links -->
</div><!-- Collapsible content -->

</nav>
  <!-- Navbar -->