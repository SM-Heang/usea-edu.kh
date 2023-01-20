<div class="col-xxl-3">
				<div class="right-content-economic">
					<div class="item">
						<nav class="sidebar">
								<ul class="nav flex-column">
									<li class="active <?php if($_SESSION['right'] == 'history'){ echo 'active'; } ?>"> <a class="nav-link item-link" href="history-logo.php"> History & Logo Meaning </a></li><hr>
									<li class="<?php if($_SESSION['r_menu'] == 'p_message'){ echo 'right_active'; } ?>"><a class="nav-link item-link" href="president-message.php"> President Message </a></li><hr>
									<li class="<?php if($_SESSION['page'] == 'history'){ echo 'active'; } ?>"><a class="nav-link item-link" href="../vission-Mission/vision-mision-corevalue.php"> Vision, Mission & Core Value </a></li><hr>
									<li class="<?php if($_SESSION['page'] == 'history'){ echo 'active'; } ?>"><a class="nav-link item-link" href="usea-structure.php"> University Structure </a></li><hr>
									<li class="<?php if($_SESSION['page'] == 'history'){ echo 'active'; } ?>"><a class="nav-link item-link" href="../Pages/recognition.php"> Recognition </a></li><hr>
								</ul>
						</nav>
					</div>

					<div class="item">
						<nav class="sidebar">
							<ul class="nav flex-column" id="nav_accordion">
								<li class="nav-item has-submenu">
									<a class="nav-link item-link" href="#"> Events <i class="fas fa-angle-down"></i></a>
									<ul class="submenu collapse">
										<li><a class="nav-link item-link" aria-current="page" href="upcoming-events.php"> Upcoming Events </a></li>
										<li><a class="nav-link item-link" href="events.php"> Past Events </a></li> 
									</ul>
								</li>
							</ul>
                		</nav>
						<hr>
					</div>
					<div class="item"><a class="item-link" href="location.php"> Location </a></div>
				</div>
			</div>
	</div>
	<script src="../../js/main.js"></script>