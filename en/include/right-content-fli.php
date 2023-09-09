<div class="col-xxl-3">
	<div class="right-content-economic">
		<div class="item"><a class="item-link <?php if ($_SESSION['right'] == 'foreign-language-institute') {
			echo 'right_active';
		} ?>" href="../vission-Mission/vision-mision-corevalue-fli.php">Vision & Mission</a></div>
		<!-- <hr> -->
		<div class="item">
			<nav class="sidebar">
				<ul class="nav flex-column" id="nav_accordion">
					<li class="nav-item has-submenu select-menu">
						<a class="nav-link item-link select-btn" href="#"> Bachelor's Degree
							<!-- <i class="fas fa-angle-down"></i> -->

							<?php
							if (
								$_SESSION['right'] == 'bachelor-english-for-translation' ||
								$_SESSION['right'] == 'bachelor-english-for-business' ||
								$_SESSION['right'] == 'bachelor-tefl' ||
								$_SESSION['right'] == 'bachelor-teaching-english-children'
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
							$_SESSION['right'] == 'bachelor-english-for-translation' ||
							$_SESSION['right'] == 'bachelor-english-for-business' ||
							$_SESSION['right'] == 'bachelor-tefl' ||
							$_SESSION['right'] == 'bachelor-teaching-english-children'
						) {
							echo "show";
						}
						?>
						
						">
							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-english-for-translation') {
											echo 'right_active';
										} ?>" href="../BachelorDegree/bachelor-english-for-translation.php"> English for Translation and Interpreting
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-english-for-business') {
											echo 'right_active';
										} ?>" href="../BachelorDegree/bachelor-english-for-business.php"> English for International Business
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-tefl') {
											echo 'right_active';
										} ?>" href="../BachelorDegree/bachelor-tefl.php"> Teaching English as a Foreign Language
								</a>
							</li>

							<li>
								<a class="nav-link item-link 
										<?php if ($_SESSION['right'] == 'bachelor-teaching-english-children') {
											echo 'right_active';
										} ?>" href="../BachelorDegree/bachelor-teaching-english-to-children.php"> Teaching English to Children
								</a>
							</li>
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