	<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link nav-item <?php if($_SESSION['right'] == 'post-graduate'){ echo 'right_active';} ?>"
				href="../vission-Mission/vision-mission-post-graduate.php">Vision & Mission</a></div>
		<hr>
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> Master's Degree
							 <i class="fas fa-angle-down"></i> 
						</a>
						<ul class="submenu collapse
						
						<?php
						if (
							$_SESSION['right'] == 'master-accounting' ||
							$_SESSION['right'] == 'master-auditing'   ||
							$_SESSION['right'] == 'master-finance-banking' ||
							$_SESSION['right'] == 'master-information-technology' ||							
							$_SESSION['right'] == 'master-management' ||
							$_SESSION['right'] == 'master-public-admin' ||
							$_SESSION['right'] == 'master-tesol'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-accounting'){ echo 'right_active';} ?>" aria-current="page"
									href="../MasterDegree/master-accounting.php"> Accounting </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-auditing'){ echo 'right_active';} ?>" href="../MasterDegree/master-auditing.php"> Auditing </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-finance-banking'){ echo 'right_active';} ?>" href="../MasterDegree/master-finance-banking.php"> Finance & Banking </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-information-technology'){ echo 'right_active';} ?>" href="../MasterDegree/master-information-technology.php"> Information Technology
								</a> </li>			
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-management'){ echo 'right_active';} ?>" href="../MasterDegree/master-management.php"> Management </a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-public-admin'){ echo 'right_active';} ?>" href="../MasterDegree/master-public-admin.php"> Public Administration </a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'master-tesol'){ echo 'right_active';} ?>" href="../MasterDegree/master-tesol.php"> Teaching English </a> </li>
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
						<a class="nav-link item-link" href="#"> Doctoral Degree <i class="fas fa-angle-down"></i> </a>
						<ul class="submenu collapse
						<?php
						if (
							$_SESSION['right'] == 'phd-economics' ||
							$_SESSION['right'] == 'phd-education-management' ||
							$_SESSION['right'] == 'phd-business-management' ||
							$_SESSION['right'] == 'phd-public-admin'
						) {
							echo "show";
						}
						?>
						">
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-business-management'){ echo 'right_active';} ?>" aria-current="page"
									href="../DoctoralDegree/phd-business-management.php"> Business Management </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-education-management'){ echo 'right_active';} ?>" href="../DoctoralDegree/phd-education-management.php"> Education Management </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-economics'){ echo 'right_active';} ?>" href="../DoctoralDegree/phd-economics.php">Economics</a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'phd-public-admin'){ echo 'right_active';} ?>" href="../DoctoralDegree/phd-public-admin.php"> Public Administration	</a> </li>							
						</ul>
					</li>
				</ul>
			</nav>
		</div><hr>
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu">
						<a class="nav-link item-link" href="#"> Dissertation  </a>
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