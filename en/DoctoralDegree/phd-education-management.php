<?php 
	$page = 'academics';
	if(session_status() === PHP_SESSION_NONE){
		session_start();
	}
	$_SESSION['right_post_graduate'] = $page;
	$_SESSION['right'] = 'phd-education-management';

	
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
						<a href="#"> Home > </a>
					</li>
					<li>
					<a href="#"> Academics > </a>
					</li>
					<li>
					<a href="#">Phd Economics </a>
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
			<div class="col-xxl-9">
				<div class="container title-bg">
					<div class="row title-txt">
					Doctoral's Degree in Economics
					</div>
				</div>
				<div id="content-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =497");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
						<p>
                            <?php 
                                 echo $value['article_description_en'];
                            ?>
                        </p>
					<?php } ?>
					<section>
						<div class="container">
							<div class="nav-header justify-content-center align-items-center px-0 px-lg-5">
								<ul class="nav nav-pills d-block d-lg-flex" id="pills-tab" role="tablist">
									<li class="nav-item mt-0" role="presentation">
										<button class="nav-link active" id="pills-y1-tab" data-bs-toggle="pill" data-bs-target="#pills-y1" type="button" role="tab" aria-controls="pills-y1" aria-selected="true">Year One</button>
									</li>
									<li class="nav-item mt-2 mt-lg-0" role="presentation">
										<button class="nav-link" id="pills-y2-tab" data-bs-toggle="pill" data-bs-target="#pills-y2" type="button" role="tab" aria-controls="pills-y2" aria-selected="false">Year Two</button>
									</li>
                                    <li class="nav-item mt-2 mt-lg-0" role="presentation">
										<button class="nav-link" id="pills-y3-tab" data-bs-toggle="pill" data-bs-target="#pills-y3" type="button" role="tab" aria-controls="pills-y3" aria-selected="false">Year Three</button>
									</li>									
								</ul>
							</div>
							
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane show active" id="pills-y1" role="tabpanel" aria-labelledby="pills-y1-tab" tabindex="0">
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =498");
										$stmt->execute();
										$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
										// echo "<pre>";
										// print_r($result);
										// echo "</pre>";
										foreach ($result as $key => $value) { ?>
										<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
										<p>
											<?php
												echo $value['article_description_en'];
												?>
										</p>
									<?php } ?>
								</div>
								<div class="tab-pane" id="pills-y2" role="tabpanel" aria-labelledby="pills-y2-tab" tabindex="0">
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =499");
										$stmt->execute();
										$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
										// echo "<pre>";
										// print_r($result);
										// echo "</pre>";
										foreach ($result as $key => $value) { ?>
										<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
										<p>
											<?php
												echo $value['article_description_en'];
												?>
										</p>
									<?php } ?>
								</div>
                                <div class="tab-pane" id="pills-y3" role="tabpanel" aria-labelledby="pills-y3-tab" tabindex="0">
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =500");
										$stmt->execute();
										$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
										// echo "<pre>";
										// print_r($result);
										// echo "</pre>";
										foreach ($result as $key => $value) { ?>
										<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
										<p>
											<?php
												echo $value['article_description_en'];
												?>
										</p>
									<?php } ?>
								</div>												
							</div>
						</div>
					</section>

				</div>
			</div>
			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content-post-graduate.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

