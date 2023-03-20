<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'faculty-economics-kh') { 
			echo 'right_active';
		} ?>" href="../vission-Mission/vision-mision-corevalue-economic.php">Vision & Mission</a></div>
		<hr>
		<div class="item">
			<!-- <a class="item-link" href="#"><i class="fas fa-angle-right"></i> Associate's Degree</a><hr> -->
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#">Associate's Degree

							<?php
							if (
								$_SESSION['right'] == 'accounting-kh' ||
								$_SESSION['right'] == 'finance-banking-kh' ||
								$_SESSION['right'] == 'management-kh' ||
								$_SESSION['right'] == 'marketing-kh' ||
								$_SESSION['right'] == 'tourism-kh'
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
							$_SESSION['right'] == 'accounting-kh' ||
							$_SESSION['right'] == 'finance-banking-kh' ||
							$_SESSION['right'] == 'management-kh' ||
							$_SESSION['right'] == 'marketing-kh' ||
							$_SESSION['right'] == 'tourism-kh'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'accounting-kh') {
								echo 'right_active';
							} ?>" href="#"> Accounting </a></li>

							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'finance-banking-kh') {
								echo 'right_active';
							} ?>" href="#">Finance & Banking </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'management-kh') {
								echo 'right_active';
							} ?>" href="#"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'marketing-kh') {
								echo 'right_active';
							} ?>" href="#"> Marketing </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'tourism-kh') {
								echo 'right_active';
							} ?>" href="#"> Tourism </a> </li>
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
						<a class="nav-link item-link select-btn-2" href="right-content-economic.php"> Bachelor's Degree
							<!-- <i class="fas fa-angle-down"></i> -->

							<?php
							if (
								$_SESSION['right'] == 'bachelor-management-kh' ||
								$_SESSION['right'] == 'bachelor-marketing-kh' ||
								$_SESSION['right'] == 'bachelor-accounting-auditing-kh' ||
								$_SESSION['right'] == 'bachelor-accounting-auditing-kh' ||
								$_SESSION['right'] == 'bachelor-industrail-economics-kh' ||
								$_SESSION['right'] == 'bachelor-finance-banking-kh' ||
								$_SESSION['right'] == 'bachelor-international-economics-kh' ||
								$_SESSION['right'] == 'bachelor-intrepreneurship-kh' ||
								$_SESSION['right'] == 'bachelor-international-business-kh' ||
								$_SESSION['right'] == 'bachelor-international-tourism-management-kh' ||
								$_SESSION['right'] == 'bachelor-catering-management-kh' ||
								$_SESSION['right'] == 'bachelor-tourism-hospitality-management-kh' ||
								$_SESSION['right'] == 'bachelor-eco-tourism-kh' ||
								$_SESSION['right'] == 'bachelor-event-management-kh'
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
							$_SESSION['right'] == 'bachelor-management-kh' ||
							$_SESSION['right'] == 'bachelor-marketing-kh' ||
							$_SESSION['right'] == 'bachelor-accounting-auditing-kh' ||
							$_SESSION['right'] == 'bachelor-industrail-economics-kh' ||
							$_SESSION['right'] == 'bachelor-finance-banking-kh' ||
							$_SESSION['right'] == 'bachelor-international-economics-kh' ||
							$_SESSION['right'] == 'bachelor-intrepreneurship-kh' ||
							$_SESSION['right'] == 'bachelor-international-business-kh' ||
							$_SESSION['right'] == 'bachelor-international-tourism-management-kh' ||
							$_SESSION['right'] == 'bachelor-catering-management-kh' ||
							$_SESSION['right'] == 'bachelor-tourism-hospitality-management-kh' ||
							$_SESSION['right'] == 'bachelor-eco-tourism-kh' ||
							$_SESSION['right'] == 'bachelor-event-management-kh'
						) {
							echo "show";
						}
						?>
						
						">
							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-accounting-auditing-kh') {
											echo 'right_active';
										} ?>" href="#"> Accounting & Auditing
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-catering-management-kh') {
											echo 'right_active';
										} ?>" href="#"> Catering Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-eco-tourism-kh') {
											echo 'right_active';
										} ?>" href="#"> Eco-Tourism
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-event-management-kh') {
											echo 'right_active';
										} ?>" href="#"> Event Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-finance-banking-kh') {
											echo 'right_active';
										} ?>" href="#"> Finance and Banking
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-industrail-economics-kh') {
											echo 'right_active';
										} ?>" href="#"> Industrail Economics
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-economics-kh') {
											echo 'right_active';
										} ?>" href="#"> International Economics
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-business-kh') {
											echo 'right_active';
										} ?>" href="#"> International Business
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-tourism-management-kh') {
											echo 'right_active';
										} ?>" href="#"> International Tourism
									Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-intrepreneurship-kh') {
											echo 'right_active';
										} ?>" href="#"> Intrepreneurship
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-management-kh') {
											echo 'right_active';
										} ?>" href="#"> Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-marketing-kh') {
											echo 'right_active';
										} ?>" href="#"> Marketing
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-tourism-hospitality-management-kh') {
											echo 'right_active';
										} ?>" href="#"> Tourism and Hospitality
									Management
								</a>
							</li>





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