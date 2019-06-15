<?php include_once("ss.php"); 
Session::checkSession();?>
<?php
if(isset($_GET['action']) && $_GET['action'] == "logout"){

         Session::destroy();
            }
?>
<?php include_once("config.php"); ?>
<?php include_once("database1.php");?>
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

  $query="INSERT INTO contact(fn,ln,email,pnum,msg) Values('$fn', '$ln', '$email','$pnum', '$msg')";
  $creat =$db->insert($query);
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

<!DOCTYPE html>
<html>

<head>
     <?php include_once("head1.php"); ?>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include_once("docnav.php"); ?>
        <!-- Page Content  -->
        <div id="content">

              <?php include_once("docnav2.php"); ?> 
                          

            

            <div class="line"></div>
            
 
  
  <!--main part-->
<section id="contact" class="py-5  text-dark " style="background-color:#263238;">
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            
        </div>
     <div class="col-md-6">
      <div class="card" style="background-color:;padding-left: 0px;">
        <div class="card-body text-dark bg-light" style="padding-left: 0px;">
          
            <h4 class="text-center"  ">Please Fill The From To Contact Us</h4>
          <?php
          if(isset($error)){

            echo "<span style='color:red;'>$error</span>";
          }
          if(isset($msg)){

            echo "<span style='color:green;'>$msg</span>";
          }
          ?>
          <div class="row mt-4">
            <form class="form-group" action="cont.php"  method="post" style="padding-left: 120px;">
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
   <div class="col-md-3">
            
        </div>
 </div>
</div>
     </section>
            
           
            
        </div>
    </div>

    <div class="overlay"></div>

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