<?php
    $page = 'form_download_kh';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'form-download-kh';
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
						<a href="#">ទាញយកសំណុំបែបបទ​ USEA</a>
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
                    ទាញយកសំណុំបែបបទ​ USEA
					</div>
				</div>
				<!-- <div class="h-25 border border-1 border-primary mt-4"></div> -->
				<div class="row mt-3 g-3 mx-auto card-downloads">
					<div class="col-12">
						<div class="card mb-3 mx-auto F-download-shadow">
							<div class="row g-0">
								<div class="col-5">
									<img src="../../media/logo_update.png" class="img-fluid rounded-start dl-img" alt="usea logo">
								</div>
								<div class="col-7">
									<div class="card-body mt-2 mb-5 text-center">
										<h6 class="card-title fw-bold">ស្លាកសញ្ញាសាកលវិទ្យាល័យ</h6>
									</div>
									<div class="text-end m-3">
										<a href="../../media/logo_update.png" class="btn btn-sm event-btn py-1" download>ទាញយក</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="card mb-3 mx-auto F-download-shadow">
							<div class="row g-0">
								<div class="col-5">
									<img src="../../media/thesis_slide_p14.PNG" class="img-fluid rounded-start dl-img" alt="usea Thesis Slide">
								</div>
								<div class="col-7">
									<div class="card-body mt-2 mb-5 text-center">
										<h6 class="card-title fw-bold">គម្រូស្លាយ</h6>
									</div>
									<div class="text-end m-3">
										<a href="../../media/thesis_slide_sample_p14.pptx" class="btn btn-sm event-btn py-1" download>ទាញយក</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="card mb-3 mx-auto F-download-shadow">
							<div class="row g-0">
								<div class="col-5">
									<img src="../../media/emp_app_form.PNG" class="img-fluid rounded-start dl-img" alt="usea Employment Application Form">
								</div>
								<div class="col-7">
									<div class="card-body mt-2 mb-5 text-center">
										<h6 class="card-title fw-bold">ពាក្យស្នើសុំការងារ</h6>
									</div>
									<div class="text-end m-3">
										<a href="../../media/logo_update.png" class="btn btn-sm event-btn py-1" download>ទាញយក</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Card-Downloads -->
				</div>
				
			</div>

			<!-- End Card-Downloads -->

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




