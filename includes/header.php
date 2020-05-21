<!-- transform: translate(-50%, -50%) rotate(-180deg); -->


<?php 
   $dir = "";
   $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
   // echo "<pre>";print_r($uriSegments);die;
   if( count($uriSegments) == "3" ) {
      $dir = "";
   }else if( count($uriSegments) == "4" ) {
      $dir = "../";
   }else if( count($uriSegments) == "5" ) {
      $dir = "../../";
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Impulse World Trends - Build Your Dream Home With Us</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="<?= $dir; ?>css/rubik_family.css" rel="stylesheet">
      <link rel="stylesheet" href="<?= $dir; ?>fonts/icomoon/style.css">
      <link rel="stylesheet" href="<?= $dir; ?>css/bootstrap.min.css">
      <link rel="stylesheet" href="<?= $dir; ?>css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="<?= $dir; ?>css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= $dir; ?>css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?= $dir; ?>fonts/flaticon/font/flaticon.css">
      <link rel="stylesheet" href="<?= $dir; ?>css/aos.css">
      <link href="<?= $dir; ?>css/material-icons.css"
         rel="stylesheet">
      <!-- MAIN CSS -->
      <link rel="stylesheet" href="<?= $dir; ?>css/style.css">
      <link href="<?= $dir; ?>css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <!-- slick css -->
      <link rel="stylesheet" type="text/css" href="<?= $dir; ?>css/slick11.min.css">
      <link href="<?= $dir; ?>css/jquerysctipttop11.css" rel="stylesheet" type="text/css">
      <!-- font awasome css -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- datetimepicker css -->
      <link rel="stylesheet" type="text/css" href="<?= $dir; ?>css/bootstrap-datetimepicker.min.css">
   </head>
   <body  data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
 
      
      <div class="site-mobile-menu site-navbar-target">
         <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
               <span class="icon-close2 js-menu-toggle"></span>
            </div>
         </div>
         <div class="site-mobile-menu-body"></div>
      </div>
      <div class="top-bar">
         <div class="container-fluid">
            <div class="row">
               <div class="col-1">
               </div>
               <div class="col-10 top-section">
                  <a href="http://www.facebook.com" class="text-white mr-2" target="_blank"><img class="text-white img-fluid" src="<?= $dir; ?>images/img/facebook.png"> <span class="d-none d-md-inline-block"></span></a>
                  <a href="http://www.instagram.com" class="text-white mr-2" target="_blank"><img class="text-white insta img-fluid" src="<?= $dir; ?>images/img/insta.png"> <span class="d-none d-md-inline-block"></span></a>
                  <a href="http://www.linkedin.com" class="text-white mr-2" target="_blank"><img class="text-white img-fluid" src="<?= $dir; ?>images/img/linkdin.png"> <span class="d-none d-md-inline-block"></span></a>
                  <div class="float-right">
                     <a href="#" class="text-white" onclick="modal_open()"><span class="mr-2 text-white material-icons">get_app</span> <span class="d-none d-md-inline-block font-size-12">Download Brochure</span></a>
                     <span class="mx-md-2 d-inline-block"></span>
                     <a href="#" class="text-white "><span class="mr-2 text-white material-icons">call</span> <span class="d-none d-md-inline-block font-size-12">020-24862486</span></a>
                     <span class="mx-md-2 d-inline-block"></span>
                     <a href="mailto:contact@impulsetrends.com" class="text-white" target="_blank" ><span class="mr-2 text-white material-icons">email</span> <span class="d-none font-size-12 d-md-inline-block">contact@impulsetrends.com</span></a>
                  </div>
               </div>
               <div class="col-1">
               </div>
            </div>
         </div>
      </div>
      <header class="site-navbar js-sticky-header site-navbar-target " role="banner">
         <div class="container-fluid">
            <div class="row align-items-center position-relative">
               <div class="col-1">
               </div>
               <div class="col-10 pl-0 pr-0">
                  <div class="site-logo">
                     <a href="<?= $dir; ?>index.php" class="text-black"><img class="img-fluid" src="<?= $dir; ?>images/img/impulse_logo.png"></a>
                  </div>
                  <div class="col-12">
                     <nav class="site-navigation text-right ml-auto " role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                           <li class="parent_list"><a href="<?= $dir; ?>index.php" class="nav-link parent_anchor">Home</a></li>
                           <li class="has-children parent_list dropdown">
                              <a href="#" class="nav-link parent_anchor  dropdown-toggle" data-toggle="dropdown">Company</a>
                              <ul class="dropdown arrow-top dropdown-menu">
                                 <li><a href="<?= $dir; ?>company/about_us.php" class="nav-link">About Us</a></li>
                              </ul>
                           </li>
                           <li class="has-children parent_list dropdown">
                              <a href="#" class="nav-link parent_anchor dropdown-toggle" data-toggle="dropdown">Products</a>
                              <ul class="dropdown dropdown-menu arrow-top">
                                 <li><a href="<?= $dir; ?>product/bathroom_soln.php" class="nav-link">Bathroom Solutions</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="<?= $dir; ?>product/tiles.php" class="nav-link">Surfaces (Tiles & Others)</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="<?= $dir; ?>home_kitchen.php" class="nav-link">Home & Kitchen Furniture</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Fixing & Levelling Solutions</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Lights, Switches & Automation</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Designer Railings</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Designer Railings</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Designer Wood</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Windows</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Curtains & Blinds</a></li>
                                 <li class="dropdown-divider"></li>
                                 <li><a href="" class="nav-link">Metal</a></li>
                              </ul>
                           </li>
                           <li class="parent_list"><a href="<?= $dir; ?>projects.php" class="nav-link parent_anchor">Projects</a></li>
                           <li class="parent_list"><a href="<?= $dir; ?>services.php" class="nav-link parent_anchor">Services</a></li>
                           <li class="parent_list"><a href="<?= $dir; ?>contact_us.php" class="nav-link parent_anchor">Contact Us</a></li>
                        </ul>
                     </nav>
                  </div>
                  <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-0 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
               </div>
               <div class="col-1">
               </div>
            </div>
         </div>
      </header>
      
  