		<div class="col-xxl-3">
			<div class="right-content-economic">

				<div class="item">
					<a class="nav-link item-link <?php if ($_SESSION['right'] == 'human-resource-kh') {
														echo 'right_active';
													} ?>" href="human-resource.php"> ធនធានមនុស្ស
					</a>
				</div>
				<hr>

				<div class="item">
					<nav class="sidebar">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item has-submenu select-menu">
								<a class="nav-link item-link select-btn" href="student-services.php" onclick="return false">សេវាកម្មនិស្សិត
									<?php
										if ($_SESSION['page'] == 'practucum-internship') {
											echo '<i class="fa-solid fa-angle-up simple i_1"></i>';
										}else{
											echo '<i class="fa-solid fa-angle-down simple i_1"></i>';
										}
									?>
								</a>
								<ul class="submenu collapse
									<?php 
											if ($_SESSION['page'] == 'practucum_internship_kh') {
												echo "show";
											}
									?>">
									<li>
										<a class="nav-link item-link 
										<?php 
												if ($_SESSION['right'] == 'practucum-internship-kh') {
													echo 'right_active';
																		} ?>" 
											aria-current="page" 
											href="practucum-internship.php"> ការអនុវត្ត / កម្មសិក្សា
										</a>
									</li>
									<li><a class="nav-link item-link" href="#"> ទស្សនកិច្ចរបស់និស្សិត </a></li>
									<li><a class="nav-link item-link" href="#"> កីឡា </a></li>
									<li><a class="nav-link item-link" href="#"> សិល្បៈ & ការផ្លាស់ប្តូរវប្បធម៌ </a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<hr>
				</div>

				<!-- <hr> -->

				<div class="item">
					<nav class="sidebar">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item has-submenu select-menu-2">
								<a class="nav-link item-link select-btn-2" href="public-information-center.php" onclick="return false"> បណ្ណាល័យ
									<?php
										if ($_SESSION['page'] == 'public_information_kh') {
											echo '<i class="fa-solid fa-angle-up i_2"></i>';
										}else{
											echo '<i class="fa-solid fa-angle-down i_2"></i>';
										}
									?>
								</a>
								<ul class="submenu collapse
									<?php
											if ($_SESSION['page'] == 'public_information_kh') {
												echo "show";
											}
									?>">
									<li>
										<a class="nav-link item-link 
											<?php 
												if ($_SESSION['right'] == 'public-information-center-kh') {
													echo 'right_active';
											} ?>"
											aria-current="page" 
											href="public-information-center.php"> មជ្ឈមណ្ឌលព័ត៌មានសាធារណៈ
										</a>
									</li>
									<li><a class="nav-link item-link" href="#"> បណ្ណាល័យអាមេរិក </a></li>
									<li><a class="nav-link item-link" href="#"> ឯកសារអេឡិចត្រូនិច </a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<hr>
				</div>


				<div class="item">
					<nav class="sidebar">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item has-submenu select-menu-3">
								<a class="nav-link item-link select-btn-3" href="associate-degree.php" onclick="return false"> និស្សិតឆ្នើម
									<?php
										if ($_SESSION['page'] == 'associate_degree_kh') {
											echo '<i class="fa-solid fa-angle-up i_3"></i>';
										}else{
											echo '<i class="fa-solid fa-angle-down i_3"></i>';
										}
									?>
								</a>
								<ul class="submenu collapse
									<?php
											if ($_SESSION['page'] == 'associate_degree_kh') {
												echo "show";
											}
									?>">
									<li>
										<a class="nav-link item-link 
											<?php 
												if ($_SESSION['right'] == 'associate-degree-kh') {
													echo 'right_active';
											} ?>"
											aria-current="page" 
											href="associate-degree.php"> ថ្នាក់បរិញ្ញាបត្ររង
										</a>
									</li>
									<li><a class="nav-link item-link" href="#"> ថ្នាក់បរិញ្ញាបត្រ </a></li>
									<li><a class="nav-link item-link" href="#"> ថ្នាក់ក្រោយបរិញ្ញាបត្រ </a></li>
									<li><a class="nav-link item-link" href="#"> កម្មវិធីភាសាអង់គ្លេសទូទៅ </a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<hr>
				</div>

				<div class="item">
					<a class="nav-link item-link <?php if ($_SESSION['right'] == 'career-kh') {
														echo 'right_active';
													} ?>" href="career.php"> ការងារ
					</a>
				</div>
				<hr>

				<div class="item">
					<nav class="sidebar">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item has-submenu select-menu-4">
								<a class="nav-link item-link select-btn-4" href="#" onclick="return false">  អាហារូបករណ៍
									<?php
										if ($_SESSION['page'] == 'university_kh') {
											echo '<i class="fa-solid fa-angle-up i_4"></i>';
										}else{
											echo '<i class="fa-solid fa-angle-down i_4"></i>';
										}
									?>
								</a>
								<ul class="submenu collapse
									<?php
											if ($_SESSION['page'] == 'university_kh') {
												echo "show";
											}
									?>">
									<li>
										<a class="nav-link item-link 
											<?php 
												if ($_SESSION['right'] == 'scholarship-university-kh') {
													echo 'right_active';
											} ?>"
											aria-current="page" 
											href="scholarship-university.php"> សាកលវិទ្យាល័យ
										</a>
									</li>
									<li><a class="nav-link item-link
											<?php 
												if ($_SESSION['right'] == 'scholarship-other-institute-kh') {
													echo 'right_active';
											} ?>
									" href="scholarship-other-institute.php"> ស្ថាប័នផ្សេងទៀត </a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<hr>
				</div>

				<div class="item">
					<a class="nav-link item-link <?php if ($_SESSION['right'] == 'alumni-right-kh') {
										echo 'right_active';
													} ?>" href="alumni.php"> អតីតនិស្សិត
					</a>
				</div>
				<hr>

				<div class="item">
					<nav class="sidebar">
						<ul class="nav flex-column" id="nav_accordion">
							<li class="nav-item has-submenu select-menu-5">
								<a class="nav-link item-link select-btn-5" href="facilities.php" onclick="return false"> បរិក្ខារ
									<?php
										if ($_SESSION['page'] == 'facilities_kh') {
											echo '<i class="fa-solid fa-angle-up i_5"></i>';
										}else{
											echo '<i class="fa-solid fa-angle-down i_5"></i>';
										}
									?>
								</a>
								<ul class="submenu collapse
									<?php
											if ($_SESSION['page'] == 'facilities_kh') {
												echo "show";
											}
									?>">
									<li>
										<a class="nav-link item-link 
											<?php 
												if ($_SESSION['right'] == 'facilities-right-kh') {
													echo 'right_active';
											} ?>"
											aria-current="page" 
											href="facilities.php"> អគារសិក្សា
										</a>
									</li>
									<li><a class="nav-link item-link" href="#"> បន្ទប់សិក្សា </a></li>
									<li><a class="nav-link item-link" href="#"> បន្ទប់អនុវត្តន៍កុំព្យូទ័រ </a></li>
									<li><a class="nav-link item-link" href="#"> ការិយាល័យជួរមុខ </a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<hr>
				</div>

				<div class="item">
					<a class="nav-link item-link <?php if ($_SESSION['right'] == 'Policies-Strategies-kh') {
										echo 'right_active';
													} ?>" href="policies-strategies.php"> គោលការណ៍ និងយុទ្ធសាស្រ្ត
					</a>
				</div>
				<hr>

				<div class="item">
					<a class="nav-link item-link <?php if ($_SESSION['right'] == 'form-download-kh') {
										echo 'right_active';
													} ?>" href="form-download.php"> ទាញយកសំណុំបែបបទ USEA
					</a>
				</div>
				<hr>

			</div>
		</div>
	</div>
</div>

<script src="../../js/main.js"></script>