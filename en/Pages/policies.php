<?php
    $page = 'policies';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'policies-private';
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
						<a href="#">Policies</a>
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
			<div class="col-xxl-12">
				<div class="container" style="background-color:#002060;">
					<div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
                    Policies
					</div>
				</div>
				<div class="container">
					<div class="row">
						<?php
							$sql = "SELECT * FROM usea_policies";
							$result = selectData($conn, $sql);
							// var_dump($result);
							foreach($result as $key => $value){
						?>
						<div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 mb-sm-2 mb-lg-2 mb-xxl-0" id="events-card">
							<div class="card mt-3 mb-3 animate-card">
								<img src="../../media/policies/cover/<?php echo $value['image']; ?>" alt="aquare" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo substr($value['policies_title_en'], 0, 140) . "..."; ?></h5>
								</div>
								<div class="card-footer text-center p-1">
									<a href="policies-detail.php?id=<?php echo $value['id'] ?>" class="btn btn-sm event-btn w-50 py-1 px-3">View Document</a>
								</div>
							</div>
						</div>
						<?php } ?>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Content-->




<?php
    include_once '../include/footer.php';
?>




