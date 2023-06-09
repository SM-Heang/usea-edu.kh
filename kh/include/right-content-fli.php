<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'foreign-language-institute-kh') {
			echo 'right_active';
		} ?>" href="../vission-Mission/vision-mision-corevalue-fli.php">ចក្ខុវិស័យ និងបេសកកម្ម</a></div>
		<!-- <hr> -->
		<div class="item">
			<!-- <a class="item-link" href="#"><i class="fas fa-angle-right"></i> Associate's Degree</a><hr> -->
			<!-- <nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="../AssociateDegree/finance-banking.php">Associate's Degree

							<?php
							if (
								$_SESSION['page'] == 'finance_banking_kh' ||
								$_SESSION['page'] == 'management_kh' ||
								$_SESSION['page'] == 'accounting_kh' ||
								$_SESSION['page'] == 'marketing_kh' ||
								$_SESSION['page'] == 'tourism_kh'
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
							$_SESSION['page'] == 'finance_banking_kh' ||
							$_SESSION['page'] == 'management_kh' ||
							$_SESSION['page'] == 'accounting_kh' ||
							$_SESSION['page'] == 'marketing_kh' ||
							$_SESSION['page'] == 'tourism_kh'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'accounting_kh') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/accounting.php"> Accounting  </a></li>
							
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'finance_banking_kh') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/finance-banking.php">Finance & Banking </a></li>
																<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'management_kh') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/management.php"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'marketing_kh') {
								echo 'right_active';
							} ?>" href="../AssociateDegree/marketing.php"> Marketing </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'tourism_kh') {
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
						<a class="nav-link item-link select-btn-2" href="right-content-economic.php"> ថ្នាក់បិញ្ញាបត្រ
							<!-- <i class="fas fa-angle-down"></i> -->

							<?php
							if (
								$_SESSION['right'] == 'bachelor-english-for-translation-kh' ||
								$_SESSION['right'] == 'bachelor-english-for-business-kh' ||
								$_SESSION['right'] == 'bachelor-tefl-kh' ||
								$_SESSION['right'] == 'bachelor-teaching-english-children-kh'
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
							$_SESSION['right'] == 'bachelor-english-for-translation-kh' ||
							$_SESSION['right'] == 'bachelor-english-for-business-kh' ||
							$_SESSION['right'] == 'bachelor-tefl-kh' ||
							$_SESSION['right'] == 'bachelor-teaching-english-children-kh'
						) {
							echo "show";
						}
						?>
						
						">
							<li>
								<a class="nav-link item-link
										<?php if ($_SESSION['right'] == 'bachelor-english-for-translation-kh') {
											echo 'right_active';
										} ?>" href="#"> ភាសាអង់គ្លេសសម្រាប់ការបកប្រែ
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-english-for-business-kh') {
											echo 'right_active';
										} ?>" href="#"> ភាសាអង់គ្លេសសម្រាប់ទំនាក់ទំនងពាណិជ្ជកម្មអន្តរជាតិ
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-tefl-kh') {
											echo 'right_active';
										} ?>" href="#"> ការបង្រៀនភាសាអង់គ្លេសជាភាសាបរទេស
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-teaching-english-children-kh') {
											echo 'right_active';
										} ?>" href="#"> ការបង្រៀនភាសាអង់គ្លេសដល់កុមារ
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