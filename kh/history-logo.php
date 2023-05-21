<?php
	include_once '../include/header.php';
	include_once '../include/db.connection.php';
?>
	<!-- Start Web Location -->
	<div class="container">
		<div class="row">
			<div class="col-12 web-location">
				<ul>
					<li><a href="index.html">
						<i class="fa-solid fa-house"></i>
						<i class="fa-solid fa-caret-right"></i>
					</a>
					</li>
					<li>
						<a href="#">History & Logo Meaning test</a>
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
						History & Logo Meaning
					</div>
				</div>
				<div id="content-detail">
					<h4>History</h4>
					<div class="content-history-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_article WHERE article_id =25");
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
					<!-- <h4>LOGO Meaning</h4>
					<div class="content-meaning-detail">
						<img src="media/logo/logo-update.png" alt="USEA LOGO" width="180px" height="180px">
						<ul>
							<li>The picture of the golden rice panicles around the circle symbolizes the university strength, development and sustainabitity.</li>
							<li>The dark blue phrases written in both Khmer and English around the circle and the word USEA with the light blue color on the book symbolize the name of the University of South-East Asia.</li>
							<li>The picture of the light blue globe inside the circle represents fame, national and internaational recognition, and regional and global integration.</li>
							<li>The pictures of the blue hat and spearhead on the book symbolize high quality education and research, resulting in excellent leadership with professional ethics, createivity, social understanding, and commitment to promoting national.</li>
						</ul>
					</div> -->


				</div>
			</div>
			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content.php';
			?>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

