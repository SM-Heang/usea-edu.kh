<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if($_SESSION['right'] == 'faculty-science-art-human'){
			echo 'right_active';
		}?>"
				href="../vission-Mission/vision-mision-corevalue-science-technology.php">Vision & Mission</a></div>
		<hr>
		<div class="item">
		</div>

		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#"> Bachelor's Degree 
							
						<?php 
								if(
									$_SESSION['right'] == 'bachelor-curriculum-development' ||
									$_SESSION['right'] == 'bachelor-education-management' ||
									$_SESSION['right'] == 'bachelor-history' ||
									$_SESSION['right'] == 'bachelor-khmer-literature' ||
									$_SESSION['right'] == 'bachelor-philosophy' 

								){

									echo '<i class="fa-solid fa-angle-up i_1"></i>';
								} else {
									echo '<i class="fa-solid fa-angle-down i_1"></i>';
								}
							?>
					
					</a>
						<ul class="submenu collapse 
							<?php 
								if(
									$_SESSION['right'] == 'bachelor-curriculum-development' ||
									$_SESSION['right'] == 'bachelor-education-management' ||
									$_SESSION['right'] == 'bachelor-history' ||
									$_SESSION['right'] == 'bachelor-khmer-literature' ||
									$_SESSION['right'] == 'bachelor-philosophy' 

								){
									echo 'show';
								}
							?>
						
						">
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-curriculum-development'){
								echo 'right_active';
							}?>" aria-current="page"
									href="../BachelorDegree/bachelor-curriculum-development.php"> Curriculum Development </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-education-management'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-education-management.php"> Education Management </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-history'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-history.php"> History </a></li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-khmer-literature'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-khmer-literature.php"> Khmer Literature
								</a> </li>
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-philosophy'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-philosophy.php"> Philosophy </a> </li>
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