<div class="col-xxl-3">
	<div class="right-content-economic">
	<?php  $page = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], "/")+1);?> <!-- use to store url to $page -->
		<div class="item"><a class="item-link <?php if ($page == 'faculty-laws-main.php?article_id=27') {
			echo 'right_active';
		} ?>" href="../Pages/faculty-laws-main.php?article_id=27">Vision & Mission</a></div>
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
							} ?>" aria-current="page" href="#"> Law
								</a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'public-admin') {
								echo 'right_active';
							} ?>" href="#"> Public Adminstration </a></li>
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
								$page == 'faculty-laws-main.php?article_id=382' || 'faculty-laws-main.php?article_id=385' || 'faculty-laws-main.php?article_id=386'
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
							$page == 'faculty-laws-main.php?article_id=382' || 'faculty-laws-main.php?article_id=385' || 'faculty-laws-main.php?article_id=386'
						) {
							echo 'show';
						}
						?>
						
						">
							<!-- <li><a class="nav-link item-link" href="#"> International Law </a></li> -->
							<li><a class="nav-link item-link <?php if ($page == 'faculty-laws-main.php?article_id=382') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/faculty-laws-main.php?article_id=382">Laws</a> </li>
							<li><a class="nav-link item-link <?php if ($page == 'faculty-laws-main.php?article_id=386') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/faculty-laws-main.php?article_id=386"> Political
									Sciences and International Relations </a> </li>
							<!-- <li><a class="nav-link item-link" href="#"> Private Law </a> </li> -->
							<li><a class="nav-link item-link <?php if ($page == 'faculty-laws-main.php?article_id=385') {
								echo 'right_active';
							} ?>" href="../BachelorDegree/faculty-laws-main.php?article_id=385"> Public
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