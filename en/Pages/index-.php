<?php
$page = 'home';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['page'] = $page;
$_SESSION['right'] = 'home';


include_once '../include/header.php';
include_once '../../connection/db.connection.php';
include_once '../../function.php';
?>
<!-- =====> Start Event <===== -->
<div id="fh5co-blog">
	<section class="messages">
		<div class="container">
			<h1 class="text-center mt-5">PRESIDENT'S MESSAGE</h1>
			<div class="separator">
					<div class="line"></div>
				</div>
			<div class="message__content">
				<div class="message__detail d-flex">
					<img src="../../media/dr-meansothy.png" alt="president" width="560px" height="620px">
					<p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus id quo repudiandae labore beatae quia hic laudantium reprehenderit dolorem omnis tenetur nihil, ad voluptatibus officia ullam unde quisquam dolor reiciendis illum molestiae consectetur ipsam minus consequatur? Inventore, optio maiores. Laudantium placeat, ducimus eaque cum molestias fuga voluptatum debitis impedit voluptatem perspiciatis voluptate ab, iure corrupti voluptas nihil minima aspernatur. Doloribus recusandae, numquam sint tempora soluta architecto ratione suscipit aut ad quasi. Nisi, delectus est esse ex enim non magnam! Beatae quos optio nesciunt deserunt velit cumque similique animi ex nihil facere saepe rem officia mollitia tenetur expedita assumenda, nostrum debitis, minima error maxime quo nam sunt quia! Praesentium, voluptas sit ratione consequuntur ullam vitae sed expedita ipsam rem voluptatibus. Nisi, tenetur ex! Saepe, magnam beatae enim tempora, quae aut placeat officia voluptate autem sit non esse natus est quia delectus obcaecati cum commodi quibusdam ex at? Sequi quod non aliquid enim quos iure blanditiis incidunt ab? Necessitatibus voluptate, deleniti eveniet architecto tenetur tempore labore quo repudiandae voluptatibus illo ratione officia culpa. Dolore, pariatur possimus! Corrupti minus, delectus cumque, accusantium et sint sit dolore voluptatum temporibus, id ex! Esse praesentium eos repudiandae tempore error voluptates harum illo laudantium omnis. Suscipit, ipsa!”</p>
				</div>
				<span>Dr. Mean Sothy</span>
				<span>President of University of South-East Asia</span>
			</div>
			
		</div>
	</section>
	<section class="faculty" id="faculty">
		<div class="container">
			<h1 class="text-center mt-5">FACULTY & INSTITUTE</h1>
			<div class="separator">
				<div class="line"></div>
			</div>
			<div class="faculty-row" >
				<a href="#" class="faculty-links">
					<img src="../../media/nav-icon/f-economic.png" alt="">
					<span>Faculty of Economics, Business & Tourism</span> 
				</a>
				<a href="#" class="faculty-links">
					<img src="../../media/nav-icon/f-internation-college.png" alt=""> 
					<span href="#">International College</span>
				</a>
				<a href="#" class="faculty-links">
					<img src="../../media/nav-icon/f-it.png" alt=""> 
					<span href="#">Faculty of Science and Technology</span>
				</a>
				<a href="#" class="faculty-links">
					<img src="../../media/nav-icon/fli.png" alt=""> 
					<span href="#">Foreign Language Institute</span>
				</a>
				<a href="#" class="faculty-links">
					<img src="../../media/nav-icon/f-law.png" alt=""> 
					<span href="#">Faculty of Social Science and Law</span>
				</a>
				<a href="#" class="faculty-links">
				<img src="../../media/nav-icon/post-graduate.png" alt=""> 
					<span href="#">Post Graduate</span>
				</a>
				<a href="#" class="faculty-links">
					<img src="../../media/nav-icon/f-art.png" alt=""> 
					<span href="#">Faculty of Arts, Humanities and Education</span>
				</a>
			</div>
		</div>
	</section>


	<!-- Event & Announcement -->
	
		<section class="events mt-5" id="events">
			<div class="container">
					<h1 class="text-center mt-5">EVENT & ANNOUNCEMENT</h1>
					<div class="separator">
						<div class="line"></div>
					</div>
					<div class="nav-header d-flex justify-content-center align-items-center px-0 px-lg-4 mb-3 gx-3">
						<ul class="nav nav-pills d-block d-flex" id="pills-tab" role="tablist">
							<li class="nav-item mt-0" role="presentation">
								<button class="nav-link active" id="pills-ges-tab" data-bs-toggle="pill" data-bs-target="#pills-ges" type="button" role="tab" aria-controls="pills-ges" aria-selected="true">Announcement</button>
							</li>
							<li class="nav-item mt-2 mt-lg-0" role="presentation">
								<button class="nav-link" id="pills-cms-tab" data-bs-toggle="pill" data-bs-target="#pills-cms" type="button" role="tab" aria-controls="pills-cms" aria-selected="false">Upcoming Events</button>
							</li>
							<li class="nav-item mt-2 mt-lg-0" role="presentation">
								<button class="nav-link" id="pills-bms-tab" data-bs-toggle="pill" data-bs-target="#pills-bms" type="button" role="tab" aria-controls="pills-bms" aria-selected="false">Past Events</button>
							</li>									
						</ul>
					</div>
					
					<div class="tab-content mt-3" id="pills-tabContent">
						<div class="tab-pane show active" id="pills-ges" role="tabpanel" aria-labelledby="pills-ges-tab" tabindex="0">
							<div class="cards-wrapper d-flex">
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card" >
										<img src="../../media/events/Environment 20143.JPG" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/Maha Sarakham Visit 02-Mar-20155.JPG" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/Preah Vihea trip 201410_s.jpg" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class=" mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/MOU-with-Korea1_s.jpg" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								
							</div>
							<a href="#" type="button" class="events-view">View All <i class="fa-solid fa-angle-right"></i></a>
						</div>
						
						<div class="tab-pane" id="pills-cms" role="tabpanel" aria-labelledby="pills-cms-tab" tabindex="0">
							<div class="cards-wrapper d-flex">
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card" >
										<img src="../../media/events/Environment 20143.JPG" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/Maha Sarakham Visit 02-Mar-20155.JPG" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/Preah Vihea trip 201410_s.jpg" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class=" mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/MOU-with-Korea1_s.jpg" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<a href="#" type="button" class="events-view">View All <i class="fa-solid fa-angle-right"></i></a>
						</div>
						<div class="tab-pane" id="pills-bms" role="tabpanel" aria-labelledby="pills-bms-tab" tabindex="0">
							<div class="cards-wrapper d-flex">
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card" >
										<img src="../../media/events/Environment 20143.JPG" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/Maha Sarakham Visit 02-Mar-20155.JPG" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/Preah Vihea trip 201410_s.jpg" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class=" mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
									<div class="card h-100 animate-card custom-card">
										<img src="../../media/events/MOU-with-Korea1_s.jpg" alt="aquare" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
											<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
										</div>
										<div class="mx-2 mb-3 text-end">
											<a href="#" class="event-btn">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<a href="#" type="button" class="events-view">View All <i class="fa-solid fa-angle-right"></i></a>
						</div>													
					</div>
			</div>
		</section>
	<!-- =====> End Events <===== -->
	<!-- Career Center  -->
