<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if($_SESSION['right'] == 'faculty-information-technology-kh'){
			echo 'right_active';
		}?>"
				href="../vission-Mission/vision-mision-corevalue-science-technology.php">ចក្ខុវិស័យ និងបេសកកម្ម</a></div>
		<hr>
		<div class="item">
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#"> ថ្នាក់បិញ្ញាបត្រ
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
									href="../BachelorDegree/bachelor-architecture.php"> ស្ថាបត្យកម្ម </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-civil-engineering-kh'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-civil-engineering.php"> វិស្វកម្មសំណង់ស៊ីវិល </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-information-technology-kh'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-information-technology.php"> ព័ត៏មានវិទ្យា
								</a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-mathematics-kh'){
								echo 'right_active';
								}?>" href="../BachelorDegree/bachelor-mathematics.php"> គណិតវិទ្យា </a> </li>
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