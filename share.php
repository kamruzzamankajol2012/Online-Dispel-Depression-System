<!DOCTYPE html>
<html lang="en">
<head>
  <title>Share Stories</title>
 <?php include_once("head.php"); ?>

</head>
<body>
  <!--Navbar-->
   <?php include_once("share-nav.php");
   ?>
   <!--Navbar-->

  <!--tittle-->
  <section class="py-5" style="background-color: #79AC44;">
    <p class="lead display-4 py-5 text-center"><b>Share Your Story</b></p>
  </section>
  <!--end tittle-->
  
  <!--main part-->
<section id="contact" class="py-5  text-dark" style="background-color: ;">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="background-color:">
        <div class="card-body">
          <h4 class="text-center">Type Here And Send</h4>
          <div class="row mt-4">
          
          
          <div class="col-md-12">
            <!--success stoty data start here-->
    <?php include_once("config.php"); ?>
<?php include_once("database.php");?>
<?php 
$db = new Database();
if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($db->link, $_POST['name']);
  $age=mysqli_real_escape_string($db->link, $_POST['age']);
  $des=mysqli_real_escape_string($db->link, $_POST['des']);
  $email=mysqli_real_escape_string($db->link, $_POST['email']);
  $msg=mysqli_real_escape_string($db->link, $_POST['msg']);
  
 
  
  if($name == ''|| $age == '' || $des == ''|| $email == '' || $msg == ''  ){

  $error ="Please INPUT the form";

}else{

  $query="INSERT INTO sstory(name,age,des,email,msg) Values('$name', '$age', '$des','$email', '$msg')";
  $creat =$db->insert($query);
}

}
?>
<?php
if(isset($error)){
 echo"<span style='color:red;'>".$error."</span>";
}
?>
<!--sucess story data end here-->
            <form class="form-group " action="share.php" method="post" style="padding-left: 0px">
             <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="name" placeholder="Name" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="age" placeholder="Age" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="des" placeholder="Designation" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <textarea cols="30" rows="5" name="msg" class="form-control" placeholder="Message" ></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <a href="success.php"><input type="submit" name="submit" class="btn btn-block btn-dark" value="Send"></a>
           <!-- <a href="story.php" class="btn btn-outline-light">Find Out More</a>-->
          </div>
          </form>
          </div>
        
        </div>
      </div>
     </div>
   </div>
 </div>
</div>
     </section>
<!--end main part-->

<!--search
<section id="newsletter" class="py-5 text-light text-center" style="background-color: #af6d1d;">
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
search end-->

<!--footer-->
<?php include_once("footer.php"); ?>
<!--footer-->
<script  src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
 <script   src="js/bootstrap.min.js"></script>
 <script   src="js/navbar-fixed.js"></script>

</body>
</html>
