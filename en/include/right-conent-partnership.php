<div class="col-xxl-3">
				<div class="right-content-economic">
					<!-- <div class="item"><a class="item-link <?php if($_SESSION['right_partnership'] == 'partnership_local'){ echo 'right_active'; } ?>" href="partnership-local.php"> Local </a></div><hr>
					<div class="item"><a class="item-link <?php if($_SESSION['right_partnership'] == 'partnership_international'){ echo 'right_active'; } ?>" href="partnership-international.php"> International </a></div><hr> -->
					<div class="item">
						<nav class="sidebar">
									<ul class="nav flex-column" id="nav_accordion">
										<li class="nav-item has-submenu">
											<a class="nav-link item-link" href="#"> Bachelor's Degree <i class="fas fa-angle-down"></i> </a>
											<ul class="submenu collapse">
											<li><a class="nav-link item-link <?php if($_SESSION['right_partnership'] == 'partnership_local'){ echo 'right_active'; } ?>" href="partnership-local.php"> Local </a></li>
											<li><a class="nav-link item-link <?php if($_SESSION['right_partnership'] == 'partnership_international'){ echo 'right_active'; } ?>" href="partnership-international.php"> International </a></li>
											</ul>
										</li>
									</ul>
							</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../js/main.js"></script>