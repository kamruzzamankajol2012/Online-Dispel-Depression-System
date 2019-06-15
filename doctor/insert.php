<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("nav.php");
   ?>
   <!--Navbar-->

   

<!--main part start-->
<section id="creat-section" class="text-center py-5 bg-dark">
<div class="container">
  
 <div class="row">
  <!--story 1 start-->
   <div class="col-md-12">
<div class="card bg-light text-dark">
  <div class="card-header">
    <h3>Result</h3>
  </div>
<div class="card-body">
  
           <p class="lead text-left font-weight-bold"> <b>Your Message Send Successfully</b></p><br>
                 <p class="">



</p><br>




  


               </div>
             </div>
           </div>
</div>
           </div>
           <!--story 1 end-->

       
         
       </section>    
<!--main part end-->

<!--search-->
<section id="newsletter" class="py-5 bg-dark text-light text-center">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="display-4">
          Search
        </h2>
        <p class="lead">Search here What you want</p>
        <form class="form-inline justify-content-center" action="search.php" method="get">



  <div class="input-group mb-2 mr-sm-2 mb-sm-0">

    <input type="text" class="form-control" id="inlineFormInputGroup" name="search" placeholder="Search Here">
  </div>



  <button type="submit" name="submit" value="Search" class="btn btn-primary">Search</button>
</form>
      </div>
    </div>
  </div>

</section>
<!--search end-->

<!--footer-->
<?php include_once("footer.php"); ?>
<!--footer end-->

<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
