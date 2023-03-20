<?php 
	$page = 'about_kh';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$_SESSION['page']= $page;
	$_SESSION['right']= 'structure_kh';
	
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
						<a href="#">University Structure</a>
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
						University Structure
					</div>
				</div>
				<div id="content-detail">
				<h4 class="mt-3">President Message</h4>
					<div class="content-structure-detail">
						<p class="mt-3 mb-5">USEA has the Board of Trustees governing the university for its final decision on academic and administrative matters. 
							The President is the authority in the university assisted by Assistant to the Vice President, advisors, academic board, 
							specialized committee and three Vice Presidents managing the assigned offices. USEA has the Board of Trustees governing 
							the university for its final decision on academic and administrative matters. The President is the authority in the university 
							assisted by Assistant to the Vice President, advisors, academic board, specialized committee and three Vice Presidents managing the assigned offices.</p>
							<hr style="color: #002060;">
						<img src="../../media/image/usea-structure-2022.jpg" class="rounded mx-auto d-block mb-5 mt-5" alt="president photo" width="100%" height="auto">
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

