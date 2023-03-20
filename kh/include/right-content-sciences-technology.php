<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if($_SESSION['right'] == 'faculty-information-technology-kh'){
			echo 'right_active';
		}?>"
				href="../vission-Mission/vision-mision-corevalue-science-technology.php">Vision & Mission</a></div>
		<hr>
		<div class="item">
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#"> Bachelor's Degree 
							<?php
							if (
								$_SESSION['right'] == 'bachelor-architecture-kh' ||
								$_SESSION['right'] == 'bachelor-chemistry-kh' ||
								$_SESSION['right'] == 'bachelor-civil-engineering-kh' ||
								$_SESSION['right'] == 'bachelor-information-technology-kh' ||
								$_SESSION['right'] == 'bachelor-mathematics-kh' ||
								$_SESSION['right'] == 'bachelor-physic-kh'
							) {

								echo '<i class="fa-solid fa-angle-up i_1"></i>';
							} else {
								echo '<i class="fa-solid fa-angle-down i_1"></i>';
							}
							?> </a>
						<ul class="submenu collapse
							<?php
								if(
									$_SESSION['right'] == 'bachelor-architecture-kh' ||
									$_SESSION['right'] == 'bachelor-chemistry-kh' ||
									$_SESSION['right'] == 'bachelor-civil-engineering-kh' ||
									$_SESSION['right'] == 'bachelor-information-technology-kh' ||
									$_SESSION['right'] == 'bachelor-mathematics-kh' ||
									$_SESSION['right'] == 'bachelor-physic-kh'
									){
										echo 'show';
									}
							?>
						
						">
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-architecture-kh'){
								echo 'right_active';
							}?>" aria-current="page"
									href="../BachelorDegree/bachelor-architecture.php"> Architechture </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-chemistry-kh'){
								echo 'right_active';
							}?>" href="#"> Chemistry </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-civil-engineering-kh'){
								echo 'right_active';
							}?>" href="#"> Civil Engineering </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-information-technology-kh'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-information-technology.php"> Information Technology
								</a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-mathematics-kh'){
								echo 'right_active';
								}?>" href="#"> Mathematics </a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-physic-kh'){
								echo 'right_active';
							} ?>" href="#"> Physics </a> </li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<hr>
	</div>
</div>
</div>
</div>
<script src="../../js/main.js"></script>