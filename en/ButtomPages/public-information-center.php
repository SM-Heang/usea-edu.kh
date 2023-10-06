<?php
    $page = 'public_information';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['page'] = $page;
    $_SESSION['right'] = 'public-information-center';

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
						<a href="#">Joint Public Information Center</a>
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
				<div class="container title-bg">
					<div class="row title-txt">
					Joint Public Information Center
					</div>
				</div>
				<div class="row">
					<div class="pic-info">
					<div class="pic-image-info">
						<img src="../../media/Library/pic.jpg" alt="" width="100%" height="220px">
					</div>
					<h5>General Description</h5>
					<p>Joint Public Information Center is jointly sponsored partnerships between World Bank (WB), University of South-East Asia (USEA), and Asia Development Bank (ABD).The Joint Public Information Center serves to all students, academic staff and national and international users with many useful resources. We provide access to current, reliable information related to education and all sectors through book collections, the internet, multi-media, periodical collections and local programming.
</p>
					<h5>Our Goal</h5>
					<ul>
						<li>To provide useful and up-to-date resources for all users. PIC is the focal point for 
   providing access to publications, reports, and other development-related 
   materials.</li>
						<li>Online access to World Bank and ADB projects, documents and reports, and</li>
						<li>Access to World Bank and ADB project documents, publications, and other 
  development-related publications;</li>
						<li>Access to a special collections of CDs on development;</li>
						<li>Access to development sites on the Internet;</li>
						<li>An extensive cataloguing in PIC</li>
					</ul>

					<h5>Our Services</h5>
					<ul>
						<li>Provide useful up-to-date resources like books and e-library associated with
  global development–related publications, particularly for teaching, study and
  research in line with the curriculum</li>
						<li>Provide the circulation for free.</li>
						<li>Provide Internet and Wireless Internet for free.Location</li>
						<li>University of South-East Asia Building B (Ground Floor) Watbo Village, Salar
  Kamreok Commune, Siem Reap Municipality, Siem Reap Province. Opposite
  Angkor High School.</li>
					</ul>
					<h5>Working Our</h5>
					<ul>
						<li>Monday to Saturday
							<ul>
								<li>Morning : 7:00 AM to 12:00 PM</li>
								<li>Evening : 2:00 PM to 8:30 PM</li>
							</ul>
						</li>					
						<li>
							Sunday
							<ul>
								<li>Morning : 7:00 AM to 12:00 PM</li>
							</ul>
						</li>
					</ul>
					<h5>Contact US</h5>
					<ul>
						<li>
							Facebook : Joint Public Information Center
						</li>					
						<li>
							081 395 855/012 886 476
						</li>
					</ul>
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




