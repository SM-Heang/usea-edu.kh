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
		<div class="container mb-5" id="upcoming-events"> -->
			<div class="row">
				<!-- <?php
						$stmt = $conn->prepare("SELECT * from usea_events WHERE event_status = 'upcoming' ORDER BY event_date DESC limit 4;");
						$stmt->execute();
						$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
						// echo "<pre>";
						// print_r($result);
						// echo "</pre>";
						foreach ($result as $key => $value) { ?>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 animate-box d-flex mt-auto">
								<div class="fh5co-event">
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
						<?php } ?> -->




						<div class="container text-center my-3">
							<div class="row mx-auto my-auto justify-content-center">
								<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item item_slider active">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img">
														<img src="//via.placeholder.com/500x400/31f?text=1" class="img-fluid">
													</div>
													<div class="card-img-overlay">Slide 1</div>
												</div>
											</div>
										</div>
										<div class="carousel-item item_slider">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img">
														<img src="//via.placeholder.com/500x400/e66?text=2" class="img-fluid">
													</div>
													<div class="card-img-overlay">Slide 2</div>
												</div>
											</div>
										</div>
										<div class="carousel-item item_slider">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img">
														<img src="//via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
													</div>
													<div class="card-img-overlay">Slide 3</div>
												</div>
											</div>
										</div>
										<div class="carousel-item item_slider">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img">
														<img src="//via.placeholder.com/500x400?text=4" class="img-fluid">
													</div>
													<div class="card-img-overlay">Slide 4</div>
												</div>
											</div>
										</div>
										<div class="carousel-item item_slider">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img">
														<img src="//via.placeholder.com/500x400/aba?text=5" class="img-fluid">
													</div>
													<div class="card-img-overlay">Slide 5</div>
												</div>
											</div>
										</div>
										<div class="carousel-item item_slider">
											<div class="col-md-3">
												<div class="card">
													<div class="card-img">
														<img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
													</div>
													<div class="card-img-overlay">Slide 6</div>
												</div>
											</div>
										</div>
									</div>
									<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									</a>
									<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
									</a>
								</div>
							</div>
						</div>






			</div>
		</div>
		<hr style="color: #002060;">
		<!-- =====> End Upcoming Events <===== -->

		<!-- =====> Start Events <===== -->
		<div class="row animate-box mt-5 mb-5" id="events">
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

	
let items = document.querySelectorAll('.carousel .carousel-item item_slider');

items.forEach((el) => {
	const minPerSlide = 4
	let next = el.nextElementSibling
	for (var i = 1; i < minPerSlide; i++) {
		if (!next) {
			// wrap carousel by using first child
			next = items[0]
		}
		let cloneChild = next.cloneNode(true)
		el.appendChild(cloneChild.children[0])
		next = next.nextElementSibling
	}
});


</script>




<?php
include_once '../include/buttom-content.php';
include_once '../include/footer.php';
?>