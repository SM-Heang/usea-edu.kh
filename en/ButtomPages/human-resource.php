<?php
    $page = 'human_resource';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'human-resource';
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
						<a href="#">Human Resource</a>
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
						Human Resource
					</div>
				</div>
				<div class="col-xxl-12">
					<div class="human-resource mt-3 d-flex">
						<div class="img" data-aos="fade-right" data-aos-once="true">
							<img src="../../media/human-resource/dr.meansothy.jpg" alt="" width="200px">
						</div>
						<div class="info" data-aos="fade-left" data-aos-once="true">
							<span>Dr.Mean Sothy</span><br>
							<span>President</span><br>
							<a href="#">meansothy@usea.edu.kh</a>
						</div>
					</div>
					<hr style="color: #002060;">
					<div class="human-resource mt-3 d-flex">
						<div class="img" data-aos="fade-right" data-aos-once="true">
							<img src="../../media/human-resource/mr.jivreaksmey.jpg" alt="" width="200px">
						</div>
						<div class="info" data-aos="fade-left" data-aos-once="true">
							<span>Mr.Jiv Reaksmey</span><br>
							<span>Vice President</span><br>
							<p>Administration, Finance, Information Technology, Marketing </p>
							<a href="#">jivreaksmey@usea.edu.kh</a>
						</div>
					</div>
					<hr style="color: #002060;">
					<div class="human-resource mt-3 d-flex">
						<div class="img" data-aos="fade-right" data-aos-once="true">
							<img src="../../media/human-resource/dr.yoeungsothan.jpg" alt="" width="200px">
						</div>
						<div class="info" data-aos="fade-left" data-aos-once="true">
							<span>Dr.Yoeung Sothan</span><br>
							<span>Vice President</span><br>
							<p>Faculty of Economics, Business and Tourism, Postgraduate Programs</p>
							<a href="#">sothan_yoeung@usea.edu.kh</a>
						</div>
					</div>
					<hr style="color: #002060;">
					<div class="human-resource mt-3 d-flex">
						<div class="img" data-aos="fade-right" data-aos-once="true">
							<img src="../../media/human-resource/mr.tatbunseang.jpg" alt="" width="200px">
						</div>
						<div class="info" data-aos="fade-left" data-aos-once="true">
							<span>Tat Bunseang</span><br>
							<span>Vice Dean</span><br>
							<p>Director of Information Technology Center</p>
							<a href="#">tatbunseang@usea.edu.kh</a>
						</div>
					</div>
					<hr style="color: #002060;">
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

    include_once '../include/footer.php';
?>




