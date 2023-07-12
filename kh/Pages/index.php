<?php
$page = 'home_kh';
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
		<div class="row animate-box fh5co-heading py-0">
			<div class="text-center mt-5 justify-content-center">
				<h2 class="mt-2 mb-0">ព័ត៌មានថ្មីៗ</h2>
				<!-- <span class="d-flex justify-content-center" width="100%" height="100%">
						<img src="../../images/border.png" class="img-fluid icon_img" alt=""> 
				</span> -->
				<hr style="color: #002060;">
			</div>
			<p class="mt-5"><a href="upcoming-events.php" class="a-news">ព្រឹត្តិការណ៍នាពេលខាងមុខ | <span style="font-size: 0.75rem; font-weight: 500;">ព្រឹត្តិការណ៍ទាំងអស់</span></a></p>
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
										<a href="#"> <?php echo substr($value['event_title_kh'], 0, 45) . "..."; ?> </a>
									</h3>
								</div>
								<p><?php echo substr($value['event_description_kh'], 0, 100) . "..."; ?></p>
							</div>
							<div style="text-align: right;">
								<a href="#" type="button" class="btn btn-sm event-btn text-end py-1 px-3"> អានបន្ថែម </a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<!-- ==================== -->

			<hr style="color: #002060;">
			<!-- =====> End Upcoming Events <===== -->
			<!-- <....................Kh card .....................> -->

			<div class="row mt-5 mb-5 g-3">
				<div class="row fh5co-heading">
					<p>
						<a href="events.php" class="a-news">
							ព្រឹត្តិការណ៍ | <span style="font-size: 12px; font-weight: 500;">ព្រឹត្តិការណ៍ទាំងអស់</span></a>
					</p>
				</div>
				<?php
				$stmt = $conn->prepare("SELECT * from usea_events WHERE event_status = 'past' ORDER BY event_date DESC limit 4;");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				// echo "<pre>";
				// print_r($result);
				// echo "</pre>";
				foreach ($result as $key) { ?>

					<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
						<div class="card w-50 h-100 w-100 animate-card">
							<img src="../../media/events/<?php echo $key['event_cover']; ?>" alt="aquare" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title title-card"><?php echo substr($key['event_title_kh'], 0, 365) . "..."; ?></h5>
							</div>
							<div class="card-footer text-end">
								<a href="event-detail.php?id=<?php echo $key['event_id'] ?>" class="btn btn-sm event-btn text-end py-1 px-3">អានបន្ថែម</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<hr style="color: #002060;">

		</div>
	</div>
	<!-- =====> End Events <===== -->

	<!-- =====> Start Carousel Partnership <===== -->

	<div class="container mt-5 mb-5">
		<h1 id="partnership">ដៃគូរសហការ</h1>
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