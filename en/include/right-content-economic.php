<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right_economic'] == 'academic') {
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
								$_SESSION['right_economic'] == 'finance_banking' ||
								$_SESSION['right_economic'] == 'manage_ment' ||
								$_SESSION['right_economic'] == 'accoun_ting' ||
								$_SESSION['right_economic'] == 'marke_ting' ||
								$_SESSION['right_economic'] == 'tou_rism'
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
							$_SESSION['right_economic'] == 'finance_banking' ||
							$_SESSION['right_economic'] == 'manage_ment' ||
							$_SESSION['right_economic'] == 'accoun_ting' ||
							$_SESSION['right_economic'] == 'marke_ting' ||
							$_SESSION['right_economic'] == 'tou_rism'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'finance_banking') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/finance-banking.php"> Finance & Banking </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'manage_ment') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/management.php"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'accoun_ting') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/accounting.php"> Accounting </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'marke_ting') {
																	echo 'right_active';
																} ?>" href="../AssociateDegree/marketing.php"> Marketing </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'tou_rism') {
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
								$_SESSION['right_economic'] == 'bachelor_degree_management' ||
								$_SESSION['right_economic'] == 'bachelor_degree_marketing' ||
								$_SESSION['right_economic'] == 'bachelor_degree_accounting_auditing' ||
								$_SESSION['right_economic'] == 'bachelor_degree_accounting_auditing' ||
								$_SESSION['right_economic'] == 'bachelor_degree_industrail_economics' ||
								$_SESSION['right_economic'] == 'bachelor_degree_finance_banking' ||
								$_SESSION['right_economic'] == 'bachelor_international_economics' ||
								$_SESSION['right_economic'] == 'bachelor_intrepreneurship' ||
								$_SESSION['right_economic'] == 'bechelor_international_business' ||
								$_SESSION['right_economic'] == 'bachelor_international_tourism_management' ||
								$_SESSION['right_economic'] == 'bechelor_catering_management' ||
								$_SESSION['right_economic'] == 'bachelor_tourism_hospitality_management' ||
								$_SESSION['right_economic'] == 'bachelor_eco_tourism' ||
								$_SESSION['right_economic'] == 'bachelor_event_management'
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
							$_SESSION['right_economic'] == 'bachelor_degree_management' ||
							$_SESSION['right_economic'] == 'bachelor_degree_marketing' ||
							$_SESSION['right_economic'] == 'bachelor_degree_accounting_auditing' ||
							$_SESSION['right_economic'] == 'bachelor_degree_industrail_economics' ||
							$_SESSION['right_economic'] == 'bachelor_degree_finance_banking' ||
							$_SESSION['right_economic'] == 'bachelor_international_economics' ||
							$_SESSION['right_economic'] == 'bachelor_intrepreneurship' ||
							$_SESSION['right_economic'] == 'bechelor_international_business' ||
							$_SESSION['right_economic'] == 'bachelor_international_tourism_management' ||
							$_SESSION['right_economic'] == 'bechelor_catering_management' ||
							$_SESSION['right_economic'] == 'bachelor_tourism_hospitality_management' ||
							$_SESSION['right_economic'] == 'bachelor_eco_tourism' ||
							$_SESSION['right_economic'] == 'bachelor_event_management'
						) {
							echo "show";
						}
						?>
						
						">
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_degree_management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-management.php"> Management </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_degree_marketing') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-marketing.php"> Marteting </a></li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_degree_accounting_auditing') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-accounting-auditing.php"> Accounting & Auditing</a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_degree_finance_banking') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-finance-banking.php"> Finance and Banking </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_degree_industrail_economics') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-degree-industrail-economics.php"> Industrail Economics </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_international_economics') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-international-economics.php"> International Economics </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_intrepreneurship') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-intrepreneurship.php"> Intrepreneurship </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bechelor_international_business') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bechelor-international-business.php"> International Business </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_international_tourism_management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-international-tourism-management.php"> International Tourism Management </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bechelor_catering_management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bechelor-catering-management.php"> Catering Management </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_tourism_hospitality_management') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-tourism-hospitality-management.php"> Tourism and Hospitality Management </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_eco_tourism') {
																	echo 'right_active';
																} ?>" href="../BachelorDegree/bachelor-eco-tourism.php"> Eco-Tourism </a> </li>
							<li><a class="nav-link item-link <?php if ($_SESSION['right_economic'] == 'bachelor_event_management') {
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