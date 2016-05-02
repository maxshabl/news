<?php
session_start();
$reg = new Registration();
$reg->signOut($_POST['SignOut']);
$reg->signIn($_POST['email'],$_POST['password'], $_POST['remember']);
$userType = $reg->autoSignIn();


$reg->addUser($_POST['regemail'], $_POST['regpassword'], $_POST['repassword']);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Icrowdme Bootstarp Website Template | Home :: w3layouts</title>
    <link href="../../style/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!----- theme-style ------>
    <link href="../../style/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!----- //theme-style ------>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <!---script--->
    <script src="../../style/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../style/js/move-top.js"></script>
    <script type="text/javascript" src="../../style/js/easing.js"></script>
    <script type="text/javascript" src="../../style/js/tinymce/tiny_mce.js"></script>
    <script src="../../style/js/menu_jquery.js"></script>
    <!---script--->
    <!---- animated-css ---->
    <link href="../../style/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="../../style/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!---- animated-css ---->

</head>
<body>
<!----header---->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="../../style/images/logo.png"></a>
        </div>
        <div class="top-nav">
            <div class="top-nav-left">
                <span class="menu"> </span>
                <ul><?php if(!(isset($_SESSION['email']) and isset($_SESSION['hash']))){
                            echo '<li><a href="/news/">Главная</a></li>';
                            echo '<li><a href="/news/newsToday/" >Новости сегодня</a></li>';
                            echo '<li><a href="/news/registration"  >Регистрация</a></li>';

                        }elseif((isset($_SESSION['email']) and isset($_SESSION['hash']))){
                            echo '<li><a href="/news/">Главная</a></li>';
                            echo '<li><a href="/news/newsToday/" >Новости сегодня</a></li>';
                            echo '<li><a href="/news/articles">Мои статьи</a></li>';

                        }
                    ?>
                    <div class="clearfix"> </div>

                </ul>
            </div>
            <!---- script-nav ---->
            <script>
                $("span.menu").click(function(){
                    $(".top-nav-left ul").slideToggle(500, function(){
                    });
                });
            </script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
            <!---- script-nav ---->
            <div class="top-nav-right">
                <div id="loginContainer"><a href="#" id="loginButton"><?php if((isset($_SESSION['email']) and isset($_SESSION['hash']))) echo '<span>' . $_SESSION['email'] . '</span>'; else echo '<span> login </span>'; ?></a>
                    <div id="loginBox">
                        <form id="loginForm" method="POST" action="/news/registration">
                            <fieldset id="body">
                               <?php if(!(isset($_SESSION['email']) and isset($_SESSION['hash'])))
                                echo '<fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email">
                                </fieldset>
                                <fieldset>
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                </fieldset>
                                <input type="submit" id="login" value="Sign in">
                                <label for="checkbox"><input type="checkbox" name ="remember" value="yes" id="checkbox"> <i>Запомнить меня</i></label>';

                                if((isset($_SESSION['email']) and isset($_SESSION['hash'])))
                                echo '<fieldset>
                                    <label for="password">Выйти из аккаунта '.$_SESSION['email'].'</label>
                                    </fieldset>
                                    <button type="submit" id="login" name="SignOut" value="yes"> Выйти </button>';

                                ?>

                            </fieldset>
                            <span><a href="#">Forgot your password?</a></span>
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!----//header---->