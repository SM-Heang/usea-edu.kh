<?php
	include_once 'include/header.php';
	include_once 'include/db.connection.php';
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
						<a href="#">Vision Mission & Core Value</a>
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
						Vision Mission & Core Value
					</div>
				</div>
				<div id="content-detail">

					<!-- <h4>1. Vision</h4>
					<div class="content-core-value-detail">
						<p>University of South-East Asia will develop human resources with high competency, virtue, and professional attitude in response to national and international labor market, where they can find employment and live in the era of globalization to contribute to the building of society.</p>
					</div>
					<h4>2. Mission</h4>
					<div class="content-core-value-detail">
						<p>University of South-East Asia builds higher education and technical and vocational education systems at all levels in compliance with national and international standards to provide knowledge, know-how, techical skills, soft skills, and professional attitude to learns to meet the needs of national and international labor market.</p>
					</div>
                    <h4>3. Educational Philosophy</h4>
					<div class="content-core-value-detail">
						<p>Your life will be more successful with University of South-East Asia</p>
					</div>
                    <h4>4. Core Value</h4>
					<div class="content-core-value-detail">
						<h4>4.1 Knowledge</h4>
                        <ul>
							<li>Enjoy lifelong learning and research</li>
							<li>Extensive knowledge</li>
							<li>Knowledge of foreign languages that can be used officially</li>
							<li>Self-confidence</li>
						</ul>
                        <h4>4.2 Skills</h4>
                        <ul>
							<li>Able to use information technology proficiently</li>
							<li>Technical Skills</li>
                            <li>Soft Skills</li>
							<li>Innovation and Creativity.</li>
						</ul>
                        <h4>4.3 Excellence</h4>
                        <ul>
							<li>High commitment and responsibility to perform the work</li>
							<li>High commitment and responsibility in teaching</li>
                            <li>High commitment and responsiblity in study and research</li>
							<li>Honesty, virtue, accountability, open communication and teamwork.</li>
						</ul>
					</div>
                    <h4>5. Goal & Objective</h4>
                    <div class="content-core-value-detail">
                        <ul>
							<li>Good management and governance</li>
							<li>Improving the quality of education to national and internation standards</li>
                            <li>Promoting research and development</li>
							<li>Recognition of quality of education nationally and internationally.</li>
						</ul>
                    </div> -->
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
			<div class="col-xxl-3">
				<div class="right-content">
					<ul>
						<li><a href="history-logo.html">History & LOGO Meaning</a></li><br><hr>
						<li><a href="president-message.html">President Message</a></li><br><hr>
						<li><a href="vision-mision-corevalue.html"  class="active">Vision, Mission & Core Value</a></li><br><hr>
						<li><a href="usea-structure.html">University Structure</a></li><br><hr>
						<li><a href="#">Recognition</a></li><br><hr>
						<li><a href="#">Events</a></li><br><hr>
						<li><a href="#">Location</a></li><br><hr>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once 'include/buttom-content.php';
		include_once 'include/footer.php';
	?>

