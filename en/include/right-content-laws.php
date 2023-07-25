<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'faculty-science-law') {
			echo 'right_active';
		} ?>" href="../vission-Mission/vision-mision-corevalue-law.php">Vision & Mission</a></div>
		<hr>
		<div class="item">
			<!-- <a class="item-link" href="#"><i class="fas fa-angle-right"></i> Associate's Degree</a><hr> -->
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#">Associate's Degree
							<?php
							if (
								$_SESSION['right'] == 'laws' ||
								$_SESSION['right'] == 'public-admin'
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
								$_SESSION['right'] == 'laws' ||
								$_SESSION['right'] == 'public-admin'
							) {
								echo 'show';
							}

							?>
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'laws') {
								echo 'right_active';
							} ?>" aria-current="page" href="../AssociateDegree/laws.php"> Law
								</a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'public-admin') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/public-admin.php"> Public Adminstration </a></li>
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
						<a class="nav-link item-link select-btn-2" href="#"> Bachelor's Degree
							<?php
							if (
								$_SESSION['right'] == 'bachelor-laws' || 'bachelor-public-admin' || 'bachelor-international-relations'
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
							$_SESSION['right'] == 'bachelor-laws' ||
							$_SESSION['right'] == 'bachelor-public-admin' ||
							$_SESSION['right'] == 'bachelor-international-relations'
						) {
							echo 'show';
						}
						?>
						
						">
							<!-- <li><a class="nav-link item-link" href="#"> International Law </a></li> -->
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'bachelor-laws') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/bachelor-laws.php">Laws</a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'bachelor-international-relations') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/bachelor-international-relations.php"> Political
									Sciences and International Relations </a> </li>
							<!-- <li><a class="nav-link item-link" href="#"> Private Law </a> </li> -->
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'bachelor-public-admin') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/bachelor-public-admin.php"> Public
									Administration </a> </li>
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