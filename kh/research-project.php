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
						<a href="#">Research Project</a>
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
					<div class="row" style="color: white; font-size: 16pt; padding: 5px;">
						Research Project
					</div>
				</div>
				<div>
					<img src="media/events/1(76).jpg" alt="" width="175px" height="130px">
					<div >
					<p></p>
						<button class="btn btn-danger text-white float-end" >Download</button>
					</div>
					<hr>
				</div>
			</div>
			<!-- Start Right Content-->
			<div class="col-xxl-3">
				<div class="right-content">
					<ul>
						<li><a href="#">Research Policy and Procedure</a></li><br><hr><br><hr>
						<li><a href="#">Research Team</a></li><br><hr>
						<li><a href="#">Research Activities</a></li><br><hr>
						<li><a href="#">Publication</a></li><br><hr>
						<li><a href="research-project.php" class="active">Research Project</a></li><br><hr>
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