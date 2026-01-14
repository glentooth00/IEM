<?php session_start(); ?>
<!DOCTYPE html>
<html class="html theme-light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pagetitle ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <!----CUSTOM CSS ------>
    <link rel="stylesheet" type="text/css"  href="public/assets/css/behaviors.css">
    <!-- <link rel="stylesheet" type="text/css"  href="../../public/assets/css/sidebar.css"> -->
    <link rel="stylesheet" type="text/css"  href="../../public/assets/css/style.css">
    <link rel="stylesheet" type="text/css"  href="../../public/assets/css/behaviors.css">
    <link rel="stylesheet" type="text/css"  href="../../public/assets/css/modal_style.css">
    <link rel="stylesheet" type="text/css"  href="../../public/assets/css/images.css">
    
    <!-- JQUERY ---->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../../public/assets/js/modal.js"></script>
    <!--------BOOTSTRAP FONTS --------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"/>

    <script>
            $(document).ready(function(){
                $('#themeButton').on('click', function() {

                    var $target = $('.html');

                    if($target.hasClass('theme-light')){

                        $target.removeClass('theme-light');
                        $target.addClass('theme-dark')

                    }else{

                        $target.removeClass('theme-dark');
                        $target.addClass('theme-light');;
                    }
                });
            }); 

            $(document).ready(function(){
                $('#themeButton').click(function() {
                    var $img = $('#image');
                    var $img1= 'public/assets/images/moon.png';
                    var $img2= 'public/assets/images/sun2.png';

                    if($img.attr('src')=== $img1){
                        $img.attr('src', $img2);
                    }else{
                        $img.attr('src', $img1);
                    }
                });
            });
    </script>

</head>
<body>

<!-- Mobile Navbar -->
<nav class="mobile-nav is-hidden-tablet">
  <div class="mobile-nav-header">
    <span class="has-text-weight-bold">Dashboard</span>

    <button class="burger-btn" id="burgerBtn">
      ☰
    </button>
  </div>
</nav>

<!-- Mobile Slide Menu -->
<div class="mobile-menu" id="mobileMenu">
  <a href="index.php">Home</a>
  <a href="#">Profile</a>
  <a href="#">Messages</a>
  <a href="users.php">Users</a>
  <a href="#">Settings</a>
  <a href="#" class="has-text-danger">Logout</a>
</div>

<!-- Dark overlay -->
<div class="menu-overlay" id="menuOverlay"></div>



    