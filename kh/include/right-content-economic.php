<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'faculty-economics-kh') { 
			echo 'right_active';
		} ?>" href="../vission-Mission/vision-mision-corevalue-economic.php">ចក្ខុវិស័យ និងបេសកកម្ម</a></div>
		<hr>
		<div class="item">
			<!-- <a class="item-link" href="#"><i class="fas fa-angle-right"></i> Associate's Degree</a><hr> -->
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#">ថ្នាក់បរិញ្ញាបត្ររង

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
							} ?>" href="#"> ​គណនេយ្យ </a></li>

							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'finance-banking-kh') {
								echo 'right_active';
							} ?>" href="#">ហិរញ្ញវត្ថុ និងធនាគា </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'management-kh') {
								echo 'right_active';
							} ?>" href="#"> គ្រប់គ្រង </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'marketing-kh') {
								echo 'right_active';
							} ?>" href="#"> ទីផ្សារ </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'tourism-kh') {
								echo 'right_active';
							} ?>" href="#"> ទេសចរណ៍ </a> </li>
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
						<a class="nav-link item-link select-btn-2" href="right-content-economic.php"> ថ្នាក់​បរិញ្ញាបត្រ
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
								$_SESSION['right'] == 'bachelor-international-Marketing-kh' ||
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
							$_SESSION['right'] == 'bachelor-international-Marketing-kh' ||
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
										} ?>" href="#"> គណនេយ្យ និងសវនកម្ម
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-finance-banking-kh') {
											echo 'right_active';
										} ?>" href="#"> ហិរញ្ញវត្ថុ និងធនាគារ
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-Marketing-kh') {
											echo 'right_active';
										} ?>" href="#"> ទីផ្សារអន្តរជាតិ
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-economics-kh') {
											echo 'right_active';
										} ?>" href="#"> ពាណិជ្ជកម្មអន្តរជាតិ
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-international-tourism-management-kh') {
											echo 'right_active';
										} ?>" href="#">  ទេសចរណ៍ <br>និងបដិសណ្ឋារកិច្ចអន្តរជាតិ
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-management-kh') {
											echo 'right_active';
										} ?>" href="#"> គ្រប់គ្រង
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-marketing-kh') {
											echo 'right_active';
										} ?>" href="#"> ទីផ្សារ
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-tourism-hospitality-management-kh') {
											echo 'right_active';
										} ?>" href="#"> គ្រប់គ្រងទេសចរណ៍ <br>និងបដិសណ្ឋារកិច្ច
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