<?php session_start();
    require_once('functions/function.php');
    needLogged();
    // get_part('header.php');
    $link=explode('/',$_SERVER['PHP_SELF']);
  //print_r($link);
    $page=$link[2];
     $name=$_SESSION['name'];

      $sel="SELECT * from appointment natural join time_slot where patient_name='$name' and status=1";
      $qry=mysqli_query($con,$sel);
      $data=mysqli_fetch_array($qry)
  ?>
<!DOCTYPE html>
<html>
<head>

</head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Doctors Web</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="shortcut icon" href="img/favicon.png" type="images/x-icon"/>
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/appstyle.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/responsive.css">
        
<body>
<section>
    <nav class="navbar custom-nav">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img class="img-responsive" src="img/logo.png" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a<?php if($page=='index.php'){echo ' class="active-menu"';}; ?> href="index.php">Home</a></li>
        <li><a<?php if($page=='health.php'){echo ' class="active-menu"';}; ?> href="health.php">HEALTH</a></li>
        <li><a<?php if($page=='drug.php'){echo ' class="active-menu"';}; ?> href="drug.php">DRUG &amp; SUPPLY</a></li>
        <li><a<?php if($page=='appointment.php'){echo ' class="active-menu"';}; ?> href="appointment.php">DOCTOR APPOINTMENT</a></li>
        <li><a<?php if($page=='about.php'){echo ' class="active-menu"';}; ?> href="about.php">ABOUT US </a></li>
        <li><a<?php if($page=='logout.php'){echo ' class="active-menu"';}; ?> href="logout.php">LOGOUT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--navbar-->

</section>
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="col-sm-9">
                  <strong><?=$_SESSION['name'];?>'s Appointment details</strong>
              </div>
              <div class="col-sm-3">
                  <a href="doctorlist.php" class="amar_btn"> <i class="fa fa-plus-square"></i></a> All Doctors
              </div>

              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?php 
            if(!empty($data['patient_name'])){


            ?>
              <table id="myTable" class="table table-striped table-responsive table-hover amar_table">

                 			<tr>
                          <td>Patient Name</td>
                          <td>:</td>
                          <td><?=$data['patient_name'];?></td>
                          </tr>
                          <tr>
                          <td>Patient Email</td>
                          <td>:</td>
                          <td><?=$data['patient_email'];?></td>
                     		</tr>
                          <tr>
                          <td>Appointment Date</td>
                          <td>:</td>
                          <td><?=$data['ap_date'];?></td>
                     		</tr>
                          <tr>
                          <td>Time Slot</td>
                          <td>:</td>
                          <td><?=$data['time_slot'];?></td>
                     		</tr>

              </table>
              <div class="panel-footer">
              <button id="pdf"> Export as Pdf</button> <br>

            </div>
             <?php }
             else{
              echo "Appointment is pending.";
             }
             ?>
              </div>
              <div class="col-md-2"></div>
              <div class="clr"></div>

            </div>
            
          </div>
      </div>
  </div>



 



  <footer>
       <div class="container">
           <div class="col-sm-3">
               <div class="footer-details">
                   <h2>Central Office:</h2>
                   <ul>
                       <li>Ascent Group House 3/D, Road 2/A, Block J,Baridhara, </li>
                       <li><span>Tele: 8860147,8860132,8819500,</span><span>8815222,8856019-20 &amp; 9887277</span></li>
                       <li><span>Fax: (+88 02) 8813141</span> <span> Email: info@scholasticabd.com</span></li>
                       <li>
                           <b><a href=""><i class="fa fa-facebook"></i></a></b>
                           <b><a href=""><i class="fa fa-twitter"></i></a></b>
                           <b><a href=""><i class="fa fa-google-plus"></i></a></b>
                       </li>
                   </ul>
               </div>
           </div><!--col-sm-3 end-->

           <div class="col-sm-3">
               <div class="footer-details">
                   <h2>Campus Address:</h2>
                   <ul>
                       <li>
                           <span>Senior campus,Uttara, Plot 2,</span>
                           <span>Road 8 &amp; 9, Sector 1,</span>
                           <span>Uttara Model Town,</span>
                           <span>Dhaka 1230</span>
                        </li>
                       <li><span>Junior campus,Uttara, Plot 1, Road </span><span>21, Sector 4, Uttara Model Town,</span> Dhaka 1230</li>
                       <li><span>Senior Campus,Mirpur, Plot 2/B-2,</span> <span> 2/C line one, Section 13, Mirpur,</span> Dhaka 1216</li>
                   </ul>
               </div>
           </div><!--col-sm-3 end-->


           <div class="col-sm-3">
               <div class="footer-details">
                   <h2>Campus Address:</h2>
                   <ul>
                       <li>
                           <span>Junior campus,Dhanmondi, Plot 78,</span>
                           <span>Road 8/A, Mirza Golam Hafiz Road,</span>
                           <span> Dhanmondi R/A, Dhaka 1209</span>
                      </li>

                       <li>
                           <span>Junior campus,Gulshan, Plot </span>
                           <span>lot NE(D)3,Gulshan Avenue,North,Shaheed</span>
                           <span> Major , Najmul Haque Sarak,Gulshan 2,</span>
                           <span>Dhaka 1212</span>
                      </li>
                   </ul>
               </div>
           </div><!--col-sm-3 end-->


           <div class="col-sm-3">
               <div class="footer-details">
                   <h2>Associate School of:</h2>
                   <ul>
                     <li>Bangladesh Medical University.</li>
                       <li><a href=""><img class="img-responsive" src="img/accociate.png" alt=""></a></li>
                   </ul>

                   <h2>Member of:</h2>
                   <ul>
                       <li>Medical Faculty of Bangladesh. </li>
                   </ul>
               </div>
           </div><!--col-sm-3 end-->
       </div>
       <div class="back_to_top"><img src="img/target.png" alt="target"></div>
</footer>

  <!--Social Nav-->
  <ul class="social-nav model-0">
  <li><a href="#" class="twitter"><i class="fa fa-facebook"></i></a></li>
  <li><a href="#" class="facebook"><i class="fa fa-twitter"></i></a></li>
  <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
</ul>



<script src="js/vendor/modernizr-2.8.3.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="tableExport/tableExport.js" ></script>
<script type="text/javascript" src="tableExport/jquery.base64.js" > </script>

<!--for pdf-->
<script type="text/javascript" src="tableExport/jspdf/libs/sprintf.js" ></script>
<script type="text/javascript" src="tableExport/jspdf/jspdf.js" ></script>
<script type="text/javascript" src="tableExport/jspdf/libs/base64.js" ></script>

<script type="text/javascript">
  $(document).ready(function (e){

    $("#pdf").click(function (e){

      $("#myTable").tableExport({
        type: 'pdf',
        escape: 'false'
      });

    });
 
  });
  

</script>
    </body>
</html>

