<?php include_once("ss.php"); 
Session::checkSession();?>
<?php
if(isset($_GET['action']) && $_GET['action'] == "logout"){

         Session::destroy();
            }
?>
<?php include '../config.php'; ?>
<?php include 'database1.php';?>
<?php 
$id = $_GET['id'];
$db = new Database();
$query = "SELECT * FROM sstory WHERE id=$id";
$getData =$db->select($query)->fetch_assoc();

if(isset($_POST['submit'])){
  
   $name=mysqli_real_escape_string($db->link, $_POST['name']);
  $age=mysqli_real_escape_string($db->link, $_POST['age']);
  $des=mysqli_real_escape_string($db->link, $_POST['des']);
  $email=mysqli_real_escape_string($db->link, $_POST['email']);
  $msg=mysqli_real_escape_string($db->link, $_POST['msg']);
  
   if($name == ''|| $age == '' || $des == ''|| $email == '' || $msg == ''  ){

  $error ="must not be empity";

}else{

  $query="UPDATE sstory
  SET
  name='$name',
  age='$age' ,
  des ='$des',
  email ='$email',
  msg='$msg'
  WHERE id=$id";  
  $update =$db->update($query);
}

}
?>
<?php
$id = $_GET['id'];
$db = new Database();
if(isset($_POST['delete'])){

$query = "DELETE FROM sstory WHERE id=$id";
$deleteData = $db->delete($query);
  
}
?>
<?php
if(isset($error)){
 echo"<span style='color:red;'>".$error."</span>";
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
        <?php include_once("adminnav.php"); ?>

        <!-- Page Content  -->
        <div id="content">

             <?php include_once("adminnav2.php"); ?>
                      

            

            <div class="line"></div>
            
 
  
  <!--main part-->
<section id="contact" class="py-5  text-dark " style="background-color:#263238;">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="background-color:">
        <div class="card-header text-center">
          <h3 class="lead">Story </h3>
  </div>
        <div class="card-body text-dark bg-light">
          
          <div class="row mt-4">
          
          
          <div class="col-md-12">
            
           <form action="upstory.php?id=<?php echo $id;?>" method="post">
<table style="width:100%">
  <tr>
    <td>Name</td>
    <td><input type="text" name="name" value="<?php echo $getData['name']?>"/></td>
  </tr>
  <tr>
    <td>Age</td>
    <td><input type="text" name="age" value="<?php echo $getData['age']?>"/></td>
  </tr>
  <tr>
    <td>Designation</td>
    <td><input type="text" name="name" value="<?php echo $getData['des']?>"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email" value="<?php echo $getData['email']?>"/></td>
  </tr>

  <tr>
    <td>Story</td>
    <td><textarea row="4" type="text" name="msg" value="<?php echo $getData['msg']?>"></textarea></td>
  </tr>

  

  <tr>
    <td></td>
    <td>
      <input class="lead btn-outline-success" type="submit" name="submit" value ="Update"/>
    <input class="lead btn-outline-danger" type="submit" name="delete" value ="Delete"/></td>
  </tr>
  
  </table>
</form>
          </div>
        
        </div>
      </div>
     </div>
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