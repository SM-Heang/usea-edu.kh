<!-- =====> Start Footer <===== -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center" id="footer-location">
					<p>Address : Opposite Angkor High School, Siem Reap Municipality, Kingdom of Cambodia<br> Website: www.usea.edu.kh | Email : info@usea.edu.kh <br> Tel : 063 900 090, 017 386 678 </p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="col-xxl-12 text-center copyright">
				<p>Copyright © 2006 - 2022 University of South-East Asia, All rights reserved. </p>
			</div>
		</div>

	<!-- =====> End Footer <===== -->
	</div>

	<div class="gototop js-top" id="goto">
		<a href="#top" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
		
	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="../js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.item-link').click(function(){
				$(this).next('.sub-menu').slideToggle();
			});
		});
	</script>
	<script>
		$('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
	dots: false,
	autoplay: true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:8
        }
    }
})
	</script>
	<script>
		$(document).ready(function(){
			$('.hamburger').click(function(){				
				$('.mobile-menu').slideToggle();
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$('.dropdown-parent > a').click(function(){
				$(this).parent().siblings().find('div').fadeOut(500);
				$(this).next('div').stop(true, false, true).fadeToggle(500);
				return false;

			});
		});
	</script>
	
	</body>
</html>