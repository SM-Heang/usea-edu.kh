<div class="col-xxl-3">
	<div class="right-content-economic">

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column">
					<li> <a class="nav-link item-link <?php if ($_SESSION['right'] == 'history-logo-kh') {
															echo 'right_active';
														} ?>" href="history-logo.php"> ប្រវត្តិសាកលវិទ្យាល័យ <br class="d-none d-xxl-block">និងអត្ថន័យរបស់និមិត្តសញ្ញា </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'p-message-kh') {
															echo 'right_active';
														} ?>" href="president-message.php"> សាររបស់សាកលវិទ្យាធិការ </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'vision-mision-corevalue-right-kh') {
															echo 'right_active';
														} ?>" href="vision-mision-corevalue.php"> ចក្ខុវិស័យ, បេសកកម្ម & គុណតម្លៃ </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'structure-kh') {
															echo 'right_active';
														} ?>" href="usea-structure.php"> រចនាសម្ព័ន្ធសាកលវិទ្យាល័យ </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'recognition-kh') {
															echo 'right_active';
														} ?>" href="recognition.php"> ការទទួលស្គាល់ </a></li>
					<hr>
				</ul>
			</nav>
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="upcoming-events.php" onclick="return false"> ព្រឹត្តិការណ៍
							<?php
							if ($_SESSION['right'] == 'upcoming_events' || $_SESSION['right'] == 'event-s-kh') {
								echo '<i class="fa-solid fa-angle-up i_1"></i>';
							} else {
								echo '<i class="fa-solid fa-angle-down i_1"></i>';
							}
							?>
						</a>
						
						<ul class="submenu collapse <?php
													if ($_SESSION['right'] == 'upcoming-events-kh' || $_SESSION['right'] == 'event-s-kh' ) {
														echo "show";
													}
													?>">
							<li>
								<a class="nav-link item-link 
											   <?php if ($_SESSION['right'] == 'upcoming-events-kh') {
													echo 'right_active';
												} ?>" 
									href="upcoming-events.php"> ព្រឹត្តិការណ៍នាពេលខាងមុខ
								</a>
							</li>
							<li>
								<a class="nav-link item-link <?php if ($_SESSION['right'] == 'event-s-kh') {
													echo 'right_active';
												} ?>" 
								   href="events.php"> ព្រឹត្តិការណ៍កន្លងទៅ 
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>


		<!-- <div class="item"><a class="item-link <?php// if ($_SESSION['right'] == 'location-kh') {
			//echo 'right_active';
		//} ?>" href="location.php"> ទីតាំង </a>
		</div> -->

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column">
				<hr>
				<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'location-kh') {
															echo 'right_active';
														} ?>" href="location.php"> ទីតាំង </a></li>
				<hr>
				<li> <a class="nav-link item-link <?php if ($_SESSION['right'] == 'faq-kh') {
															echo 'right_active';
														} ?>" href="faq.php"> សំណួរដែលសួរញឹកញាប់ </a></li>
				<hr>
				</ul>
			</nav>
		</div>
		
	</div>
	
</div>
</div>
<script src="../../js/main.js"></script>