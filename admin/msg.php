<?php include_once("ss.php"); 
Session::checkSession();?>
<?php
if(isset($_GET['action']) && $_GET['action'] == "logout"){

         Session::destroy();
            }
?>
<?php include '../config.php';?>
<?php include 'database1.php';?>
<?php 
$db = new Database();
$query = "SELECT * FROM contact";
$read =$db->select($query);
?>

<?php
if(isset($_GET['msg'])){
 echo"<span style='color:red;'>".$_GET['msg']."</span>";
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
          <h3 class="lead">User Information</h3>
  </div>
        <div class="card-body text-dark bg-light">
          
          <div class="row mt-4">
          
          
          <div class="col-md-12">
            
           <table style="width:100%">
  <tr>
    <th>Serial</th>
    <th>First Name</th> 
    <th>Last Name</th>
    <th>Email</th> 
    <th>Phone Number</th>
    <th>Massage</th>
    <th>Date</th>
    <th>Action</th>
  </tr>
  <?php if($read) { ?>
    <?php while ($row = $read->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['fn'];?></td>
    <td><?php echo $row['ln'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['pnum'];?></td>
    <td><?php echo $row['msg'];?></td>
    <td><?php echo $row['date'];?></td>
    <td> <a class="lead btn-outline-info" href="https://mail.google.com"><b>Reply</b></a></td>
  </tr>
  <?php } ?>
  <?php } else { ?>
    <p>Data is not available</p>
    <?php } ?>
  </table>
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