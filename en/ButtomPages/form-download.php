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
		<div class="row"> 
			<!-- Start Content-->
			<div class="col-xxl-9 mb-5 position-relative">
				<div class="container title-bg">
					<div class="title-txt">
                    	USEA Form Download
					</div>
				</div>
				<div class="container">
					<div class="card__content">
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/download/16.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
							</div>						
						</div>
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/download/16.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
							</div>
						</div>
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/download/16.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
							</div>						
						</div>
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/download/16.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
							</div>						
						</div>
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/download/16.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
							</div>						
						</div>
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/download/16.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
							</div>
						</div>
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/p-13-thesis-cover.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
							</div>						
						</div>
						<div class="card__downlaod">
							<div class="card__download-img">
								<img src="../../media/download/16.png" alt="">
							</div>
							<div class="card__download-text">
								<h6>English book for advance class</h6>
								<p>A million to one by Tony Faggiolli</p>
								<button>Download</button>
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




