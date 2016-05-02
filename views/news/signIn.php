<?
//include __DIR__.'/../../controller/NewsController.php';
echo $a->hellow; ?>
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
                <ul>
                    <li><a href="#home">Главная</a></li>
                    <li><a href="./newsToday.php" class="scroll">Новости сегодня</a></li>
                    <li><a href="#Properties" class="scroll">Новости сегодня 2</a></li>
                    <li><a href="#projects" class="scroll" >Регистрация</a></li>
                    <li><a href="#Community" class="scroll">Войти</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <!---- script-nav ---->

            <!---- script-nav ---->
            <div class="top-nav-right">
                <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                    <div id="loginBox">
                        <form id="loginForm">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email">
                                </fieldset>
                                <fieldset>
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                </fieldset>
                                <input type="submit" id="login" value="Sign in">
                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
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
            <!---- script-nav ---->

    </div>
</div>
<!----//header---->



	<!----content---->
<div class="content">
	<div class="container">
		<div id="works" class="content-work">
			<div class="content-top">

				


			</div>
            <div class="tab">
                <div class="content-top-bottom" id="tab-1">

                    <div class=" col-md-8 top-img-para">
                        <h4>Browse projects,like booking a hotel online!</h4>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>


		</div>
		</div>
	</div>
	<!--script-->

	<!--//script-->
	<!--properties-->


	<!----content---->
	<!----footer---->
	<div class="footer">
		<div class="container">
			<div class="footer-class">
				<p>&copy; 2014 Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>						
	<!----footer---->
</body>
</html>