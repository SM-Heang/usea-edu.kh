<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['page'] == 'vision_mision_corevalue') {
													echo 'right_active';
												} ?>" href="../vission-Mission/vision-mision-corevalue.php">Vision & Mission</a></div>
		<hr>
		<div class="item">
			<!-- <a class="item-link" href="#"><i class="fas fa-angle-right"></i> Associate's Degree</a><hr> -->
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="../AssociateDegree/finance-banking.php">Associate's Degree

							<?php
							if (
								$_SESSION['page'] == 'finance-banking' ||
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
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'finance-banking') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/finance-banking.php"> Finance & Banking </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'management') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/management.php"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'accounting') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/accounting.php"> Accounting </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'marketing') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/marketing.php"> Marketing </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'tourism') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/tourism.php"> Tourism </a> </li>
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
								// $_SESSION['right_economic'] == 'bachelor_degree_management' ||
								// $_SESSION['right_economic'] == 'bachelor_degree_marketing' ||
								// $_SESSION['right_economic'] == 'bachelor_degree_accounting_auditing' ||
								// $_SESSION['right_economic'] == 'bachelor_degree_accounting_auditing' ||
								// $_SESSION['right_economic'] == 'bachelor_degree_industrail_economics' ||
								// $_SESSION['right_economic'] == 'bachelor_degree_finance_banking' ||
								// $_SESSION['right_economic'] == 'bachelor_international_economics' ||
								// $_SESSION['right_economic'] == 'bachelor_intrepreneurship' ||
								// $_SESSION['right_economic'] == 'bechelor_international_business' ||
								// $_SESSION['right_economic'] == 'bachelor_international_tourism_management' ||
								// $_SESSION['right_economic'] == 'bechelor_catering_management' ||
								// $_SESSION['right_economic'] == 'bachelor_tourism_hospitality_management' ||
								// $_SESSION['right_economic'] == 'bachelor_eco_tourism' ||
								// $_SESSION['right_economic'] == 'bachelor_event_management'

								$_SESSION['page'] == 'bachelor-degree-management' ||
								$_SESSION['page'] == 'bachelor-degree-marketing' ||
								$_SESSION['page'] == 'bachelor-degree-accounting-auditing' ||
								$_SESSION['page'] == 'bachelor-degree-accounting-auditing' ||
								$_SESSION['page'] == 'bachelor-degree-industrail-economics' ||
								$_SESSION['page'] == 'bachelor-degree-finance-banking' ||
								$_SESSION['page'] == 'bachelor-international-economics' ||
								$_SESSION['page'] == 'bachelor-intrepreneurship' ||
								$_SESSION['page'] == 'bechelor-international-business' ||
								$_SESSION['page'] == 'bachelor-international-tourism-management' ||
								$_SESSION['page'] == 'bechelor-catering-management' ||
								$_SESSION['page'] == 'bachelor-tourism-hospitality-management' ||
								$_SESSION['page'] == 'bachelor-eco-tourism' ||
								$_SESSION['page'] == 'bachelor-event-management'
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
							$_SESSION['page'] == 'bachelor-degree-management' ||
							$_SESSION['page'] == 'bachelor-degree-marketing' ||
							$_SESSION['page'] == 'bachelor-degree-accounting-auditing' ||
							$_SESSION['page'] == 'bachelor-degree-industrail-economics' ||
							$_SESSION['page'] == 'bachelor-degree-finance-banking' ||
							$_SESSION['page'] == 'bachelor-international-economics' ||
							$_SESSION['page'] == 'bachelor-intrepreneurship' ||
							$_SESSION['page'] == 'bechelor-international-business' ||
							$_SESSION['page'] == 'bachelor-international-tourism-management' ||
							$_SESSION['page'] == 'bechelor-catering-management' ||
							$_SESSION['page'] == 'bachelor-tourism-hospitality-management' ||
							$_SESSION['page'] == 'bachelor-eco-tourism' ||
							$_SESSION['page'] == 'bachelor-event-management'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-degree-management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-management.php"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-degree-marketing') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-marketing.php"> Marteting </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-degree-accounting-auditing') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-accounting-auditing.php"> Accounting & Auditing</a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-degree-industrail-economics') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-finance-banking.php"> Finance and Banking </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-degree-finance-banking') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-industrail-economics.php"> Industrail Economics </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-international-economics') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-international-economics.php"> International Economics </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-intrepreneurship') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-intrepreneurship.php"> Intrepreneurship </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bechelor-international-business') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bechelor-international-business.php"> International Business </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-international-tourism-management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-international-tourism-management.php"> International Tourism Management </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bechelor-catering-management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bechelor-catering-management.php"> Catering Management </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-tourism-hospitality-management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-tourism-hospitality-management.php"> Tourism and Hospitality Management </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-eco-tourism') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-eco-tourism.php"> Eco-Tourism </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['page'] == 'bachelor-event-management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-event-management.php"> Event Management </a> </li>
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