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
$query = "SELECT * FROM story WHERE id=$id";
$getData =$db->select($query)->fetch_assoc();

if(isset($_POST['submit'])){
  $problem =mysqli_real_escape_string($db->link, $_POST['problem']);
  $solution =mysqli_real_escape_string($db->link, $_POST['solution']);
  
  if($problem == '' || $solution == '' ){

  $error ="must not be empity";

}else{

  $query="UPDATE story
  SET
  problem='$problem',
  solution='$solution'
  WHERE id=$id";  
  $update =$db->update($query);
}

}
?>
<?php
$id = $_GET['id'];
$db = new Database();
if(isset($_POST['delete'])){

$query = "DELETE FROM story WHERE id=$id";
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
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#dashboardSubmenu" data-toggle="collapse" aria-expanded="false">Dash Board</a>
                    <ul class="collapse list-unstyled" id="dashboardSubmenu">
                        <li>
                            <a href="admin.php">Home</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="showuser.php">User</a>
                    <a href="cngpass.php">Change Passwowd</a>
                    <a href="#pageSubmenus" data-toggle="collapse" aria-expanded="false"> Post in Solution Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenus">
                        <li>
                            <a href="prb.php">Anxiety and fears</a>
                        </li>
                        <li>
                            <a href="m.php">Managing Anger</a>
                        </li>
                        <li>
                            <a href="r.php">Relation</a>
                        </li>
                        <li>
                            <a href="f.php">Family</a>
                        </li>
                        <li>
                            <a href="l.php">Loneliness</a>
                        </li>
                        <li>
                            <a href="u.php">Unstable</a>
                        </li>
                        <li>
                            <a href="m1.php">Marriage</a>
                        </li>
                        <li>
                            <a href="s.php">Sexual Harassment</a>
                        </li>
                        <li>
                            <a href="o.php">Others</a>
                        </li>
                    </ul>
                    <a href="#pageSubmenuse" data-toggle="collapse" aria-expanded="false"> Update Solution Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuse">
                        <li>
                            <a href="showf.php">Anxiety and fears</a>
                        </li>
                        <li>
                            <a href="showanger.php">Managing Anger</a>
                        </li>
                        <li>
                            <a href="r.php">Relation</a>
                        </li>
                        <li>
                            <a href="f.php">Family</a>
                        </li>
                        <li>
                            <a href="l.php">Loneliness</a>
                        </li>
                        <li>
                            <a href="u.php">Unstable</a>
                        </li>
                        <li>
                            <a href="m1.php">Marriage</a>
                        </li>
                        <li>
                            <a href="s.php">Sexual Harassment</a>
                        </li>
                        <li>
                            <a href="o.php">Others</a>
                        </li>
                    </ul>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"> Post in Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                           
                        </li>
                        <li>
                            <a href="article.php">Article</a>
                        </li>
                        <li>
                            <a href="storyinsert.php">Story</a>
                        </li>
                    </ul>
                    <a href="#pageSubmenuv" data-toggle="collapse" aria-expanded="false"> Update Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenuv">
                        
                        <li>
                            <a href="showarticle.php">Article</a>
                        </li>
                        <li>
                            <a href="showstory.php">Story</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="msg.php">Inbox</a>
                </li>
                <li>
                    <a href="cont.php">Contact</a>
                </li>
                <li>
                    <a href="../index.php">Visit Website</a>
                </li>
            </ul>

            <!--<ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>-->
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MENU BAR</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                     <p class="lead font-weight-bold" style="text-align:center;padding-left: 450px;"><h3>Disple Depression</h3></p>
                     

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?action=logout">Log out</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </nav>

                      

            

            <div class="line"></div>
            
 
  
  <!--main part-->
<section id="contact" class="py-5  text-dark " style="background-color:#263238;">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="card" style="background-color:">
        <div class="card-header text-center">
          <h3 class="lead">Anxiety and Fear</h3>
  </div>
        <div class="card-body text-dark bg-light">
          
          <div class="row mt-4">
          
          
          <div class="col-md-12">
            
           <form action="update.php?id=<?php echo $id;?>" method="post">
<table style="width:100%">
  <tr>
    <td>Problem</td>
    <td><input type="text" name="problem" value="<?php echo $getData['problem']?>"/></td>
  </tr>

  <tr>
    <td>Solution</td>
    <td><input type="text" name="solution" value="<?php echo $getData['solution']?>"/></td>
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