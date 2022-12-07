<?php 
	include_once 'include/header.php';
	include_once '../connection/db.connection.php';     
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
						<a href="partnership-local">Partnership</a>
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
						Partnership
					</div>
				</div>
				<div id="content-detail">
					<div class="content-president-detail">
					<?php  
							$stmt= $conn->prepare("SELECT * from usea_partnership WHERE partnership_type = 'international' ORDER BY signed_date DESC limit 8;");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<div class="col-xxl-12 d-flex mt-3 ">
							<img src="../media/Partnership/<?php echo $value['partnership_logo']; ?>" alt="" width="125px" height="100px" >
                            <hr>
								<p><?php echo $value['partnership_title_en'];?></p>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- Start Right Content-->
			<div class="col-xxl-3">
				<div class="right-content">
					<ul>
						<li><a href="partnership-local.php">Local</a></li><br><hr>
						<li><a href="partnership-international" class="active">International</a></li><br><hr>
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

