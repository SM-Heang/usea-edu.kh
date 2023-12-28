<?php
    $page = 'form_download';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'form-download';
    include_once '../include/header.php';
    include_once '../../connection/db.connection.php';
    include_once '../../function.php';
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
						<a href="#">USEA Form Download</a>
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
			<div class="col-xxl-9 mb-5 position-relative">
				<div class="container title-bg">
					<div class="title-txt">
                    	USEA Form Download
					</div>
				</div>
				<div class="container">
					
					<div class="card__content">
						<?php
							$sql = "SELECT * FROM usea_download";
							$result = selectData($conn, $sql);
							// var_dump($result);
							$animationClass = "fade-right"; // Start with "fade-right"
							foreach ($result as $key => $value) {
						?>
						<div class="card__downlaod"  data-aos="<?php echo $animationClass; ?>" data-aos-once="true">
							<div class="card__download-img">
								<img src="../../media/<?php echo $value['img'] ?>" alt="">
							</div>
							<div class="card__download-text">
								<h5><?php echo $value['title_en'] ?></h5>
								<p><?php echo $value['description_en'] ?></p>
								<a href="../../media/<?php echo $value['file_name'] ?>" type="button" download>Download</a>
							</div>						
						</div>
						<?php
							// Toggle the animation class for the next card
							$animationClass = ($animationClass === "fade-right") ? "fade-left" : "fade-right";

							// Check if two cards have been displayed in the current row
							if ($key % 2 !== 0) {
								echo '<div class="row"></div>';
							}
						}
						?>
					</div>
					
				</div>
			</div>

			

			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content-buttom.php';
			?>
		</div>

		<!-- End Main Content-->
		
	</div>
	
	
		


<?php
    include_once '../include/right-content-buttom.php';
    include_once '../include/footer.php';
?>




