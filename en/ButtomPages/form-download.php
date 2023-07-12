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
						<a href="#">USEA Form Download</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- End Web Location -->

	<!-- Main Content-->
	<div class="container">
		<div class="row border border-1 border-danger"> 
			<!-- Start Content-->
			<div class="col-xxl-9 mb-5">
				<div class="container" style="background-color:#002060;">
					<div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
                    USEA Form Download
					</div>
				</div>
				<!-- <div class="h-25 border border-1 border-primary mt-4"></div> -->
				<div class="col-12 mt-5 g-sm-5">
					<div class="card F-download-shadow">
					<div class="row g-0">
						<div class="col-md-4 text-center">
							<img src="../../media/logo_update.png" class="img-fluid rounded-start" alt="..." width="200px">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">USEA Logo</h5>
								<p class="card-text">This is our latest updated Logo</p>
								<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
								<a href="../../media/logo_update.png" type="button" target="_blank" class="btn btn-sm event-btn py-1 px-3">Download</a>
							</div>
						</div>
					</div>
					</div>
				</div>

				<div class="col-12 mt-5 g-sm-5">
					<div class="card mb-3 F-download-shadow">
					<div class="row g-0">
						<div class="col-md-4 text-center">
							<img src="../../media/emp_app_form.PNG" class="img-fluid rounded-start" alt="..." width="200px">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Employment Application Form</h5>
								<p class="card-text">This form is used to apply for a university job.</p>
								<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
								<a href="../../media/Application-Form.pdf" type="button" target="_blank" class="btn btn-sm event-btn py-1 px-3">Download</a>
							</div>
						</div>
					</div>
					</div>
				</div>

				<div class="col-12 mt-5 g-sm-5">
					<div class="card mb-3 F-download-shadow">
					<div class="row g-0">
						<div class="col-md-4 text-center">
							<img src="../../media/thesis_slide_p14.png" class="img-fluid rounded-start" alt="..." width="200px">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">Thesis Slide Sample</h5>
								<p class="card-text">This is Slide Sample for P14 </p>
								<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
								<a href="../../media/thesis_slide_sample_p14.pptx" type="button" target="_blank" class="btn btn-sm event-btn py-1 px-3">Download</a>
							</div>
						</div>
					</div>
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




