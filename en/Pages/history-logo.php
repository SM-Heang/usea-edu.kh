<?php 
	$page = 'about';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	$_SESSION['page']= $page;
	$_SESSION['right']= 'history-logo';
	
	include_once '../include/header.php';
	include_once '../../connection/db.connection.php';     
 ?>
	<!-- Start Web Location -->
	<div class="container">
		<div class="row">
			<div class="col-12 web-location">
				<ul>
					<li><a href="index.php">
						<i class="fa-solid fa-house"></i>
						<i class="fa-solid fa-caret-right"></i>
					</a>
					</li>
					<li>
						<a href="#">History & Logo Meaning</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Web Location -->

	<!-- Main Content-->
	<div class="container">
		<div class="row">
			<!-- Start Content-->
			<div class="col-xxl-9 col-xl-9 col-lg-9">
				<div class="container title-bg d-flex justify-content-between align-items-center">
					<div class="row title-txt">
						History & Logo Meaning
					</div>
					<!-- <div class="right-menu-mobile" id="right-menu-mobile">
						<div><i class="fa-solid fa-bars" style="color: #ffffff;"></i></div>
					</div> -->
				</div>
				<!-- <div class="right-content-mobile__about">
						<ul>
							<li><a href="#">History & Logo Meaning</a></li><hr>
							<li><a href="#">President message</a></li><hr>
							<li><a href="#">Vision, Mission & Core Value</a></li><hr>
							<li><a href="#">University Structure</a></li><hr>
							<li><a href="#">Recognition</a></li><hr>
							<li>
								<a href="#">Events <i class="fas fa-caret-down"></i></a>
								<div class="events-mobile">
									<a href="#">Upcoming Events</a>
									<a href="#">Past Events</a>
								</div>
							</li><hr>
							<li><a href="#">Location</a></li><hr>
							<li><a href="#">FAQ</a></li><hr>
						</ul>
				</div> -->
				<div id="content-detail" data-aos="fade-right" data-aos-once="true">
					<h4>History</h4>
					<div class="content-history-detail">
						<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =25");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
						foreach ($result as $key => $value) { ?>
						<p>
							<?php echo $value['article_description_en'];?>
						</p>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

