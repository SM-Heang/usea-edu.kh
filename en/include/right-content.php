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
			<hr>
		</div>


		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'location') {
			echo 'right_active';
		} ?>" href="location.php"> Location </a></div>
	</div>
	
</div>
</div>
<script src="../../js/main.js"></script>