<!DOCTYPE html>
<html lang="pt_BR">
<head>
   <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T8VPG7N');</script>
   <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0642a3" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
      <?php echo $title; ?>
    </title>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="robots" content="<?php if (isset($robots)) {echo $robots;}
    else {echo "index, follow";} ?>" />
    <!-- main styling file  -->
	<script src="https://kit.fontawesome.com/965317de7b.js"></script>
    <link rel="stylesheet" href="/css/site.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <link rel="stylesheet" href="/css/typo1.css">
    <link rel="stylesheet" href="<?php echo $csscustom; ?>">
    <link rel="icon" href="/images/favicon.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".scrolly" data-offset="50">
   <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8VPG7N"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->

<!--Preloader>
<div class="loader">
   <div class="loader-inner">
     
   </div>
</div>
< Preloader ends-->
<div class="wrapper">

<!-- Main-Navigation -->
<header id="main-navigation">
   <div id="navigation">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <nav class="navbar navbar-default">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="true">
                         <span class="icon-bar top-bar"></span>
                         <span class="icon-bar middle-bar"></span>
                         <span class="icon-bar bottom-bar"></span>
                     </button>
                     <a class="navbar-brand logo-center" href="index.php">
                       <img src="/images/logo.png" alt="logo" class="scrolled-logo">
                      </a>
                  </div>
                  <div id="fixed-collapse-navbar" class="navbar-collapse collapse scrolly">
                     <div class="navbar-left-1">
                        <ul class="nav navbar-nav navbar-left">
                           <li><a href="index.php"><?php echo $home; ?></a></li>
                           <li><a class="scrollings" href="marketing-digital.php"><?php echo $marketing; ?></a></li>
                           <li><a class="scrollings" href="websites.php"><?php echo $websites; ?></a> </li>
                           <li><a class="scrollings" href="design-grafico.php"><?php echo $grafico; ?></a></li>
                        </ul>
                     </div>
                     <div class="navbar-right-1">
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="editorial.php" class="scrollings"><?php echo $editorial; ?></a></li>
                           <li><a href="index.php#portfolio"><?php echo $portfolio; ?></a></li>
                           <li class="static dropdown">
                           <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php echo $planos; ?></a>
                           <ul class="megamenu-content dropdown-menu">
                              <li>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <h5 class="title"><?php echo $planos; ?></h5>
                                       <ul>
                                          <li><a href="marketing-digital.php"><?php echo $marketing; ?></a></li>
                                          <li><a href="websites.php"><?php echo $websites; ?></a></li>
                                          <li><a href="design-grafico.php"><?php echo $graficos; ?></a></li>
                                          <li><a href="editorial.php"><?php echo $editorial; ?></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </li>
                           <li><a href="#contact-form" class="scrollings"><?php echo $contato; ?></a></li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>