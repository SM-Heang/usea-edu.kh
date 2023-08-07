<?php 
	$page = 'academics_kh';
	 if(session_status() === PHP_SESSION_NONE){
		session_start();
	 }
	 $_SESSION['page'] = $page;
	 $_SESSION['right_economic'] = $page;
	 $_SESSION['right'] = 'public-admin-kh';
	 
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
						<a href="#">ថ្នាក់បរិញ្ញាបត្ររង ឯកទេស រដ្ឋបាលសាធារណៈ  </a>
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
				<div class="container" style="background-color:#002060;">
					<div class="row title-text">
						ថ្នាក់បរិញ្ញាបត្ររង ឯកទេស រដ្ឋបាលសាធារណៈ 
					</div>
				</div>
				<div id="content-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =392");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
						<p>
							<?php 
                      			  echo $value['article_description_kh'];
                       		 ?>
						</p>
					<?php } ?>

					<section>
                    <div class="container">
						<div class="nav-header justify-content-center align-items-center px-0 px-lg-5">
							<ul class="nav nav-pills d-block d-lg-flex" id="pills-tab" role="tablist">
								<li class="nav-item mt-0" role="presentation">
									<button class="nav-link active" id="pills-cms-tab" data-bs-toggle="pill" data-bs-target="#pills-cms" type="button" role="tab" aria-controls="pills-cms" aria-selected="false">Core Subjects</button>
								</li>
								<li class="nav-item mt-2 mt-lg-0" role="presentation">
									<button class="nav-link" id="pills-bms-tab" data-bs-toggle="pill" data-bs-target="#pills-bms" type="button" role="tab" aria-controls="pills-bms" aria-selected="false">Basic Major Subjects</button>
								</li>
								<li class="nav-item mt-2 mt-lg-0" role="presentation">
									<button class="nav-link" id="pills-mis-tab" data-bs-toggle="pill" data-bs-target="#pills-mis" type="button" role="tab" aria-controls="pills-mis" aria-selected="false">Minor Subjects</button>
								</li>
								<li class="nav-item mt-2 mt-lg-0" role="presentation">
									<button class="nav-link" id="pills-cex-tab" data-bs-toggle="pill" data-bs-target="#pills-cex" type="button" role="tab" aria-controls="pills-cex" aria-selected="true">Comprehensive Examination</button>
								</li>
							</ul>
						</div>
						
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane show active" id="pills-cms" role="tabpanel" aria-labelledby="pills-cms-tab" tabindex="0">
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =409");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_kh'];
											?>
									</p>
								<?php } ?>
							</div>
							<div class="tab-pane" id="pills-bms" role="tabpanel" aria-labelledby="pills-bms-tab" tabindex="0">
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =413");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_kh'];
											?>
									</p>
								<?php } ?>
							</div>
							<div class="tab-pane" id="pills-mis" role="tabpanel" aria-labelledby="pills-mis-tab" tabindex="0">
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =411");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_kh'];
											?>
									</p>
								<?php } ?>
							</div>
							<div class="tab-pane" id="pills-cex" role="tabpanel" aria-labelledby="pills-cex-tab" tabindex="0">
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =414");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_kh'];
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
				include_once '../include/right-content-laws.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

