<?php
$page = 'home';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['page'] = $page;

include_once '../include/header.php';
include_once '../../connection/db.connection.php';
?>
<!-- =====> Start Event <===== -->
<div id="fh5co-blog">
	<div class="container">

		<!-- =====> Start Upcoming Events <===== -->
		<div class="row animate-box fh5co-heading">
			<div class="text-center mt-5">
				<h2 style="color: #002060; font-weight: bold;">LATEST NEWS</h2>
				<span class="d-flex justify-content-center" width="100%" height="100%">
					<img src="../../images/border.png" class="img-fluid icon_img" alt="">
				</span>
				<hr style="color: #002060;">
			</div>
			<p class="mt-5"><a href="upcoming-events.php" style="text-decoration:none; color:#002060;">Upcoming Events | <span style="font-size: 0.75rem; font-weight: 500;">All Events</span></a></p>
		</div>
		<div class="container mb-5" id="upcoming-events">

			<div class="row">
				<?php
				$stmt = $conn->prepare("SELECT * from usea_events WHERE event_status = 'upcoming' ORDER BY event_date DESC limit 4;");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				// echo "<pre>";
				// print_r($result);
				// echo "</pre>";
				foreach ($result as $key => $value) { ?>
					<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 animate-box d-flex mt-auto">
						<div class="fh5co-event item">
							<div class="date text-center">
								<span>
									<?php echo date('d', strtotime($value['event_date'])); ?><br><?php echo date('M', strtotime($value['event_date'])); ?>.
								</span>
							</div>
							<div style="text-align: justify;">
								<div style="height: 3rem;">
									<h3>
										<a href="#"> <?php echo substr($value['event_title_en'], 0, 45) . "..."; ?> </a>
									</h3>
								</div>
								<p><?php echo substr($value['event_description_en'], 0, 100) . "..."; ?></p>
							</div>
							<div style="text-align: right;">
								<a href="#" type="button" class="btn btn-outline-primary"> Read More </a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

<<<<<<< HEAD
			<!-- ==================== -->

=======
>>>>>>> 3b988e678399ae36a0ee0f1c94537d5f9b09edad
			<hr style="color: #002060;">
			<!-- =====> End Upcoming Events <===== -->

			<!-- =====> Start Events <===== -->
			<div class="row animate-box mt-5 mb-5 id=" events">
				<div class="row animate-box fh5co-heading">
					<p style="font-size: 20px; font-weight: bold;">
						<a href="events.php" style="text-decoration: none; color:#002060;"> Events | <span style="font-size: 12px; font-weight: 500;">All Events</span></a>
					</p>
				</div>
				<?php
				$stmt = $conn->prepare("SELECT * from usea_events WHERE event_status = 'past' ORDER BY event_date DESC limit 4;");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				foreach ($result as $key => $value) { ?>
					<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 animate-box d-flex gx-2 gy-2" id="events-card">
						<div class="card">
							<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
								<img src="../../media/events/<?php echo $value['event_cover']; ?>" class="img-fluid" />
								<a href="#!">
									<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
								</a>
							</div>
							<div class="card-body">
								<h5 class="card-title" style="font-size: 1rem; color: #002060;"><?php echo substr($value['event_title_en'], 0, 250) . "..."; ?></h5>
								<p class="card-text"><?php echo substr($value['event_description_en'], 0, 0) ?></p>
							</div>
							<div style="text-align: right;">
								<a href="#" class="btn btn-danger btn-sm">Read More</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<hr style="color: #002060;">
			<!-- =====> End Events <===== -->
		</div>
	</div>
	<!-- =====> End Events <===== -->

	<!-- =====> Start Carousel Partnership <===== -->
	<div class="container mt-5 mb-5">
		<h1 id="partnership">Partnership</h1>
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

		</div>
	</div>
	<!-- =====> End Carousel Partnership <===== -->

	<script>
		$(".carousel").owlCarousel({
			margin: 20,
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				600: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					nav: false
				},
			},
		});
	</script>

	<?php
	include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
	?>