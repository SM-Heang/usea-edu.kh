<?php
$page = 'home';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['page'] = $page;
$_SESSION['right'] = 'home';


include_once '../include/header.php';
include_once '../../connection/db.connection.php';
include_once '../../function.php';
?>
<!-- =====> Start Event <===== -->
<div id="fh5co-blog">
	<div class="container">
		<div class="row animate-box fh5co-heading">
			<div class="mt-3 text-center home-heading">
				<h1>News & Events</h1>
				<div class="separator">
					<div class="line"></div>
				</div>
				
			</div>
			<!-- <p><a href="upcoming-events.php" style="text-decoration:none; color:#002060;">Upcoming Events | <span style="font-size: 0.75rem; font-weight: 500;">All Events</span></a></p> -->
		</div>
		
		<section class="events" id="events">
			<div class="container">
				<h1 class="text-center">EVENTS & ANNOUNCEMENTS</h1>
				<div class="separator">
					<div class="line"></div>
				</div>
				<div class="mt-3 tab__events">
					<div class="tabs">
						<input type="radio" checked name="indicator" id="announcement">
						<input type="radio" name="indicator" id="upcoming-events">
						<input type="radio" name="indicator" id="past-events">
						<label for="announcement" class="tabs-links active">Announcement</label>
						<label for="upcoming-events" class="tabs-links">Upcoming Events</label>
						<label for="past-events" class="tabs-links">Past Events</label>
					</div>
				</div>
				<div class="container cards">
					<!-- row announcement -->
					<div class="row">
						<div class="announcement events-cards">
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card" >
									<img src="../../media/events/Environment 20143.JPG" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/Maha Sarakham Visit 02-Mar-20155.JPG" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/Preah Vihea trip 201410_s.jpg" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class=" mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/MOU-with-Korea1_s.jpg" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<a href="#" type="button" class="events-view">View All <i class="fa-solid fa-angle-right"></i></a>
						</div>
					</div>
					<!-- row upcoming events  -->
					<div class="row">
						<div class="upcoming-events events-cards">
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card" >
									<img src="../../media/events/Environment 20143.JPG" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/Maha Sarakham Visit 02-Mar-20155.JPG" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/Preah Vihea trip 201410_s.jpg" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class=" mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/MOU-with-Korea1_s.jpg" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<a href="#" type="button" class="events-view">View All <i class="fa-solid fa-angle-right"></i></a>
						</div>
					</div>
					<!-- row past events  -->
					<div class="row">
						<div class="past-events events-cards">
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card" >
									<img src="../../media/events/Environment 20143.JPG" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/Maha Sarakham Visit 02-Mar-20155.JPG" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/Preah Vihea trip 201410_s.jpg" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class=" mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
								<div class="card h-100 animate-card custom-card">
									<img src="../../media/events/MOU-with-Korea1_s.jpg" alt="aquare" class="card-img-top">
									<div class="card-body">
										<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
										<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
									</div>
									<div class="mx-2 mb-3 text-end">
										<a href="#" class="event-btn">Read More</a>
									</div>
								</div>
							</div>
							<a href="#" type="button" class="events-view">View All <i class="fa-solid fa-angle-right"></i></a>
						</div>
					</div>
					
				</div>
			</div>
		</section>
	</div>
	<!-- =====> End Events <===== -->

	<!-- =====> Start Carousel Partnership <===== -->

	<div class="container partnership">
		<h1>Partnership</h1>
		<div class="separator">
			<div class="line"></div>
		</div>
		<div class="owl-carousel owl-theme" id="partnership-logo">
			<div class="item p-3" id="item"><a href="https://angel-project.eu/" target="_blank"><img src="../../media/Partnership/100px/angel.png"></a></div>
			<div class="item p-3" id="item"><a href="https://rwi.lu.se/" target="_blank"><img src="../../media/Partnership/100px/rwi.png"></a></div>
			<div class="item p-3" id="item"><a href="https://www.accaglobal.com/gb/en.html" target="_blank"><img src="../../media/Partnership/100px/acca.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/ati.png"></a></div>
			<div class="item p-3" id="item"><a href="https://www.cisco.com/site/us/en/index.html" target="_blank"><img src="../../media/Partnership/100px/cisco.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/jnu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/dpu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/hu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/cu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/knu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/ku.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/mara-logo.png"></a></div>
			<div class="item p-3" id="item"><a href="https://www.srru.ac.th/" target="_blank"><img src="../../media/Partnership/100px/SymbolSRRU.gif"></a></div>
			<div class="item p-3" id="item"><a href="https://www.fwd.com.kh/en/" target="_blank"><img src="../../media/Partnership/100px/fwd.jpg"></a></div>
		</div>
	</div>

	<!-- =====> End Carousel Partnership <===== -->
	<?php
	include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
	?>