<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("nav.php");
   ?>
   <!--Navbar end-->
  

<!--chat-->
<section id="newsletter" class="py-5 bg-light text-dark text-center" style="height: 450px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
      <div class="col py-5">
        <h2 class="display-4 ">
          Chat here
        </h2>
        <p class="lead">Ask Whatever You Want To Know</p>
        <form class="form-inline justify-content-center">



  <div class="input-group mb-2 mr-sm-2 mb-sm-0">

    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Type Here">
  </div>



  <button type="submit" class="btn btn-primary">Send</button><br>
  <div class="input-group mb-2 mr-sm-2 mb-sm-0 pl-3">

    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Your answer">
  </div>
</form>
      </div>
    </div>
  </div>
  </div>

</section>
<!--chat end -->

<!--footer-->

<?php include_once("footer.php"); ?>

<!--footer end-->

<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
