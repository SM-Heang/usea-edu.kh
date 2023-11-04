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
			<div class="text-center">
				<h2 style="color: #002060; font-weight: bold;">LATEST NEWS</h2>
				<span class="d-flex justify-content-center" width="100%" height="100%">
				</span>
			</div>
			<p><a href="upcoming-events.php" style="text-decoration:none; color:#002060;">Upcoming Events | <span style="font-size: 0.75rem; font-weight: 500;">All Events</span></a></p>
		</div>
		
		<div class="container mb-5" id="upcoming-events">
			<!-- =====> Start Upcoming Events <===== -->
			<div class="row">
				<?php
				$sql = ("SELECT event_id, event_title_en, event_date, event_cover, event_description_en, usea_event_status.event_status_en, event_style, tags from usea_events, usea_event_status WHERE usea_events.event_status = usea_event_status.status_id AND event_status = '2' ORDER BY event_date DESC limit 4");
				$result = selectData($conn, $sql);
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
								<a href="#" type="button" class="btn btn-sm event-btn py-1 px-3"> Read More </a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<!-- ==================== -->
			<!-- =====> End Upcoming Events <===== -->

			<!-- =====> Start Events <===== -->
			<div class="row mt-5 mb-5 g-3" id=" events">
				<div class="row">
					<p style="font-size: 20px; font-weight: bold;">
						<a href="events.php" style="text-decoration: none; color:#002060;"> Events | <span style="font-size: 12px; font-weight: 500;">All Events</span></a></a>
					</p>
				</div>
				<?php
				$sql = ("SELECT event_id, event_title_en, event_date, event_cover, event_description_en, usea_event_status.event_status_en, event_style, tags from usea_events, usea_event_status WHERE usea_events.event_status = usea_event_status.status_id AND event_status = '1' ORDER BY event_date DESC limit 4");
				$result = selectData($conn, $sql);
				foreach ($result as $key => $value) { ?>
					<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
						<div class="card w-50 h-100 w-100 animate-card">
							<img src="../../media/events/<?php echo $value['event_cover']; ?>" alt="aquare" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title"><?php echo substr($value['event_title_en'], 0, 140) . "..."; ?></h5>
								<p class="card-text"><?php echo substr($value['event_description_en'], 0, 240) ?></p>
							</div>
							<div class="card-footer text-end">
								<a href="event-detail.php?id=<?php echo $value['event_id'] ?>" class="btn btn-sm event-btn text-end py-1 px-3">Read More</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
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
			<div class="item p-3" id="item"><a href="https://www.srru.ac.th/" target="_blank"><img src="../../media/Partnership/100px/SymbolSRRU.gif"></a></div>
			<div class="item p-3" id="item"><a href="https://www.fwd.com.kh/en/" target="_blank"><img src="../../media/Partnership/100px/fwd.jpg"></a></div>
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