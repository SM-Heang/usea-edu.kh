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
	<section class="faculty">
		<div class="container">
			<h1 class="text-center mt-5">FACULTY & INSTITUTE</h1>
			<div class="faculty-row" >
				<div class="faculty-links">
					<img src="../../media/nav-icon/f-economic.png" alt="">
					<a href="#">Faculty of Economics, Business & Tourism </a>
					 
				</div>
				<div class="faculty-links">
					<img src="../../media/nav-icon/f-internation-college.png" alt=""> 
					<a href="#">International College</a>
				</div>
				<div class="faculty-links">
					<img src="../../media/nav-icon/f-it.png" alt=""> 
					<a href="#">Faculty of Science and Technology</a>
				</div>
				<div class="faculty-links">
					<img src="../../media/nav-icon/fli.png" alt=""> 
					<a href="#">Foreign Language Institute</a>
				</div>
				<div class="faculty-links">
					<img src="../../media/nav-icon/f-law.png" alt=""> 
					<a href="#">Faculty of Social Science and Law</a>
				</div>
				<div class="faculty-links">
				<img src="../../media/nav-icon/post-graduate.png" alt=""> 
					<a href="#">Post Graduate</a>
				</div>
				<div class="faculty-links">
					<img src="../../media/nav-icon/f-art.png" alt=""> 
					<a href="#">Faculty of Arts, Humanities and Education</a>
				</div>
			</div>
		</div>
	</section>
	<section class="events">
		<div class="container">
			<h1 class="text-center">EVENTS & ANNOUNCEMENTS</h1>
			<div class="tab__events">
				<div class="tabs">
					<a class="tabs-links active">Past Events</a>
					<a class="tabs-links">Upcoming Events</a>
					<a class="tabs-links">Announcement</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
						<div class="card h-100 animate-card">
							<img src="../../media/events/Environment 20143.JPG" alt="aquare" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
							</div>
							<div class="card-footer text-end">
								<a href="#" class="btn btn-sm event-btn text-end py-1 px-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
						<div class="card h-100 animate-card">
							<img src="../../media/events/Maha Sarakham Visit 02-Mar-20155.JPG" alt="aquare" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
							</div>
							<div class="card-footer text-end">
								<a href="#" class="btn btn-sm event-btn text-end py-1 px-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
						<div class="card h-100 animate-card">
							<img src="../../media/events/Preah Vihea trip 201410_s.jpg" alt="aquare" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
							</div>
							<div class="card-footer text-end">
								<a href="#" class="btn btn-sm event-btn text-end py-1 px-3">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-xxl-3 mb-sm-2 mb-lg-2 mb-xxl-0">
						<div class="card h-100 animate-card">
							<img src="../../media/events/MOU-with-Korea1_s.jpg" alt="aquare" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam accusamus, fugiat non magnam aspernatur maiores!</p>
							</div>
							<div class="card-footer text-end">
								<a href="#" class="btn btn-sm event-btn text-end py-1 px-3">Read More</a>
							</div>
						</div>
					</div>
					
				</div>
				<a href="#" type="button">View All  <i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></a>
			</div>
		</div>
	</section>
	

	<!-- =====> End Events <===== -->

<section class="career-center">
	<div class="container mt-5 mb-5">
		<h1 class="text-center mt-5">
			Career Center
		</h1>
		<div class="row">
    <div class="col-xxl-8 career-center-info">
        <p>Career Center is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
        <div class="career-center-social">
            <span>Join US</span>
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="col-xxl-4 career-center-image">
        <img src="../../media/career-center-logo.png" alt="faq" width="400px" height="400px">
    </div>
</div>

	</div>
</section>

	<!-- =====> Start Carousel Partnership <===== -->

	<section class="partnerships">
		<div class="container mt-5 mb-5">
			<h1 class="text-center mt-5">PARTNERSHIP</h1>
			<div class="owl-carousel owl-theme" id="partnership-logo">
				<div class="item p-3" id="item"><a href="https://angel-project.eu/" target="_blank"><img src="../../media/Partnership/100px/angel.png"></a></div>
				<div class="item p-3" id="item"><a href="https://rwi.lu.se/" target="_blank"><img src="../../media/Partnership/100px/rwi.png"></a></div>
				<div class="item p-3" id="item"><a href="https://www.accaglobal.com/gb/en.html" target="_blank"><img src="../../media/Partnership/100px/acca.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/ati.png"></a></div>
				<div class="item p-3" id="item"><a href="https://www.cisco.com/site/us/en/index.html" target="_blank"><img src="../../media/Partnership/100px/cisco.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/jnu.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/dpu.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/hu.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/cu.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/knu.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/100px/ku.png"></a></div>
				<div class="item p-3" id="item"><a href="#"><img src="../../media/Partnership/mara-logo.png"></a></div>
				<div class="item p-3" id="item"><a href="https://www.srru.ac.th/" target="_blank"><img src="../../media/Partnership/100px/SymbolSRRU.gif"></a></div>
				<div class="item p-3" id="item"><a href="https://www.fwd.com.kh/en/" target="_blank"><img src="../../media/Partnership/100px/fwd.jpg"></a></div>
			</div>
		</div>
	</section>

	<!-- =====> End Carousel Partnership <===== -->
	<section class="faq">
		<div class="container">
			<h1 class="text-center mt-5 mb-5">Frequently Ask Question</h1>
			<div class="row">
				<div class="col-xxl-6 faq-image">
					<img src="../../media/faq1.png" alt="faq">
				</div>
				<div class="col-xxl-6 faq-accordion">
					<ul>
						<li>
							<label for="first">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="first">
							<div class="content">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor aperiam ipsa accusantium mollitia voluptate veritatis. Aut eveniet quidem minima, ratione quibusdam quisquam? Culpa eius harum id sit eos pariatur.
							</div>
						</li>
						<li>
							<label for="second">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="second">
							<div class="content">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor aperiam ipsa accusantium mollitia voluptate veritatis. Aut eveniet quidem minima, ratione quibusdam quisquam? Culpa eius harum id sit eos pariatur.
							</div>
						</li>
						<li>
							<label for="third">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="third">
							<div class="content">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, dolor aperiam ipsa accusantium mollitia voluptate veritatis. Aut eveniet quidem minima, ratione quibusdam quisquam? Culpa eius harum id sit eos pariatur.
							</div>
						</li>
						<li>
							<label for="fourth">In publishing and graphic design, Lorem ipsum is a placeholder text commonly?<span>&#x3e</span></label>
							<input type="radio" name="accordion" id="fourth">
							<div class="content">
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
	include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
	?>