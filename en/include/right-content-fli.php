<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'foreign-language-institute') {
			echo 'right_active';
		} ?>" href="../vission-Mission/vision-mision-corevalue-fli.php">Vision & Mission</a></div>
		<!-- <hr> -->
		<div class="item">
			<!-- <a class="item-link" href="#"><i class="fas fa-angle-right"></i> Associate's Degree</a><hr> -->
			<!-- <nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="../AssociateDegree/finance-banking.php">Associate's Degree

							<?php
							if (
								$_SESSION['page'] == 'finance_banking' ||
								$_SESSION['page'] == 'management' ||
								$_SESSION['page'] == 'accounting' ||
								$_SESSION['page'] == 'marketing' ||
								$_SESSION['page'] == 'tourism'
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
							$_SESSION['page'] == 'finance-banking' ||
							$_SESSION['page'] == 'management' ||
							$_SESSION['page'] == 'accounting' ||
							$_SESSION['page'] == 'marketing' ||
							$_SESSION['page'] == 'tourism'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'accounting') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/accounting.php"> Accounting  </a></li>
							
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'finance_banking') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/finance-banking.php">Finance & Banking </a></li>
																<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'management') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/management.php"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'marketing') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/marketing.php"> Marketing </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'tourism') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/tourism.php"> Tourism </a> </li>
						</ul>
					</li>
				</ul>
			</nav> -->
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
								$_SESSION['right'] == 'bachelor-english-for-translation' ||
								$_SESSION['right'] == 'bachelor-english-for-business' ||
								$_SESSION['right'] == 'bachelor-tefl' ||
								$_SESSION['right'] == 'bachelor-teaching-english-children'
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
							$_SESSION['right'] == 'bachelor-english-for-translation' ||
							$_SESSION['right'] == 'bachelor-english-for-business' ||
							$_SESSION['right'] == 'bachelor-tefl' ||
							$_SESSION['right'] == 'bachelor-teaching-english-children'
						) {
							echo "show";
						}
						?>
						
						">
							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-english-for-translation') {
											echo 'right_active';
										} ?>" href="#"> English for Translation and Interpreting
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-english-for-business') {
											echo 'right_active';
										} ?>" href="#"> English for International Business
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-tefl') {
											echo 'right_active';
										} ?>" href="#"> Teaching English as a Foreign Language
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-teaching-english-children') {
											echo 'right_active';
										} ?>" href="#"> Teaching English to Children
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