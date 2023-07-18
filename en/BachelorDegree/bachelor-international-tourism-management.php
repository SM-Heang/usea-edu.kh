<?php 
	$page = 'academics';
	if(session_status() === PHP_SESSION_NONE){
		session_start();
	}
	$_SESSION['right_economic'] = $page;
	$_SESSION['right'] = 'bachelor-international-tourism-management';

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
					<a href="#"> International Tourism Management </a>
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
					<div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
					Bachelor's Degree in International Tourism Management
					</div>
				</div>
				<div id="content-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =438");
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
							<div class="nav-header ml-5">
								<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="pills-ges-tab" data-bs-toggle="pill" data-bs-target="#pills-ges" type="button" role="tab" aria-controls="pills-ges" aria-selected="true">General Education Subjects</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-cms-tab" data-bs-toggle="pill" data-bs-target="#pills-cms" type="button" role="tab" aria-controls="pills-cms" aria-selected="false">Core Major Subjects</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-bms-tab" data-bs-toggle="pill" data-bs-target="#pills-bms" type="button" role="tab" aria-controls="pills-bms" aria-selected="false">Basic Major Subjects</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-mis-tab" data-bs-toggle="pill" data-bs-target="#pills-mis" type="button" role="tab" aria-controls="pills-mis" aria-selected="false">Minor Subjects</button>
									</li>
								</ul>
							</div>
							
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane show active" id="pills-ges" role="tabpanel" aria-labelledby="pills-ges-tab" tabindex="0">
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =439");
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
								<div class="tab-pane" id="pills-cms" role="tabpanel" aria-labelledby="pills-cms-tab" tabindex="0">
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =440");
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
								<div class="tab-pane" id="pills-bms" role="tabpanel" aria-labelledby="pills-bms-tab" tabindex="0">
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =441");
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
								<div class="tab-pane" id="pills-mis" role="tabpanel" aria-labelledby="pills-mis-tab" tabindex="0">
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =419");
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
				include_once '../include/right-content-economic.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

