<?php 
	$page = 'academics';
	if(session_status() === PHP_SESSION_NONE){
		session_start();
	}
	$_SESSION['right_economic'] = $page;
	$_SESSION['right'] = 'bachelor-demo';

	
	include_once '../include/header.php';
	include_once '../../connection/db.connection.php';     
 ?>
	<!-- Start Web Location -->
	<div class="container">
		<div class="row">
			<div class="col-12 web-location">
				<ul>
					<li><a href="index.php">
						<i class="fa-solid fa-house"></i>
						<i class="fa-solid fa-caret-right"></i>
					</a>
					</li>
					<li>
						<a href="#"> Home > </a>
					</li>
					<li>
					<a href="#"> Academics > </a>
					</li>
					<li>
					<a href="#"> Information Technology </a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- End Web Location -->

	<!-- Main Content-->
	<div class="container">
		<div class="row">
			<!-- Start Content-->
			<div class="col-xxl-9">
				<div class="container title-bg">
					<div class="row title-txt">
					Bachelor's Degree in Information Technology
					</div>
				</div>
				<div id="content-detail">
					<?php  
							$stmt= $conn->prepare("SELECT usea_faculty.fac_name_kh, usea_major.major_name_kh, usea_degree.degree_name_kh, major_info, usea_study_year.study_year_en, usea_semester.semester_name_en, usea_subject.subject_name_en, study_hour, credit FROM usea_study_plan, usea_faculty, usea_major, usea_degree, usea_study_year, usea_semester, usea_subject WHERE usea_study_plan.fac_name = usea_faculty.fac_id &&  usea_study_plan.major_name = usea_major.major_id && usea_study_plan.education_name = usea_degree.degree_id && usea_study_plan.semester_name = usea_semester.semester_id && usea_study_plan.study_year = usea_study_year.study_year_id && usea_study_plan.subject_name = usea_subject.subject_id");
							$stmt->execute();
							$result = $stmt->fetch(PDO::FETCH_ASSOC);
							echo "<pre>";
								print_r($result);
							echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
						<div class="container">
							<h2>Condensed Table</h2>           
							<table class="table table-condensed">
								<thead>
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Email</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>John</td>
									<td>Doe</td>
									<td>john@example.com</td>
								</tr>
								<tr>
									<td>Mary</td>
									<td>Moe</td>
									<td>mary@example.com</td>
								</tr>
								<tr>
									<td>July</td>
									<td>Dooley</td>
									<td>july@example.com</td>
								</tr>
								</tbody>
							</table>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content-sciences-technology.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

