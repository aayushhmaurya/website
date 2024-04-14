<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Men Salon Management System || Contact Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include_once('includes/header.php');?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Contact us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-contact">
                         <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <!-- widget search -->
                        <h3 class="widget-title">Contact Info</h3>
                        <address>
                            <strong>Address.</strong>
                            <br> <?php  echo $row['PageDescription'];?>
                           <br>
                            <br>
                            <abbr title="Phone">Phone:</abbr> <?php  echo $row['MobileNumber'];?>
                        </address>
                        <address>
                            <strong>Email</strong>
                            <br>
                            <?php  echo $row['Email'];?>
                        </address>
                         <address>
                            <strong>Timing</strong>
                            <br>
                           <?php  echo $row['Timing'];?>
                        </address><?php } ?>
                    </div>
                    <!-- /.widget search -->
                    <div class="widget widget-social">
                        <div class="social-circle">
                            <a href="#" class="#"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="#"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                          
                    <div class="well-block">
                        <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <h1><?php  echo $row['PageTitle'];?></h1>
                        <h5 class="small-title ">best experience ever</h5>
                        <p><?php  echo $row['PageDescription'];?></p><?php } ?>
                         </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p style=" text-align:center; 
    
    display:center;
    color:white;"><Strong>Direction On Google Map</Strong></p>
    <div style="justify-content:center;
    margin: auto;
    border: ;
    padding: 10px;
    "><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1582.1451442348753!2d72.85927167590171!3d19.412556119522822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a8d105586ad5%3A0x55f701769519f748!2sImran.S%20Salon!5e0!3m2!1sen!2sin!4v1712295277892!5m2!1sen!2sin" width="100%" height="500px" style="border:10px solid #8E7424;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
   <?php include_once('includes/footer.php');?> 

    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
