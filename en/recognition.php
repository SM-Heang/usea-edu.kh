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
						<a href="#">Recognition</a>
					</li>
				</ul>
            
			</div>
		</div>
	</div>
	<!-- End Web Location -->
	<!-- Main Content-->
	<div class="container">
		<div class="row">
			<div class="container" style="background-color:#002060;">
					<div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
						Recognition
					</div>
			</div>
			<?php  
							$stmt= $conn->prepare("SELECT * from usea_partnership ORDER BY signed_date DESC limit 4;");
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
						
			<!-- Start Content-->
			<div class="col-xxl-12 d-flex mt-2">
				<img src="media/Partnership/<?php echo $value['partnership_logo']; ?>" alt="" width="175px" height="130px">
                <div >
				<p><?php echo $value['partnership_title_en'];?></p>
                    <button class="btn btn-danger text-white float-end" >Download</button>
                </div>
                <hr>
			</div>
		<?php } ?>
	<!-- End Main Content-->
<?php 
	include_once 'include/buttom-content.php';
	include_once 'include/footer.php';
?>

