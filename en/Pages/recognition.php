<?php 
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
						<a href="partnership-local">Recognition</a>
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
                        Recognition
					</div>
				</div>	
				<?php 
					$sql ="SELECT * FROM usea_article WHERE categories_id= 7 AND keywords= 'Accreditaion'";
					$stmt= $conn->prepare($sql);
					$stmt->execute();
				?>
				 
				<div class="mt-2 d-flex">
					<img src="../../media/g1.jpg" width="180px" height="130px">
					<p style="margin-left: 10px; text-align: justify;">Goverment</p>
				</div>
				<a class="btn btn-danger" style="float: right; margin-top: 0px;">Download</a>
				<br><hr class="mt-4">


				<div class="mt-2 d-flex">
					<img src="../../media/m1.jpg" width="200px" height="150px">
					<p style="margin-left: 10px; text-align: justify;">MOEYS</p>
				</div>
				<a class="btn btn-danger" style="float: right; margin-top: 0px;">Download</a>
				<br><hr class="mt-4">


				<div class="mt-2 d-flex">
					<img src="../../media/ACC.jpg" width="180px" height="130px">
					<p style="margin-left: 10px; text-align: justify;">ACC</p>
				</div>
				<a class="btn btn-danger" style="float: right; margin-top: 0px;">Download</a>
				<br><hr class="mt-4">


				<div class="mt-2 d-flex">
					<img src="../../media/AUN.jpg" width="180px" height="130px">
					<p style="margin-left: 10px; text-align: justify;">AUN</p>
				</div>
				<a class="btn btn-danger" style="float: right; margin-top: 0px;">Download</a>
				<br><hr class="mt-4">

			</div>
			<!-- Start Right Content-->
            <div class="col-xxl-3">
				<div class="right-content">
					<ul>
						<li><a href="history-logo.php">History & LOGO Meaning</a></li><br><hr>
						<li><a href="president-message.php">President Message</a></li><br><hr>
						<li><a href="vision-mision-corevalue.php">Vision, Mission & Core Value</a></li><br><hr>
						<li><a href="usea-structure">University Structure</a></li><br><hr>
						<li><a href="#" class="active">Recognition</a></li><br><hr>
						<li><a href="events.php">Events</a></li><br><hr>
						<li><a href="locatin.php">Location</a></li><br><hr>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Content-->

<?php 
	include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
?>

