<?php
    $page = 'form_download';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'form-download';
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
						<a href="#">Form Download</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- End Web Location -->

	<!-- Main Content-->
	<div class="container">
	
		<div class="row"> 
		<hr>
<div class="col-xxl-9">
			<!-- Start Content-->
	<div class="row"> 
		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/logo_update.png" width="150px" height="150px" >
							</figure>
							<h6>USEA Logo</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/logo_update.png" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/p-13-thesis-cover.png" width="100%" height="150px" >
							</figure>
							<h6>Thesis Slide</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/បច្ចេកទេសរៀបចំស្លាយ_និងការពារ_P13_Ok​_070922.pptx" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/logo_update.png" width="150px" height="150px" >
							</figure>
							<h6>USEA Logo</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/logo_update.png" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/logo_update.png" width="150px" height="150px" >
							</figure>
							<h6>USEA Logo</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/logo_update.png" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/logo_update.png" width="150px" height="150px" >
							</figure>
							<h6>USEA Logo</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/logo_update.png" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/logo_update.png" width="150px" height="150px" >
							</figure>
							<h6>USEA Logo</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/logo_update.png" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/logo_update.png" width="150px" height="150px" >
							</figure>
							<h6>USEA Logo</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/logo_update.png" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 pt-2 pb-0 pl-2 pr-2">
			<div class="item">
				<div class="card">
					<div class="img-pro">
						<a href="#" target="_blank" style="text-align: center;">
							<figure class="t-zoom">
								<img class="t-pic" src="../../media/logo_update.png" width="150px" height="150px" >
							</figure>
							<h6>USEA Logo</h6>
						</a>
					</div>
					<div class="card-body text-center" style="background: #002060;padding: .25rem;margin-top: 2%;">
						<a href="../../media/logo_update.png" target="_blank" class="p-2" style="color: white;font-size: 17px;text-decoration: none;">Download</a>
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
		
	</div>
	<!-- End Main Content-->



<?php
    include_once '../include/right-content-buttom.php';
    include_once '../include/footer.php';
?>




