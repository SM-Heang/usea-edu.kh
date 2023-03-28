<div class="col-xxl-3">
	<div class="right-content-economic">

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'human-resource') {
												echo 'right_active';
											} ?>" href="human-resource.php"> Human Resource
			</a>
		</div>
		<hr>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="student-services.php" onclick="return false">Student Services
							<?php
								if ($_SESSION['page'] == 'practucum_internship') {
									echo '<i class="fa-solid fa-angle-up simple i_1"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down simple i_1"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php 
									if ($_SESSION['page'] == 'practucum_internship'|| $_SESSION['page'] == 'student_tours' || $_SESSION['page'] == 'sport'|| $_SESSION['page'] == 'art_culture' ) {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
								  <?php 
								  		if ($_SESSION['right'] == 'practucum-internship' ) {
											 echo 'right_active';
																} ?>" 
									aria-current="page" 
									href="practucum-internship.php"> Practucum/Internship
								</a>
							</li>
							<li><a class="nav-link item-link <?php 
								  		if ($_SESSION['right'] == 'student-tours' ) {
											 echo 'right_active';
																} ?>" href="student-tours.php"> Student Tours </a></li>
							<li><a class="nav-link item-link
							<?php 
								  		if ($_SESSION['right'] == 'sport' ) {
											 echo 'right_active';
																} ?>" 
																href="sport.php"> Sport </a></li>
							<li><a class="nav-link item-link
							<?php 
								  		if ($_SESSION['right'] == 'art-culture' ) {
											 echo 'right_active';
																} ?>" href="art-culture-exchange.php"> Art & Cultural Exchange </a></li>
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
							<?php
								if ($_SESSION['page'] == 'public_information') {
									echo '<i class="fa-solid fa-angle-up i_2"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_2"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'public_information'|| $_SESSION['page'] == 'american_corner' || $_SESSION['right'] == 'e-library') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
									<?php 
										if ($_SESSION['right'] == 'public-information-center') {
											echo 'right_active';
									} ?>"
									aria-current="page" 
									href="public-information-center.php"> Joint Public Information Center
								</a>
							</li>
							<li><a class="nav-link item-link
							<?php 
										if ($_SESSION['right'] == 'american-corner') {
											echo 'right_active';
									} ?>" href="american-corner.php"> American Corner </a></li>
							<li><a class="nav-link item-link
							<?php 
										if ($_SESSION['right'] == 'e-library') {
											echo 'right_active';
									} ?>" href="e-library"> E-Library </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>


		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu-3">
						<a class="nav-link item-link select-btn-3" href="associate-degree.php" onclick="return false"> Outstanding Students
							<?php
								if ($_SESSION['page'] == 'associate_degree') {
									echo '<i class="fa-solid fa-angle-up i_3"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_3"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'associate_degree') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
									<?php 
										if ($_SESSION['right'] == 'associate-degree') {
											echo 'right_active';
									} ?>"
									aria-current="page" 
									href="associate-degree.php"> Associate's Degree
								</a>
							</li>
							<li><a class="nav-link item-link" href="#"> Bachelor's Degree </a></li>
							<li><a class="nav-link item-link" href="#"> Master's Degree </a></li>
							<li><a class="nav-link item-link" href="#"> General English Program </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'scholarship-right') {
												echo 'right_active';
											} ?>" href="scholarship.php"> Scholarship
			</a>
		</div>
		<hr>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu-4">
						<a class="nav-link item-link select-btn-4" href="university.php" onclick="return false"> Career
							<?php
								if ($_SESSION['page'] == 'university') {
									echo '<i class="fa-solid fa-angle-up i_4"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_4"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'university' || $_SESSION['page'] == 'career_other_institute') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
									<?php 
										if ($_SESSION['right'] == 'univer-sity') {
											echo 'right_active';
									} ?>"
									aria-current="page" 
									href="career-university.php"> University
								</a>
							</li>
							<li><a class="nav-link item-link
							<?php 
										if ($_SESSION['right'] == 'career-other-institute') {
											echo 'right_active';
									} ?>" href="career-other-institution.php"> Other Institution </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'alumni-right') {
								echo 'right_active';
											} ?>" href="alumni.php"> Alumni
			</a>
		</div>
		<hr>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu-5">
						<a class="nav-link item-link select-btn-5" href="facilities.php" onclick="return false"> Facilities
							<?php
								if ($_SESSION['page'] == 'building') {
									echo '<i class="fa-solid fa-angle-up i_5"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_5"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'building') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link" aria-current="page" 
									href="facilities.php?id=69">Building
								</a>
							</li>
							<li><a class="nav-link item-link" href="facilities.php?id=74"> Classroom </a></li>
							<li><a class="nav-link item-link" href="facilities.php?id=71"> Lab </a></li>
							<li><a class="nav-link item-link" href="facilities.php?id=74"> Front office </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'Policies-Strategies') {
								echo 'right_active';
											} ?>" href="policies-strategies.php"> Policies and Strategies
			</a>
		</div>
		<hr>

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'form-download') {
								echo 'right_active';
											} ?>" href="form-download.php"> USEA Form Download
			</a>
		</div>
		<hr>
		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'new-website') {
								echo 'right_active';
											} ?>" href="form-download.php"> News Website
			</a>
		</div>

	</div>
</div>
</div>

<script src="../../js/main.js"></script>