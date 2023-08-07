<?php
$page = 'academics';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['page'] = $page;
$_SESSION['right_economic'] = $page;
$_SESSION['right'] = 'bachelor-laws';

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
                    <a href="#"> Laws </a>
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
                    Bachelor's Degree in Laws
                </div>
            </div>

            <div id="content-detail">
                <?php
				$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =382");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				// echo "<pre>";
				// print_r($result);
				// echo "</pre>";
				foreach ($result as $key => $value) { ?>
                <!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
                <p>
                    <?php
						echo $value['article_description_en'];
						?>
                </p>
                <?php } ?>
                <section>
                    <div class="container">
						<div class="nav-header justify-content-center align-items-center px-0 px-lg-4">
								<ul class="nav nav-pills d-block d-lg-flex" id="pills-tab" role="tablist">
									<li class="nav-item mt-0" role="presentation">
										<button class="nav-link active" id="pills-ges-tab" data-bs-toggle="pill" data-bs-target="#pills-ges" type="button" role="tab" aria-controls="pills-ges" aria-selected="true">General Education Subjects</button>
									</li>
									<li class="nav-item mt-2 mt-lg-0" role="presentation">
										<button class="nav-link" id="pills-cms-tab" data-bs-toggle="pill" data-bs-target="#pills-cms" type="button" role="tab" aria-controls="pills-cms" aria-selected="false">Core Major Subjects</button>
									</li>
									<li class="nav-item mt-2 mt-lg-0" role="presentation">
										<button class="nav-link" id="pills-bms-tab" data-bs-toggle="pill" data-bs-target="#pills-bms" type="button" role="tab" aria-controls="pills-bms" aria-selected="false">Basic Major Subjects</button>
									</li>
									<li class="nav-item mt-2 mt-lg-0" role="presentation">
										<button class="nav-link" id="pills-mis-tab" data-bs-toggle="pill" data-bs-target="#pills-mis" type="button" role="tab" aria-controls="pills-mis" aria-selected="false">Minor Subjects</button>
									</li>
								</ul>
							</div>
						
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane show active" id="pills-ges" role="tabpanel" aria-labelledby="pills-ges-tab" tabindex="0">
								<!-- <table class="table text-center">
											<thead>
												<th>No</th>
												<th>Subject Description</th>
												<th>Credit</th>
											</thead>
											<tbody class="table-group-divider">
												<tr>
													<td>1</td>
													<td>Microeconomics</td>
													<td>3</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Public Administration</td>
													<td>3</td>
												</tr>
												<tr>
													<td>3</td>
													<td>History and Culture of South-East Asia</td>
													<td>3</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Critical Thinking and Personal Development</td>
													<td>3</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Computer for Administration</td>
													<td>3</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Mathematics for Business and Economics</td>
													<td>3</td>
												</tr>
												<tr>
													<td>7</td>
													<td>English Language I</td>
													<td>3</td>
												</tr>
												<tr>
													<td>8</td>
													<td>English Language II</td>
													<td>3</td>
												</tr>
												<tr>
													<td>9</td>
													<td>Chinese Language I</td>
													<td>3</td>
												</tr>
												<tr>
													<td>10</td>
													<td>Chinese Language II</td>
													<td>3</td>
												</tr>
												<tr>
													<td>11</td>
													<td>Introduction to Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>12</td>
													<td>History of Political and Social Events</td>
													<td>3</td>
												</tr>
											</tbody>

								</table> -->
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =401");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_en'];
											?>
									</p>
								<?php } ?>
							</div>
							<div class="tab-pane" id="pills-cms" role="tabpanel" aria-labelledby="pills-cms-tab" tabindex="0">
								<!-- <table class="table text-center">
											<thead style="font-size: 18px; color: #002060;">
												<th>No</th>
												<th>Subject Description</th>
												<th>Credit</th>
											</thead>
											<tbody class="table-group-divider">
												<tr>
													<td>1</td>
													<td>Civil Law I: Persons, Real rights, and Obligation </td>
													<td>3</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Civil Law II: Contract and Security Rights </td>
													<td>3</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Public Function Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Commercial and Company Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Constitutional Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>6</td>
													<td>General Administrative Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>7</td>
													<td>General Criminal Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>8</td>
													<td>Special Criminal Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>9</td>
													<td>History of Political Ideas</td>
													<td>3</td>
												</tr>
												<tr>
													<td>10</td>
													<td>Labor Law and Social Security Law </td>
													<td>3</td>
												</tr>
												<tr>
													<td>11</td>
													<td>Legal Methodology I</td>
													<td>3</td>
												</tr>
												<tr>
													<td>12</td>
													<td>Legal Methodology II</td>
													<td>3</td>
												</tr>
												<tr>
													<td>13</td>
													<td>Land Management and Urban Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>14</td>
													<td>Public Liberty Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>15</td>
													<td>Legal Clinic and Alternative Dispute Resolution </td>
													<td>3</td>
												</tr>
												<tr>
													<td>16</td>
													<td>Taxation Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>17</td>
													<td>International Relation and Public International Law</td>
													<td>3</td>
												</tr>
											</tbody>

								</table> -->
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =402");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_en'];
											?>
									</p>
								<?php } ?>
							</div>
							<div class="tab-pane" id="pills-bms" role="tabpanel" aria-labelledby="pills-bms-tab" tabindex="0">
								<!-- <table class="table text-center">
											<thead>
												<th>No</th>
												<th>Subject Description</th>
												<th>Credit</th>
											</thead>
											<tbody class="table-group-divider">
												<tr>
													<td>1</td>
													<td>Civil Procedure</td>
													<td>3</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Moot Court on Fair Trial</td>
													<td>3</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Research Methodology</td>
													<td>3</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Intellectual Property Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Civil Law III: Family and Succession Law</td>
													<td>3</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Criminal Procedure</td>
													<td>3</td>
												</tr>
												
											</tbody>

								</table> -->
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =403");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_en'];
											?>
									</p>
								<?php } ?>
							</div>
							<div class="tab-pane" id="pills-mis" role="tabpanel" aria-labelledby="pills-mis-tab" tabindex="0">
								<!-- <table class="table text-center">
											<thead>
												<th>No</th>
												<th>Subject Description</th>
												<th>Credit</th>
											</thead>
											<tbody class="table-group-divider">
												<tr>
													<td>1</td>
													<td>English Language III</td>
													<td>3</td>
												</tr>
												<tr>
													<td>2</td>
													<td>English Language IV</td>
													<td>3</td>
												</tr>
												<tr>
													<td>3</td>
													<td>English Language V</td>
													<td>3</td>
												</tr>
												<tr>
													<td>4</td>
													<td>English Language VI</td>
													<td>3</td>
												</tr>
												<tr>
													<td>5</td>
													<td>English Language VII</td>
													<td>3</td>
												</tr>
												<tr>
													<td>6</td>
													<td>Chinese Language III</td>
													<td>0</td>
												</tr>
												<tr>
													<td>7</td>
													<td>Chinese Language IV</td>
													<td>0</td>
												</tr>
												<tr>
													<td>8</td>
													<td>Chinese Language V</td>
													<td>0</td>
												</tr>
												<tr>
													<td>9</td>
													<td>Chinese Language VI</td>
													<td>0</td>
												</tr>
												<tr>
													<td>10</td>
													<td>Chinese Language VII</td>
													<td>0</td>
												</tr>
												
											</tbody>

								</table> -->
								<?php
									$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =404");
									$stmt->execute();
									$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
									// echo "<pre>";
									// print_r($result);
									// echo "</pre>";
									foreach ($result as $key => $value) { ?>
									<!-- <img src="media/events/independent_days.jpg" alt="independent_days" width="375px" height="245px"> -->
									<p>
										<?php
											echo $value['article_description_en'];
											?>
									</p>
								<?php } ?>
							</div>
							
						</div>
                    </div>
				</section>
            </div>
        </div>
        <!-- Start Right Content-->
        <?php
		include_once '../include/right-content-laws.php';
		?>
    </div>
</div>
<!-- End Main Content-->

<?php
// include_once 'include/buttom-content.php';
include_once '../include/buttom-content.php';

// include_once 'include/footer.php';
include_once '../include/footer.php';

?>