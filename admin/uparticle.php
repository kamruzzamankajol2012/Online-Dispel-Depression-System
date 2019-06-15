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
$query = "SELECT * FROM ar WHERE id=$id";
$getData =$db->select($query)->fetch_assoc();

if(isset($_POST['submit'])){
  $tittle =mysqli_real_escape_string($db->link, $_POST['tittle']);
  $name =mysqli_real_escape_string($db->link, $_POST['name']);
  $article =mysqli_real_escape_string($db->link, $_POST['article']);
   $surce =mysqli_real_escape_string($db->link, $_POST['surce']);

  
  if($tittle == '' || $name == '' || $article == '' || $surce =='' ){

  $error ="must not be empity";

}else{

  $query="UPDATE ar
  SET
  tittle='$tittle',
  name='$name',
  article='$article',
  surce='$surce'
  WHERE id=$id";  
  $update =$db->update($query);
}

}
?>
<?php
$id = $_GET['id'];
$db = new Database();
if(isset($_POST['delete'])){

$query = "DELETE FROM ar WHERE id=$id";
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
          <h3 class="lead">Article</h3>
  </div>
        <div class="card-body text-dark bg-light">
          
          <div class="row mt-4">
          
          
          <div class="col-md-12">
            
           <form action="uparticle.php?id=<?php echo $id;?>" method="post">
<table style="width:100%">
  <tr>
    <td>Tittle</td>
    <td><input type="text" name="tittle" value="<?php echo $getData['tittle']?>"/></td>
  </tr>

  <tr>
    <td>Author Name</td>
    <td><input type="text" name="name" value="<?php echo $getData['name']?>"/></td>
  </tr>

  <tr>
    <td>Article</td>
    <td><input type="text" name="article" value="<?php echo $getData['article']?>"/></td>
  </tr>
  <tr>
    <td>Source</td>
    <td><input type="text" name="surce" value="<?php echo $getData['surce']?>"/></td>
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