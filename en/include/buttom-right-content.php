<div class="col-xxl-3">
				<div class="right-content-economic">
                <div class="item"><a class="item-link" href="location.php"> Location </a></div>
                <div class="item">
						<nav class="sidebar">
							<ul class="nav flex-column" id="nav_accordion">
								<li class="nav-item has-submenu">
									<a class="nav-link item-link" href="#"> Student Services <i class="fas fa-angle-down"></i></a>
									<ul class="submenu collapse">
										<li><a class="nav-link item-link" aria-current="page" href="upcoming-events.php"> Practicum/Internship </a></li>
										<li><a class="nav-link item-link" href="events.php"> Study Tour </a></li> 
                                        <li><a class="nav-link item-link" href="events.php"> Sport </a></li>
                                        <li><a class="nav-link item-link" href="events.php"> Art & Cultural Exchange </a></li>  
									</ul>
								</li>
							</ul>
                		</nav>
						<hr>
					</div>
                    <div class="item">
						<nav class="sidebar">
							<ul class="nav flex-column" id="nav_accordion">
								<li class="nav-item has-submenu">
									<a class="nav-link item-link" href="#"> Library <i class="fas fa-angle-down"></i></a>
									<ul class="submenu collapse">
										<li><a class="nav-link item-link" aria-current="page" href="upcoming-events.php"> Joints Public Information Center </a></li>
										<li><a class="nav-link item-link" href="events.php"> American Corner </a></li> 
                                        <li><a class="nav-link item-link" href="events.php"> E-Library </a></li> 
									</ul>
								</li>
							</ul>
                		</nav>
						<hr>
					</div>
                    <div class="item">
						<nav class="sidebar">
								<ul class="nav flex-column">
									<li> <a class="nav-link item-link " href="history-logo.php"> Outstanding Students </a></li><hr>
									<li><a class="nav-link item-link " href="president-message.php"> Scholarship </a></li><hr>
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
					<div class="item"><a class="item-link <?php if($_SESSION['right'] == 'location'){ echo 'right_active'; } ?>" href="location.php"> Location </a></div>
				</div>
			</div>
	</div>
	<script src="../../js/main.js"></script>