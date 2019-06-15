<!DOCTYPE html>
<html lang="en">
<head>
  
   <title>Contact</title>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("nav.php");
   ?>
   <!--Navbar end-->



  <!--tittle-->
  <section class="py-5" style="background-color: #79AC44;">
    <p class="lead display-4 py-5 text-center"><b>Contact Us</b></p>
  </section>
  <!--tittle end-->
<!--insert contact data-->
   <?php include_once("config.php"); ?>
<?php include_once("database.php");?>
<?php include_once("format.php");?>
<?php 
$db = new Database();
if(isset($_POST['submit'])){
  $fn =mysqli_real_escape_string($db->link, $_POST['fn']);
  $ln =mysqli_real_escape_string($db->link, $_POST['ln']);
  $email=mysqli_real_escape_string($db->link, $_POST['email']);
  $pnum=mysqli_real_escape_string($db->link, $_POST['pnum']);
  $msg=mysqli_real_escape_string($db->link, $_POST['msg']);
  if($fn == '' || $ln == '' || $email =='' || $pnum =='' || $msg =='' ){

  $error ="Please INPUT the form";

}else{
$mailcheck = "SELECT * from contact WHERE email='$email' limit 1";
$query = $db->select($mailcheck);

if($query != false){

  echo"<span style='color:red;'>Email Already exit</span>";

}else{

  $query="INSERT INTO contact(fn,ln,email,pnum,msg) Values('$fn', '$ln', '$email','$pnum', '$msg')";
  $creat =$db->insert($query);
}
}
}
?>
<?php
if(isset($error)){
 echo"<span style='color:red;'>".$error."</span>";
}
?>
<!--end insert contact data-->
<!--validation-->
<?php
$fm= new Format(); 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $fn = $fm->validation($_POST['fn']);
            $ln =$fm->validation(md5($_POST['ln']));
            $email =$fm->validation(md5($_POST['email']));
            $pnum =$fm->validation(md5($_POST['pnum']));
            $msg =$fm->validation(md5($_POST['msg']));
           
             
            $fn =mysqli_real_escape_string($db->link, $_POST['fn']);
            $ln =mysqli_real_escape_string($db->link, $_POST['ln']);
            $email=mysqli_real_escape_string($db->link, $_POST['email']);
            $pnum=mysqli_real_escape_string($db->link, $_POST['pnum']);
            $msg=mysqli_real_escape_string($db->link, $_POST['msg']);;
          

          $error = "";
          if(empty($fn)){

            $error ="FIRST NAME MUST NOT BE EMPITY";

          }elseif(empty($ln)){
            $error = "Last Name Must Not Be Empity";
            
          }elseif(empty($email)){

            $error = "Email Must Not Be Empity";
          }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

              $error = "INVADID EMAIL";
          }elseif(empty($pnum)){

            $error = "Invalid Phone Number ";
          }elseif(empty($msg)){

            $error = "Massage Must Not Be Empity";
          }else{
            $msg= "ok";
          }
          
          }

          ?>
   
  <!--main part-->
  
<section id="contact" class="py-5  text-dark" style="background-color: #ACB9C2;">
  <div class="container">
    <div class="row">
     <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center">Please Fill The From To Contact Us</h4>
          <?php
          if(isset($error)){

            echo "<span style='color:red;'>$error</span>";
          }
          if(isset($msg)){

            echo "<span style='color:green;'>$msg</span>";
          }
          ?>
          <div class="row mt-4">
            <form class="form-group" action="contact.php"  method="post" style="padding-left: 180px;">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="fn" placeholder="First Name" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="ln" placeholder="Last Name" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="pnum" placeholder="Phone Number" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea cols="30" rows="5" class="form-control" name="msg" placeholder="Message" ></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <input type="submit"  name="submit" class="btn btn-block btn-dark" value="Send">
          </div>
        </form>
          </div>
        </div>
      </div>
     </div>
     <div class="col-md-4">
       <div class="card">
         <div class="card-body">
           <h4>Get In Touch</h4>
           <p>Fill Free To Call Us.We Are Here For Your Help</p>
           <h4>Address</h4>
           <p>Asulia,Savar,Dhaka</p>
           <h4>Email</h4>
           <p>kkajol428@gmail.com</p>
           <h4>Phone</h4>
           <p class="mb-2">+8801701932986</p>
           <p>+8801633918376</p>
         </div>
       </div>
     </div>
    </div>
  </div>
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
<!--footer-->
<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
