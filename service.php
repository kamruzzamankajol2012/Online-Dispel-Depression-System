<!DOCTYPE html>
<html lang="en">
<head>
  <title>Service</title>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("nav.php");
   ?>
   <!--Navbar end-->

  <!--tittle-->
  <section class="py-5" style="background-color: #704A3D;">
    <p class="lead display-4 py-5 text-center"><b>Our Service</b></p>
  </section>
  <!--tittle end-->

  <!--description-->
  <section class="py-5 bg-dark text-light" >
<p class="lead text-center">Our primary service is online-based counsiling system.User can easily communicated with counsilor .We also provide different Article,Video, related with depression.User also can chat with counsilor.We also provide different kind of support like sms help ,email help.User can creat their profile to see their progress.</p>
  </section>
  <!--description end-->

  <!--main part-->
  <section id="creat-section" class="text-center py-5 " style="background-color:#134571;">
<div class="container">
 <div class="row">
   <div class="col-md-6">
<div class="card bg-light text-dark">
               <div class="card-body">
                 <i class="fa fa-desktop" style=""></i>
                 <h3> LIVE CHAT</h3>
                 <p class="lead">Chat here with your Doctor</p>
                     <a href="doc1.php" class="btn btn-primary">See More</a>
                 
               </div>
             </div>
           </div>

<div class="col-md-6">
<div class="card bg-light text-dark">
               <div class="card-body">
                 <i class="fa fa-phone" style=""></i>
                 <h3>TELEPHONE</h3>
                 <p class="lead">If you prefer telephone ,then call us</p>
                  <a href="contact.php" class="btn btn-primary">See More</a>
                 
               </div>
             </div>
        </div>
   </div>
   <div class="row py-5">
     <div class="col-md-6">
       <div class="card bg-light text-dark">
                      <div class="card-body">
                        <i class="fa fa-comment" style=""></i>
                        <h3>SMS</h3>
                        <p class="lead">Our free sms will help you to motivate</p>
                          <a href="contact.php" class="btn btn-primary">See More</a>
                      </div>
                    </div>
     </div>
    
     <div class="col-md-6">
       <div class="card bg-light text-dark">
                      <div class="card-body">
                        <i class="fa fa-envelope" style=""></i>
                        <h3>EMAIL</h3>
                        <p class="lead">Have quick question ,ask by email</p>
                         <a href="contact.php" class="btn btn-primary">See More</a>

                      </div>
                    </div>
     </div>
   </div>
  
</div>
</section>
  <!--main part end-->

<!--search
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

footer-->
<?php include_once("footer.php"); ?>
<!--footer-->

<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
