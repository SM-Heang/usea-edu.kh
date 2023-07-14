<?php 
	$page = 'academics';
	if(session_status() === PHP_SESSION_NONE){
		session_start();
	}
	$_SESSION['right_economic'] = $page;
	$_SESSION['right'] = 'bachelor-international-relations';

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
					<a href="#">Political Sciences and International Relations</a>
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
					Political Sciences and International Relations
					</div>
				</div>
				<div id="content-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =386");
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
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =401");
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
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =405");
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
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =406");
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
									<!-- <table class="table text-center">
												<thead>
													<th>No</th>
													<th>Subject Description</th>
													<th>Credit</th>
												</thead>
												<tbody class="table-group-divider">
													<tr>
														<td>1</td>
														<td>English Language III</td>
														<td>3</td>
													</tr>
													<tr>
														<td>2</td>
														<td>English Language IV</td>
														<td>3</td>
													</tr>
													<tr>
														<td>3</td>
														<td>English Language V</td>
														<td>3</td>
													</tr>
													<tr>
														<td>4</td>
														<td>English Language VI</td>
														<td>3</td>
													</tr>
													<tr>
														<td>5</td>
														<td>English Language VII</td>
														<td>3</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Chinese Language III</td>
														<td>0</td>
													</tr>
													<tr>
														<td>7</td>
														<td>Chinese Language IV</td>
														<td>0</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Chinese Language V</td>
														<td>0</td>
													</tr>
													<tr>
														<td>9</td>
														<td>Chinese Language VI</td>
														<td>0</td>
													</tr>
													<tr>
														<td>10</td>
														<td>Chinese Language VII</td>
														<td>0</td>
													</tr>
													
												</tbody>

									</table> -->
									<?php
										$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =404");
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
				include_once '../include/right-content-laws.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		// include_once 'include/buttom-content.php';
		include_once '../include/buttom-content.php';

		// include_once 'include/footer.php';
		include_once '../include/footer.php';

	?>

