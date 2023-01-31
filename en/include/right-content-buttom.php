<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'human_resource') {
												echo 'right_active';
											} ?>" href="human-resource.php"> Human Resource
			</a>
		</div>
		<hr>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="student-services.php" onclick="return false"> Student Services
							<i class="fa-solid fa-angle-up simple"></i>
						</a>
						<ul class="submenu collapse
							<?php if ($_SESSION['page'] == 'practucum-internship') {
								echo "show";
							} else if ($_SESSION['page'] == 'practucum-internship') {
								echo "simple";
							} ?>">
							<li>
								<a class="nav-link item-link <?php if ($_SESSION['right'] == 'practucum_internship') {
																	echo 'right_active';
																} ?>" aria-current="page" href="practucum-internship.php"> Practucum/Internship
								</a>
							</li>
							<li><a class="nav-link item-link" href="#"> Student Tours </a></li>
							<li><a class="nav-link item-link" href="#"> Sport </a></li>
							<li><a class="nav-link item-link" href="#"> Art & Cultural Exchange </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<!-- <hr> -->

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu-2">
						<a class="nav-link item-link select-btn-2" href="public-information-center.php" onclick="return false"> Library
							<i class="fa-solid fa-angle-up simple-2"></i>
						</a>
						<ul class="submenu collapse
							<?php if ($_SESSION['page'] == 'public-information') {
								echo "show";
							} else if ($_SESSION['page'] == 'public-information') {
								echo "simple";
							} ?>">
							<li>
								<a class="nav-link item-link <?php if ($_SESSION['right'] == 'public_information_center') {
																	echo 'right_active';
																} ?>" aria-current="page" href="public-information-center.php"> Joint Public Information Center
								</a>
							</li>
							<li><a class="nav-link item-link" href="#"> American Corner </a></li>
							<li><a class="nav-link item-link" href="#"> E-Library </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>









		<!-- 		
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="upcoming-events.php" onclick="return false"> Library
							<i class="fa-solid fa-angle-up simple"></i>
						</a>
						<ul class="submenu collapse 
							<?php if ($_SESSION['page'] == 'library') {
								echo "show";
							} else if ($_SESSION['page'] == 'library') {
								echo "simple";
							} ?>">
							<li>
								<a class="nav-link item-link <?php if ($_SESSION['right'] == 'library') {
																	echo 'right_active';
																} ?>" 
								   aria-current="page" href="upcoming-events.php"> Joint Public Information Center 
								</a>
							</li>
							<li><a class="nav-link item-link" href="events.php"> American Corner </a></li>
							<li><a class="nav-link item-link" href="events.php"> E-Library </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> Outstanding Students
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<ul class="submenu collapse">
							<li><a class="nav-link item-link" aria-current="page" href="upcoming-events.php"> Associate's Degree </a></li>
							<li><a class="nav-link item-link" href="events.php"> Bachelor's Degree </a></li>
							<li><a class="nav-link item-link" href="events.php"> Master's Degree </a></li>
							<li><a class="nav-link item-link" href="events.php"> General English Program </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item"><a class="nav-link item-link" href="scholarship.php"> Scholarship </a></div>

		<hr>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> Career
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<ul class="submenu collapse">
							<li><a class="nav-link item-link" aria-current="page" href="upcoming-events.php"> University </a></li>
							<li><a class="nav-link item-link" href="events.php"> Other Institution </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> Alumni
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<ul class="submenu collapse">
							<li><a class="nav-link item-link" aria-current="page" href="upcoming-events.php"> Promotion 9 </a></li>
							<li><a class="nav-link item-link" href="events.php"> Promotion 10 </a></li>
							<li><a class="nav-link item-link" href="events.php"> Promotion 11 </a></li>
							<li><a class="nav-link item-link" href="events.php"> Promotion 12 </a></li>
							<li><a class="nav-link item-link" href="events.php"> Promotion 13 </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> Facilities
							<i class="fa-solid fa-angle-down"></i>
						</a>
						<ul class="submenu collapse">
							<li><a class="nav-link item-link" aria-current="page" href="upcoming-events.php"> Building </a></li>
							<li><a class="nav-link item-link" href="events.php"> Classroom </a></li>
							<li><a class="nav-link item-link" href="events.php"> Lab </a></li>
							<li><a class="nav-link item-link" href="events.php"> Front Office </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column">
					<li> <a class="nav-link item-link" href="policies-strategies.php"> Policies and Strategies </a></li>
					<hr>
					<li><a class="nav-link item-link" href="form-download.php"> USEA Form Downlaod </a></li>
					<hr>
					<li><a class="nav-link item-link" href="news-website.php"> News Website </a></li>
					<hr>
				</ul>
			</nav>
		</div> -->






	</div>
</div>
</div>
<script src="../../js/main.js"></script>