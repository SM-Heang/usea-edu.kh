<?php 
	include_once 'include/header.php';
	include_once '../connection/db.connection.php';     
 ?>
	<!-- =====> Start Event <===== -->
	<div id="fh5co-blog">
		<div class="container">

			
			<!-- =====> Start Upcoming Events <===== -->
			<div class="row animate-box fh5co-heading ">
				<div class="text-center ">
					<h2 style="color: #002060; font-weight: bold;">LATEST NEWS</h2>
				</div>
				<p><a href="#" style="text-decoration: none; color:#002060;">Upcoming Events | <span style="font-size: 0.75rem; font-weight: 500;">All Events</span></a></p>
			</div>
			
				<div class="container" id="upcoming-events">
					<div class="row">
						<?php  
							$stmt= $conn->prepare("SELECT * from usea_events WHERE event_status = 'upcoming' ORDER BY event_date DESC limit 4;");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 animate-box d-flex" id="upcoming-events-cards">
								<div class="fh5co-event" >

									<div class="date text-center">
										<span>
											<?php echo date('d', strtotime ($value['event_date'])); ?><br><?php echo date('M', strtotime ($value['event_date'])); ?>.
										</span>
									</div>
									<div style="text-align: justify;">
										<div style="height: 3rem;">
											<h3><a href="#"> <?php echo substr($value['event_title_en'], 0, 45). "..."; ?> </a></h3>
										</div>
										<p ><?php echo substr($value['event_description_en'], 0, 100) . "..."; ?></p>										
									</div>
									<div style="text-align: right;">
										<a href="#" type="button" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			
			<!-- =====> End Upcoming Events <===== -->

			<!-- =====> Start Events <===== -->
			<div class="row animate-box" id="events">
				<div class="row animate-box fh5co-heading">
					<p style="font-size: 20px; font-weight: bold;">
						<a href="#" style="text-decoration: none; color:#002060;"> Events | <span style="font-size: 12px; font-weight: 500;">All Events</span></a>
					</p>				
				</div>
				<?php 
					$stmt= $conn->prepare("SELECT * from usea_events WHERE event_status = 'past' ORDER BY event_date DESC limit 4;");
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
					// echo "<pre>";
					// print_r($result);
					// echo "</pre>";
					foreach ($result as $key => $value) { ?>
				<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 animate-box d-flex" id="events-card">
					<!-- <div class="fh5co-blog">
						<div href="#" class="blog-img-holder">
							<img src="media/events/mou_blum_center.jpg" class="img-responsive">
						</div>
						<div class="blog-text">
							<h3><a href="#"></a></h3>
							<p></p>
							<button  class="btn btn-danger" style="font-size: 16px; float: right;"><a href="#" style="text-decoration: none; color:#fff;">Read More</a></button>
						</div> 
						
					</div> -->
					<div class="card" style="background-color: #FFFCF3;">
					  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
					    <img src="../media/events/<?php echo $value['event_cover']; ?>" class="img-fluid"/>
					    <a href="#!">
					      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
					    </a>
					  </div>
					  <div class="card-body">
					    <h5 class="card-title" style="font-size: 1rem; color: #002060;"><?php echo substr($value['event_title_en'], 0, 250) . "...";?></h5>
					    <p class="card-text" ><?php echo substr($value['event_description_en'],0 ,0) ?></p>
					  </div>
					  <div style="text-align: right;">
					  	<a href="#" class="btn btn-danger btn-sm">Read More</a>
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
	<div class="container">
		<h1 id="partnership">Partnership</h1>
		<div class="owl-carousel owl-theme" id="partnership-logo">
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/ati.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/cisco.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/jnu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/dpu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/hu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/cu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/knu.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/100px/ku.png"></a></div>
			<div class="item p-3" id="item"><a href="#"><img src="../media/Partnership/mara-logo.png"></a></div>
		</div>
	</div>
	<!-- =====> End Carousel Partnership <===== -->


	<?php 
		include_once 'include/buttom-content.php';
		include_once 'include/footer.php';
	 ?>
