<div class="col-xxl-3">
	<div class="right-content-economic">

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'human-resource-kh') {
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
								if ($_SESSION['page'] == 'practucum_internship_kh') {
									echo '<i class="fa-solid fa-angle-up simple i_1"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down simple i_1"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php 
									if ($_SESSION['page'] == 'practucum_internship_kh') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
								  <?php 
								  		if ($_SESSION['right'] == 'practucum-internship-kh') {
											 echo 'right_active';
																} ?>" 
									aria-current="page" 
									href="practucum-internship.php"> Practucum/Internship
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
							<?php
								if ($_SESSION['page'] == 'public_information_kh') {
									echo '<i class="fa-solid fa-angle-up i_2"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_2"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'public_information_kh') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
									<?php 
										if ($_SESSION['right'] == 'public-information-center-kh') {
											echo 'right_active';
									} ?>"
									aria-current="page" 
									href="public-information-center.php"> Joint Public Information Center
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


		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu-3">
						<a class="nav-link item-link select-btn-3" href="associate-degree.php" onclick="return false"> Outstanding Students
							<?php
								if ($_SESSION['page'] == 'associate_degree_kh') {
									echo '<i class="fa-solid fa-angle-up i_3"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_3"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'associate_degree_kh') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
									<?php 
										if ($_SESSION['right'] == 'associate-degree-kh') {
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
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'scholarship-right-kh') {
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
								if ($_SESSION['page'] == 'university_kh') {
									echo '<i class="fa-solid fa-angle-up i_4"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_4"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'university_kh') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
									<?php 
										if ($_SESSION['right'] == 'univer-sity-kh') {
											echo 'right_active';
									} ?>"
									aria-current="page" 
									href="university.php"> University
								</a>
							</li>
							<li><a class="nav-link item-link" href="#"> Other Institution </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'alumni-right-kh') {
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
								if ($_SESSION['page'] == 'facilities_kh') {
									echo '<i class="fa-solid fa-angle-up i_5"></i>';
								}else{
									echo '<i class="fa-solid fa-angle-down i_5"></i>';
								}
							?>
						</a>
						<ul class="submenu collapse
							<?php
									if ($_SESSION['page'] == 'facilities_kh') {
										echo "show";
									}
							?>">
							<li>
								<a class="nav-link item-link 
									<?php 
										if ($_SESSION['right'] == 'facilities-right-kh') {
											echo 'right_active';
									} ?>"
									aria-current="page" 
									href="facilities.php">Building
								</a>
							</li>
							<li><a class="nav-link item-link" href="#"> Classroom </a></li>
							<li><a class="nav-link item-link" href="#"> Lab </a></li>
							<li><a class="nav-link item-link" href="#"> Front office </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'Policies-Strategies-kh') {
								echo 'right_active';
											} ?>" href="policies-strategies.php"> Policies and Strategies
			</a>
		</div>
		<hr>

		<div class="item">
			<a class="nav-link item-link <?php if ($_SESSION['right'] == 'form-download-kh') {
								echo 'right_active';
											} ?>" href="form-download.php"> USEA Form Download
			</a>
		</div>
		<hr>

	</div>
</div>
</div>

<script src="../../js/main.js"></script>