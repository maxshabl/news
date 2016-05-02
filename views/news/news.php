
	<!----start-slider-script---->
			<script src="../../style/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container" id="home">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="../../style/images/banner.jpg" alt="">
						<div class="caption bounceInDown" >
			          	<div class="slide-text-info">
			          		<h1>Intellectual Property has the Shelf Life</h1>
			          		<p>of a Banana.</p>
							<a class="banner-btn wow bounceIn" data-wow-delay="0.4s" href="#">Become a Member</a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="../../style/images/banner.jpg" alt="">
			        <div class="caption">
			          	<div class="slide-text-info bounceInDown" >
			          		<h1>Intellectual Property has the Shelf Life</h1>
			          		<p>of a Banana.</p>
							<a class="banner-btn wow bounceIn" data-wow-delay="0.4s" href="#">Become a Member</a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="../../style/images/banner.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info bounceInDown" >
			          		<h1>Intellectual Property has the Shelf Life</h1>
			          		<p>of a Banana.</p>
							<a class="banner-btn wow bounceIn" data-wow-delay="0.4s" href="#">Become a Member</a>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End-slider---->
	<!---//banner--->
	<!----content---->

	<!----content---->
