<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column">
				<li> <a class="nav-link item-link <?php if ($_SESSION['right'] == 'history-logo') {
															echo 'right_active';
														} ?>" href="../Pages/history-logo.php"> History & Logo Meaning </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'p-message') {
															echo 'right_active';
														} ?>" href="../Pages/president-message.php"> President Message </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'vision-mision-corevalue-right') {
															echo 'right_active';
														} ?>" href="../Pages/vision-mision-corevalue.php"> Vision, Mission & Core Value </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'structure') {
															echo 'right_active';
														} ?>" href="../Pages/usea-structure.php"> University Structure </a></li>
					<hr>
					<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'recognition') {
															echo 'right_active';
														} ?>" href="recognition.php"> Recognition </a></li>
					<hr>
				</ul>
			</nav>
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="upcoming-events.php" onclick="return false"> Events
							<?php
							if ($_SESSION['right'] == 'upcoming-events' || $_SESSION['right'] == 'event-s') {
								echo '<i class="fa-solid fa-angle-up i_1"></i>';
							} else {
								echo '<i class="fa-solid fa-angle-down i_1"></i>';
							}
							?>
						</a>
						
						<ul class="submenu collapse <?php
													if ($_SESSION['right'] == 'upcoming-events' || $_SESSION['right'] == 'event-s' ) {
														echo "show";
													}
													?>">
							<li>
								<a class="nav-link item-link 
											   <?php if ($_SESSION['right'] == 'upcoming-events') {
													echo 'right_active';
												} ?>" 
									href="upcoming-events.php"> Upcoming Events
								</a>
							</li>
							<li>
								<a class="nav-link item-link <?php if ($_SESSION['right'] == 'event-s') {
													echo 'right_active';
												} ?>" 
								   href="events.php"> Past Events 
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column">
				<hr>
				<li><a class="nav-link item-link <?php if ($_SESSION['right'] == 'location') {
															echo 'right_active';
														} ?>" href="location.php"> Location </a></li>
				<hr>
				<li> <a class="nav-link item-link <?php if ($_SESSION['right'] == 'faq') {
															echo 'right_active';
														} ?>" href="faq.php"> FAQ </a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="right-menu-mobile">
		<div><i class="fa-solid fa-bars" style="color: #ffffff;"></i></div>
	</div>
	<div class="right-content-mobile__about">
			<ul>
				<li><a href="#">History & Logo Meaning</a></li>
				<li><a href="#">President message</a></li>
				<li><a href="#">Vision, Mission & Core Value</a></li>
				<li><a href="#">University Structure</a></li>
				<li><a href="#">Recognition</a></li>
				<li>
					<a href="#">Events</a>
					<div class="events-mobile">
						<a href="#">Upcoming Events</a>
						<a href="#">Past Events</a>
					</div>
			</li>
				<li><a href="#">Location</a></li>
				<li><a href="#">FAQ</a></li>
			</ul>
		</div>
	
</div>
</div>
<script src="../../js/main.js"></script>