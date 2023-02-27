<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'faculty-economics') {
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
								$_SESSION['right'] == 'accounting' ||
								$_SESSION['right'] == 'finance-banking' ||
								$_SESSION['right'] == 'management' ||
								$_SESSION['right'] == 'marketing' ||
								$_SESSION['right'] == 'tourism'
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
							$_SESSION['right'] == 'accounting' ||
							$_SESSION['right'] == 'finance-banking' ||
							$_SESSION['right'] == 'management' ||
							$_SESSION['right'] == 'marketing' ||
							$_SESSION['right'] == 'tourism'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'accounting') {
								echo 'right_active';
							} ?>" href="#"> Accounting </a></li>

							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'finance-banking') {
								echo 'right_active';
							} ?>" href="#">Finance & Banking </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'management') {
								echo 'right_active';
							} ?>" href="#"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'marketing') {
								echo 'right_active';
							} ?>" href="#"> Marketing </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'tourism') {
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
								$_SESSION['right'] == 'bachelor-management' ||
								$_SESSION['right'] == 'bachelor-marketing' ||
								$_SESSION['right'] == 'bachelor-accounting-auditing' ||
								$_SESSION['right'] == 'bachelor-accounting-auditing' ||
								$_SESSION['right'] == 'bachelor-industrail-economics' ||
								$_SESSION['right'] == 'bachelor-finance-banking' ||
								$_SESSION['right'] == 'bachelor-international-economics' ||
								$_SESSION['right'] == 'bachelor-intrepreneurship' ||
								$_SESSION['right'] == 'bachelor-international-business' ||
								$_SESSION['right'] == 'bachelor-international-tourism-management' ||
								$_SESSION['right'] == 'bachelor-catering-management' ||
								$_SESSION['right'] == 'bachelor-tourism-hospitality-management' ||
								$_SESSION['right'] == 'bachelor-eco-tourism' ||
								$_SESSION['right'] == 'bachelor-event-management'
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
							$_SESSION['right'] == 'bachelor-management' ||
							$_SESSION['right'] == 'bachelor-marketing' ||
							$_SESSION['right'] == 'bachelor-accounting-auditing' ||
							$_SESSION['right'] == 'bachelor-industrail-economics' ||
							$_SESSION['right'] == 'bachelor-finance-banking' ||
							$_SESSION['right'] == 'bachelor-international-economics' ||
							$_SESSION['right'] == 'bachelor-intrepreneurship' ||
							$_SESSION['right'] == 'bachelor-international-business' ||
							$_SESSION['right'] == 'bachelor-international-tourism-management' ||
							$_SESSION['right'] == 'bachelor-catering-management' ||
							$_SESSION['right'] == 'bachelor-tourism-hospitality-management' ||
							$_SESSION['right'] == 'bachelor-eco-tourism' ||
							$_SESSION['right'] == 'bachelor-event-management'
						) {
							echo "show";
						}
						?>
						
						">
							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-accounting-auditing') {
											echo 'right_active';
										} ?>" href="#"> Accounting & Auditing
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-catering-management') {
											echo 'right_active';
										} ?>" href="#"> Catering Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-eco-tourism') {
											echo 'right_active';
										} ?>" href="#"> Eco-Tourism
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-event-management') {
											echo 'right_active';
										} ?>" href="#"> Event Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-finance-banking') {
											echo 'right_active';
										} ?>" href="#"> Finance and Banking
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-industrail-economics') {
											echo 'right_active';
										} ?>" href="#"> Industrail Economics
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-economics') {
											echo 'right_active';
										} ?>" href="#"> International Economics
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-business') {
											echo 'right_active';
										} ?>" href="#"> International Business
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-tourism-management') {
											echo 'right_active';
										} ?>" href="#"> International Tourism
									Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-intrepreneurship') {
											echo 'right_active';
										} ?>" href="#"> Intrepreneurship
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-management') {
											echo 'right_active';
										} ?>" href="#"> Management
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-marketing') {
											echo 'right_active';
										} ?>" href="#"> Marketing
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-tourism-hospitality-management') {
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