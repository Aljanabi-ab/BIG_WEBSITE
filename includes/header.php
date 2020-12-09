<?php include 'big-config.php'?>
<!DOCTYPE html >
<html lang=''>
<head>
<title><?=$title?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex,nofollow" />
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/menustyles.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> <?=$title?></a></h1>
  <div id="cssmenu">



  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i>Portal Page</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
     <li><a href="ResponsiveVSMobile.php"><span><i class="fa fa-fw fa-html5"></i> Responsive vs Mobile</span></a></li>
     <li><a href="Galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
     <li><a href="Flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
     <li><a href="ShoppingCarts.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>


     <li><a href='#'><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="Calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="Map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="Youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     
     <li><a href="Webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
  </ul>

     
   
  </div>
  
</header>