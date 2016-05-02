
<div class="bottom-yah">
    <div class="container">
        <div class="bottom-yah-ic">
            <ul id="flexiselDemo1">
                <li><img src="../../style/images/yahoo.png"/></li>
                <li><img src="../../style/images/tech.png"/></li>
                <li><img src="../../style/images/crowd.png"/></li>
                <li><img src="../../style/images/week.png"/></li>
                <li><img src="../../style/images/hk.png"/></li>
                <li><img src="../../style/images/money.png"/></li>
                <li><img src="../../style/images/rthk.png"/></li>
            </ul>
            <script type="text/javascript">
                $(window).load(function() {

                    $("#flexiselDemo1").flexisel({
                        visibleItems: 7,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="../../style/js/jquery.flexisel.js"></script>
        </div>
    </div>
</div>
</div>
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