<section class="career-center" id="career-center">
	<div class="container mt-5 mb-5">
		<h1 class="text-center mt-5">
			Career Center
		</h1>
		<div class="separator">
				<div class="line"></div>
			</div>
		<div class="row">
    <div class="col-xxl-8 career-center-info">
        <p>Career Center is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
        <div class="career-center-social">
            <span>Join US</span>
            <ul>
                <li><a href="https://www.facebook.com/useacareercenter" target="_blank"><img src="../../media/nav-icon/facebook.png" alt="facebook-icon"></a></li>
                <li><a href="https://t.me/useacareercenter" target="_blank"><img src="../../media/nav-icon/telegram.png" alt="telegram-icon"></a></li>
            </ul>
        </div>
    </div>
    <div class="col-xxl-4 career-center-image">
        <a href="#"><img src="../../media/career-center-logo.png" alt="faq" width="400px" height="400px"></a>
    </div>
</div>

	</div>
</section>

	<!-- =====> Start Carousel Partnership <===== -->
	<section class="partnerships" id="partnerships">
		<div class="container mt-5 mb-5">
			<h1 class="text-center mt-5">PARTNERSHIP</h1>
			<div class="separator">
				<div class="line"></div>
			</div>
			<div class="owl-carousel owl-theme" id="partnership-logo">
				<div class="d-flex item p-3" id="item">
					<a href="https://angel-project.eu/" target="_blank">
						<div class="partnership-logo">
							<img src="../../media/Partnership/100px/angel.png">
							<span>Angel Project</span>
						</div>
					</a>
				</div>
				<div class="d-flex item p-3" id="item">
					<a href="https://rwi.lu.se/" target="_blank">
						<div class="partnership-logo">
							<img src="../../media/Partnership/100px/rwi.png">
							<span>Raoul Wallenberg Institute</span>
						</div>
					</a>
				</div>
				<div class="d-flex item p-3 align-items-center" id="item">
					<a href="https://www.cisco.com/site/us/en/index.html" target="_blank">
						<div class="partnership-logo">
							<img src="../../media/Partnership/100px/acca.png">
							<span>ACCA Cambodia</span>
						</div>
					</a>
				</div>
				<!-- <div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/ati.png"></a></div> -->
				<div class="d-flex item p-3 align-items-center" id="item">
					<a href="https://www.cisco.com/site/us/en/index.html" target="_blank">
						<div class="partnership-logo">
							<img src="../../media/Partnership/100px/cisco.png">
							<span>Cisco Networking Academy</span>
						</div>
					</a>
				</div>
				<!-- <div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/jnu.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/dpu.png"></a></div> -->
				<div class="d-flex item p-3 align-items-center" id="item">
					<a href="https://www.cisco.com/site/us/en/index.html" target="_blank">
						<div class="partnership-logo">
							<img src="../../media/Partnership/100px/hu.png">
							<span>Hyupsung University</span>
						</div>
					</a>
				</div>
				<!-- <div class="d-flex  item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/cu.png"></a></div> -->
				<div class="d-flex item p-3 align-items-center" id="item">
					<a href="https://www.cisco.com/site/us/en/index.html" target="_blank">
						<div class="partnership-logo">
							<img src="../../media/Partnership/100px/knu.png">
							<span>Kunsan National University</span>
						</div>
					</a>
				</div>
				<!-- <div class="d-flex  item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/ku.png"></a></div> -->
				<!-- <div class="d-flex  item p-3" id="item"><a href="#"><img src="../../media/Partnership/mara-logo.png"></a></div> -->
				<!-- <div class="d-flex  item p-3" id="item"><a href="https://www.srru.ac.th/" target="_blank"><img src="../../media/Partnership/100px/SymbolSRRU.gif"></a></div> -->
				<div class="d-flex item p-3 align-items-center" id="item">
					<a href="https://www.cisco.com/site/us/en/index.html" target="_blank">
						<div class="partnership-logo">
							<img src="../../media/Partnership/100px/fwd.jpg">
							<span>FWI Insurance</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- =====> End Carousel Partnership <===== -->
	<section class="faq" id="faq">
		<div class="container">
			<h1 class="text-center mt-5">Frequently Ask Question</h1>
			<div class="separator">
				<div class="line"></div>
			</div>
			<div class="row">
				<div class="col-xxl-6 faq-image">
					<img src="../../media/faq1.png" alt="faq">
				</div>
				<div class="col-xxl-6 faq-accordion">
					<ul>
						<li>
							<label for="first">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="first">
							<div class="contents">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor aperiam ipsa accusantium mollitia voluptate veritatis. Aut eveniet quidem minima, ratione quibusdam quisquam? Culpa eius harum id sit eos pariatur.
							</div>
						</li>
						<li>
							<label for="second">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="second">
							<div class="contents">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor aperiam ipsa accusantium mollitia voluptate veritatis. Aut eveniet quidem minima, ratione quibusdam quisquam? Culpa eius harum id sit eos pariatur.
							</div>
						</li>
						<li>
							<label for="third">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="third">
							<div class="contents">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor aperiam ipsa accusantium mollitia voluptate veritatis. Aut eveniet quidem minima, ratione quibusdam quisquam? Culpa eius harum id sit eos pariatur.
							</div>
						</li>
						<li>
							<label for="fourth">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="fourth">
							<div class="contents">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor aperiam ipsa accusantium mollitia voluptate veritatis. Aut eveniet quidem minima, ratione quibusdam quisquam? Culpa eius harum id sit eos pariatur.
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<script>
		$(".carousel").owlCarousel({
			margin: 20,
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				600: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					nav: false
				},
			},
		});
	</script>

	<?php
	// include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
	?>