<?php 
	// $page = 'about';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	// $_SESSION['page']= $page;
	// $_SESSION['right']= 'history-logo';
	
	include_once '../include/header.php';
	include_once '../../connection/db.connection.php';     
 ?>
<?php
            $id = $_GET['article_id'];
            $sql = "SELECT * FROM usea_article WHERE article_id = '$id' ";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $temp = $stmt->fetch(PDO::FETCH_ASSOC);
?>​
	<!-- Start Web Location -->
	<div class="container">
		<div class="row">
			<div class="col-12 web-location">
				<ul>
					<li>
						<a href="index.php">
							<i class="fa-solid fa-house"></i>
							<i class="fa-solid fa-caret-right"></i>
						</a>
					</li>
					<li>
						<a href="#"><?php echo $temp['article_title_en']?></a>
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
          				<?php echo $temp['article_title_en']?>
					</div>
				</div>
				<div id="content-detail">
					<div class="content-history-detail">
						<p>
							<?php echo $temp['article_description_en'];?>
						</p>
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
