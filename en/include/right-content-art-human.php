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
									
									$_SESSION['right'] == 'bachelor-khmer-literature' 

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
									$_SESSION['right'] == 'bachelor-khmer-literature'
								){
									echo 'show';
								}
							?>
						
						">							
							<li><a class="nav-link item-link <?php if($_SESSION['right'] == 'bachelor-khmer-literature'){
								echo 'right_active';
							}?>" href="../BachelorDegree/bachelor-khmer-literature.php"> Khmer Literature
								</a> </li>
							
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