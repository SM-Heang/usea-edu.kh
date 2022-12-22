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
						<a href="faculty-economics.php">Economic, Business & Tourism</a>
					</li>
				</ul>
            
			</div>
		</div>
	</div>
	<!-- End Web Location -->
	<!-- Main Content-->
	<div class="container">
		<div class="row">
			
			<!-- Start Right Content-->
			<?php 
				include_once 'include/right-content-economic.php';
			 ?>
		</div>


	</div>
	<!-- End Main Content-->
<?php 
	include_once 'include/buttom-content.php';
	include_once 'include/footer.php';
?>

