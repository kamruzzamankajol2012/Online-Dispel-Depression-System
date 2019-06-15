<!DOCTYPE html>
<html lang="en">
<head>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("nav.php"); ?>
   <!--Navbar-->


<!--main part-->
<section id="creat-section" class="text-center py-5 " style="background-color: #8D8219">
<div class="container">
  <p class="lead"></p>
 <div class="row">
   <div class="col-md-4">

           </div>
<div class="col-md-4">
   <div class="card py-5">
                           <div class="card-body m_card1 text-center text-dark">
                              
                              <p class="lead"><b>Please fill out this form</b> </p>
                              <form action="" class="m_hero_form">
                                 <div class="form-group m_hero_f_input">
                                    <input class="form-control" type="text" name="Firstname" value="" placeholder="Firstname">
                                 </div>
                                 <div class="form-group m_hero_f_input">
                                    <input class="form-control" type="text" name="Lastname" value="" placeholder="Lastname">
                                 </div>
                                 <div class="form-group m_hero_f_input">
                                    <input class="form-control" type="email" name="Email" value="" placeholder="Email">
                                 </div>
                                 <div class="form-group m_hero_f_input">
                                    <input class="form-control" type="password" name="Password" value="" placeholder="Password">
                                 </div>
                                 <div class="form-group m_hero_f_input">
                                    <input class="btn form-control btn-outline-dark m_submit_btn" type="submit" name="submit" value="Submit">
                                 </div>
                              </form>
                              <p class="lead"><b>Please <a href="contact.php">contact</a> us for Appoinment</b></p>
                           </div>
                        </div>
           </div>
<div class="col-md-4">

        </div>
   </div>
  
   
</div>
</section>
<!--end main part-->


<!--footer-->
<?php include_once("footer.php"); ?>
<!--footer-->

<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
