<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Travel Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>  

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_travelTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_travelTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'travel-header.php'; ?>
   
<div class="container">  <!-- start main content container -->
   <div class="row">  <!-- start main content row -->
      <div class="col-md-3">  <!-- start left navigation rail column -->
         <?php include 'travel-left-rail.php'; ?>
      </div>  <!-- end left navigation rail --> 
      
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="#">Browse</a></li>
           <li class="active">Favorites</li>
         </ol>          

           <h1>Favorites</h1>
       
      
         <!-- start post summaries -->
         <div class="well">
            <div class="row">


                <?php include 'travel-data.php'; ?>


                <?php


                foreach ( $images as $imageEntry){
                    //  echo "---".$imageEntry['id'];
                    // echo "===".$imageEntry['title'];
                    // echo "^^^".$imageEntry['path'];

                    echo "<div class ='col-md-3'> <a href='travel-image.php?id=".$imageEntry['id']."'><img border='0' alt='W3Schools' src='./images/travel/square/".$imageEntry['path']."' width='100' height='100'></a></div>";


                }
                ?>
<!--                <div class="col-md-3">-->
<!--                    <a href="travel-image.php?id=22" class="thumbnail">-->
<!--                        <img src="images/travel/square/6114850721.jpg" alt="...">-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="col-md-3">-->
<!--                    <a href="travel-image.php?id=54" class="thumbnail">-->
<!--                        <img src="images/travel/square/9495574327.jpg" alt="...">-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="col-md-3">-->
<!--                    <a href="travel-image.php?id=7" class="thumbnail">-->
<!--                        <img src="images/travel/square/5856697109.jpg" alt="...">-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="col-md-3">-->
<!--                    <a href="travel-image.php?id=19" class="thumbnail">-->
<!--                        <img src="images/travel/square/5855729828.jpg" alt="...">-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="col-md-3">-->
<!--                    <a href="travel-image.php?id=46" class="thumbnail">-->
<!--                        <img src="images/travel/square/8711645510.jpg" alt="...">-->
<!--                    </a>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="col-md-3">-->
<!--                    <a href="travel-image.php?id=6" class="thumbnail">-->
<!--                        <img src="images/travel/square/6114907897.jpg" alt="...">-->
<!--                    </a>-->
<!--                </div>-->

            </div>
         </div>


      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end main content container -->
   
<?php include 'travel-footer.php'; ?>   

   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>