<?php 
	$page = 'academics';
		if(session_status() === PHP_SESSION_NONE){
			session_start();
		}
		$_SESSION['page'] = 'vision-mission-law';
		$_SESSION['right'] = 'faculty-science-art-human';

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
						<a href="#">Faculty of Arts, Humanities & Education</a>
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
					<div class="row title-text" style="color: white; font-size: 16pt; padding: 5pt;">
					Faculty of Arts, Humanities & Education
					</div>
				</div>
				<div id="content-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =27");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
						<p><?php echo $value['article_description_en'];?></p>
					<?php } ?>


				</div>
			</div>
			<!-- Start Right Content-->
			<?php
				// include_once 'include/right-content.php';
				include_once '../include/right-content-art-human.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

