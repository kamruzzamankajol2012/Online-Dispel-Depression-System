<!--NAVBAR-->
<!--NAVBAR-->
<nav class="navbar navbar-dark navbar-expand-md fixed-top ">
<div class="container">

<a href="index.php" class="navbar-brand">Disple Depression</a>
<button class="navbar-toggler m_toggle_btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon m_toggle_icon"></span>
               </button>
<div class="collapse m_menu_wz navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav  mt-10 ml-auto ">
    <li class="nav-item active">
      <a  href="../index.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item active">
      <a href="../service.php" class="nav-link">Service</a>
    </li>
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Stories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../share.php">Share</a>
          <a class="dropdown-item" href="../success.php">Read</a>
          <!--<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>-->
      </li>
    
    <li class="nav-item active">
      <a href="../article.php" class="nav-link">Article</a>
    </li>
    <li class="nav-item active">
      <a href="../contact.php" class="nav-link">Contact</a>
    </li>
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LogIn
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">Admin</a>
          <a class="dropdown-item" href="../doctor/index.php">Doctor</a>
          <!--<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>-->
      </li>

  </ul>
  <form class="form-inline my-2 my-lg-0" action="../search.php" method="get">
      <input class="form-control mr-sm-2"   name="search"  placeholder="Search Your Problem" aria-label="Search">
      <button type="submit" name="submit" value="Search" class="btn btn-primary my-2 my-sm-0 text-light" >Search</button>
    </form>

</div>

</div>

</nav>
<!--End-nav-->
