



<!DOCTYPE html>
<html>

<head>
     <?php include_once("../head.php"); ?>

</head>

<body>

  <?php include_once("nav.php");
   ?>

      
            
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div>
  <div class="col-md-12"></div><br>
  <!--insert contact data-->
   <?php include_once("../config.php"); ?>
<?php include_once("../database.php");?>
<?php include_once("../format.php");?>
<?php 
$db = new Database();
if(isset($_POST['submit'])){
  $user =mysqli_real_escape_string($db->link, $_POST['user']);
  
  $email=mysqli_real_escape_string($db->link, $_POST['email']);
  $type=mysqli_real_escape_string($db->link, $_POST['type']);
  $password=mysqli_real_escape_string($db->link, $_POST['password']);
  $password=md5($password);
  if($user == '' || $email =='' || $type =='' || $password =='' ){

  $error ="Please INPUT the form";

}else{
$mailcheck = "SELECT * from contact WHERE email='$email' limit 1";
$query = $db->select($mailcheck);

if($query != false){

  echo"<span style='color:red;'>Email Already exit</span>";

}else{

  $query="INSERT INTO login(user,email,type,password) Values('$user', '$email','$type', '$password')";
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

            $user = $fm->validation($_POST['user']);
          
            $email =$fm->validation(md5($_POST['email']));
            $type=$fm->validation(md5($_POST['type']));
            $password =$fm->validation(md5($_POST['password']));
           
             
           $user =mysqli_real_escape_string($db->link, $_POST['user']);
  
  $email=mysqli_real_escape_string($db->link, $_POST['email']);
  $type=mysqli_real_escape_string($db->link, $_POST['type']);
  $password=mysqli_real_escape_string($db->link, $_POST['password']);
      $password=md5($password);    

          $error = "";
          if(empty($user)){

            $error ="NAME MUST NOT BE EMPITY";

          }elseif(empty($email)){

            $error = "Email Must Not Be Empity";
          }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){

              $error = "INVADID EMAIL";
          }elseif(empty($type)){

            $error = "Invalid Type ";
          }elseif(empty($password)){

            $error = "Password Must Not Be Empity";
          }else{
            $msg= "ok";
          }
          
          }

          ?>
  <!--main part-->
<section id="contact" class="py-5 pt-4 text-dark " >
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            
        </div>
     <div class="col-md-6">
      <div class="card" style="background-color:;padding-left: 0px;">
        <div class="card-body text-dark bg-light" style="padding-left: 0px;">
          
            <h4 class="text-center"  ">Please Fill The From </h4>
          <?php
          if(isset($error)){

            echo "<span style='color:red;'>$error</span>";
          }
          if(isset($msg)){

            echo "<span style='color:green;'>$msg</span>";
          }
          ?>
          <div class="row mt-4">
            <form class="form-group" action="sign.php"  method="post" style="padding-left: 20px;">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="user" placeholder="Name" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="type" placeholder="Type" class="form-control">
              
              <div class="col-md-12">
              <p class="lead font-weight-bold text-success">Please Mention Here What type of User You Are Doctor Or Admin</p></div>
            </div>
            
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" name="password" placeholder="Password" class="form-control">
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
   <div class="col-md-3">
            
        </div>
 </div>
</div>
     </section>
            
           
            
     <!--footer-->
<?php include_once("../footer.php"); ?>
<!--footer-->

   

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script  src="css/jquery-3.3.1.slim.min.js" ></script>
    <!-- Popper.JS -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>-->
    <script  src="css/popper.min.js" ></script>
    <!-- Bootstrap JS -->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>-->
    <script  src="css/bootstrap.min.js" ></script>
    <!-- jQuery Custom Scroller CDN -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>-->
    <script  src="css/jquery.mCustomScrollbar.concat.min.js" ></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>