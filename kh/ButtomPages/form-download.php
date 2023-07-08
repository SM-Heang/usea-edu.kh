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
				<div class="row mt-3 g-3">
					<div class="col-12">
						<div class="card mb-3 F-download-shadow overflow-hidden">
							<div class="row g-0">
								<div class="col-4">
									<img src="../../media/test.png" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-8">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<div class="text-end">
												<a href="" class="btn btn-sm event-btn py-1 px-3">Download</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="card mb-3 F-download-shadow overflow-hidden">
							<div class="row g-0">
								<div class="col-4">
									<img src="../../media/test.png" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-8">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<div class="text-end">
												<a href="" class="btn btn-sm event-btn py-1 px-3">Download</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="card mb-3 F-download-shadow overflow-hidden">
							<div class="row g-0">
								<div class="col-4">
									<img src="../../media/test.png" class="img-fluid rounded-start" alt="...">
								</div>
								<div class="col-8">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<div class="text-end">
												<a href="" class="btn btn-sm event-btn py-1 px-3">Download</a>
										</div>
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




