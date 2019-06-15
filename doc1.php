<!DOCTYPE html>
<html lang="en">
<head>
   <title>Doctor Profile</title>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("nav.php");
   ?>
   <!--Navbar-->
  
<!--main part-->
   <section id="newsletter" class=" py-5  text-light text-center" style="background-color: #096914">
  <div class="container">
    <h2 class="display-4 lead">
         <b> Our Counsilor</b>
        </h2>
        <p class="lead">We offer licensed,experienced,trained,and accredited psychologist </p>
    <div class="row " style="padding-left: 250px;">
      
    
        
<div class="card bg-light text-dark" >
  <img class="card-img-top" src="imges/doc1.jpg">
               <div class="card-body">
                 <p class="card-text">Dr.xxxxxxxxx</p>
                 
               </div>
             </div>
          
            
<div class="card bg-light text-dark">
                <div class="card-header">
    <h3>Appointment Time</h3>
  </div>
               <div class="card-body">
                 <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Day</th>
      <th scope="col">Time</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>Saturday</td>
      <td>4pm-6pm</td>
      
    </tr>
    <tr>
     
      <td>Sunday</td>
      <td>6pm-8pm</td>
      
    </tr>
    <tr>
      
      <td>Wednesday</td>
      <td>10am-12pm</td>
     
    </tr>
  </tbody>
</table><br>
                <p class=" card-text lead"><b>Please <a href="contact.php">contact</a> us for Appoinment</b></p>
               </div>
             </div>
             
           
    </div>
  </div>

</section>
  <!--end main part-->

  <!--Search

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
search end here-->

<!--footer-->
<?php include_once("footer.php"); ?>
<!--footer-->
<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
