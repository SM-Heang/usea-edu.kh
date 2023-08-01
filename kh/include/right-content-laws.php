<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'faculty-science-law-kh') {
			echo 'right_active';
		} ?>" href="../vission-Mission/vision-mision-corevalue-law.php">ចក្ខុវិស័យ និងបេសកកម្ម</a></div>
		<hr>
		<div class="item">
			<!-- <a class="item-link" href="#"><i class="fas fa-angle-right"></i> Associate's Degree</a><hr> -->
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#">ថ្នាក់បិញ្ញាបត្ររង
							<?php
							if (
								$_SESSION['right'] == 'laws-kh' ||
								$_SESSION['right'] == 'public-admin-kh'
							) {
								echo '<i class="fa-solid fa-angle-up i_1"></i>';
							} else {
								echo '<i class="fa-solid fa-angle-down i_1"></i>';
							}

							?>
						</a>
						<ul class="submenu collapse
							<?php
							if (
								$_SESSION['right'] == 'laws-kh' ||
								$_SESSION['right'] == 'public-admin-kh'
							) {
								echo 'show';
							}

							?>
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'laws-kh') {
								echo 'right_active';
							} ?>" aria-current="page" href="../AssociateDegree/laws.php"> នីតិសាស្រ្ត
								</a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'public-admin-kh') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/public-admin.php"> រដ្ឋបាលសាធារណៈ </a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<hr>
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu-2">
						<a class="nav-link item-link select-btn-2" href="#"> ថ្នាក់បិញ្ញាបត្រ
							<?php
							if (
								$_SESSION['right'] == 'bachelor-international-law-kh' ||
								$_SESSION['right'] == 'bachelor-laws-kh' ||
								$_SESSION['right'] == 'bachelor-international-relations-kh' ||
								$_SESSION['right'] == 'bachelor-privat-law-kh' ||
								$_SESSION['right'] == 'bachelor-public-admin-kh'
							) {

								echo '<i class="fa-solid fa-angle-up i_2"></i>';
							} else {
								echo '<i class="fa-solid fa-angle-down i_2"></i>';
							}

							?>
						</a>
						<ul class="submenu collapse 
						<?php
						if (
							$_SESSION['right'] == 'bachelor-international-law-kh' ||
							$_SESSION['right'] == 'bachelor-laws-kh' ||
							$_SESSION['right'] == 'bachelor-international-relations-kh' ||
							$_SESSION['right'] == 'bachelor-privat-law-kh' ||
							$_SESSION['right'] == 'bachelor-public-admin-kh'
						) {
							echo 'show';
						}

						?>
						
						">

							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'bachelor-laws-kh') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/bachelor-laws.php">នីតិសាស្រ្ត</a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'bachelor-international-relations-kh') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/bachelor-international-relations.php"> វិទ្យាសាស្ត្រនយោបាយ <br>និងទំនាក់ទំនងអន្តរជាតិ</a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'bachelor-public-admin-kh') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/bachelor-public-admin.php"> រដ្ឋបាលសាធារណៈ </a> </li>
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