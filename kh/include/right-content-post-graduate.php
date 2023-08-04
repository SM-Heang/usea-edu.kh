	<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link nav-item <?php if($_SESSION['right'] == 'post-graduate-kh'){ echo 'right_active';} ?>"
				href="../vission-Mission/vision-mission-post-graduate.php">ចក្ខុវិស័យ​ និងបេសកកម្ម</a></div>
		<hr>
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> ថ្នាក់អនុបណ្ឌិត
							 <i class="fas fa-angle-down"></i> 
						</a>
						<ul class="submenu collapse
						
						<?php
						if (
							$_SESSION['right'] == 'master-accounting-kh' ||
							$_SESSION['right'] == 'master-auditing-kh'   ||
							$_SESSION['right'] == 'master-finance-banking-kh' ||
							$_SESSION['right'] == 'master-information-technology-kh' ||							
							$_SESSION['right'] == 'master-management-kh' ||
							$_SESSION['right'] == 'master-public-admin-kh' ||
							$_SESSION['right'] == 'master-tesol-kh'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-accounting-kh'){ echo 'right_active';} ?>" aria-current="page"
									href="../MasterDegree/master-accounting.php"> គណនេយ្យ </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-auditing-kh'){ echo 'right_active';} ?>" href="../MasterDegree/master-auditing.php"> សវនកម្ម </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-finance-banking-kh'){ echo 'right_active';} ?>" href="../MasterDegree/master-finance-banking.php"> ហិរញ្ញវត្ថុ និងធនាគារ </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-information-technology-kh'){ echo 'right_active';} ?>" href="../MasterDegree/master-information-technology.php"> ព័ត៌មានវិទ្យា
								</a> </li>			
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-management-kh'){ echo 'right_active';} ?>" href="../MasterDegree/master-management.php"> គ្រប់គ្រង </a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-public-admin-kh'){ echo 'right_active';} ?>" href="../MasterDegree/master-public-admin.php"> រដ្ឋបាលសាធារណៈ </a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-tesol-kh'){ echo 'right_active';} ?>" href="../MasterDegree/master-tesol.php"> បង្រៀនភាសាអង់គ្លេស </a> </li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<hr>
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> ថ្នាក់បណ្ឌិត <i class="fas fa-angle-down"></i> </a>
						<ul class="submenu collapse
						<?php
						if (
							$_SESSION['right'] == 'phd-economics-kh' ||
							$_SESSION['right'] == 'phd-education-management-kh' ||
							$_SESSION['right'] == 'phd-business-management-kh' ||
							$_SESSION['right'] == 'phd-public-admin-kh'
						) {
							echo "show";
						}
						?>
						">
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-business-management-kh'){ echo 'right_active';} ?>" aria-current="page"
									href="../DoctoralDegree/phd-business-management.php"> គ្រប់គ្រងពាណិជ្ជកម្ម </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-education-management-kh'){ echo 'right_active';} ?>" href="../DoctoralDegree/phd-education-management.php"> គ្រប់គ្រងអប់រំ </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-economics-kh'){ echo 'right_active';} ?>" href="../DoctoralDegree/phd-economics.php">សេដ្ឋកិច្ច</a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-public-admin-kh'){ echo 'right_active';} ?>" href="../DoctoralDegree/phd-public-admin.php"> រដ្ឋបាលសាធារណៈ	</a> </li>							
						</ul>
					</li>
				</ul>
			</nav>
		</div><hr>
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> និក្ខេបបទថ្នាក់បណ្ឌិត  </a>
						<!-- <ul class="submenu collapse">
							<li><a class="nav-link item-link" aria-current="page"
									href="../BachelorDegree/bachelor-degree-architecture.php"> Architechture </a></li>
							<li><a class="nav-link item-link" href="../AssociateDegree/management.php"> Chemistry </a></li>
							<li><a class="nav-link item-link" href="../AssociateDegree/accounting.php"> Civil Engineering </a></li>
							<li><a class="nav-link item-link" href="../BachelorDegree/bachelor-degree-it.php"> Information Technology
								</a> </li>
							<li><a class="nav-link item-link" href="../AssociateDegree/tourism.php"> Mathematics </a> </li>
							<li><a class="nav-link item-link" href="../AssociateDegree/tourism.php"> Physics </a> </li>
						</ul> -->
					</li>
				</ul>
			</nav>
		</div><hr>
	</div>
</div>
</div>
</div>
<script src="../../js/main.js"></script>