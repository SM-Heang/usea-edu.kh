<?php
$page = 'academics';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
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
            <div class="container" style="background-color:#002060;">
                <div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
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
                <!-- <section>
					<?php
					$stmt = $conn->prepare("SELECT * from usea_article WHERE article_id =401");
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
					// echo "<pre>";
					// print_r($result);
					// echo "</pre>";
					foreach ($result as $key => $value) { ?>
						<div class="container">
							<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
								<button class="nav-link active" style="font-size: 18px; color: #002060;" id="nav-foundation-tab" data-bs-toggle="tab" data-bs-target="#nav-foundation" type="button" role="tab" aria-controls="nav-foundation" aria-selected="true">
									General Education Subject
								</button>
								<button class="nav-link" style="font-size: 18px; color: #002060;" id="nav-second-tab" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">
									Core Major Subjects
								</button>
								<button class="nav-link" style="font-size: 18px; color: #002060;" id="nav-third-tab" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">
									Basic Major Subjects
								</button>
								<button class="nav-link" style="font-size: 18px; color: #002060;" id="nav-forth-tab" data-bs-toggle="tab" data-bs-target="#nav-forth" type="button" role="tab" aria-controls="nav-forth" aria-selected="false">
									Minor Subjects
								</button>
							</div>
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade active p-3" id="nav-foundation" role="tabpane1" aria-labelledby="nav-foundation-tab">
									<table class="table text-center">
										<thead style="font-size: 18px; color: #002060;">
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
												<td>Principles of Marketing</td>
												<td>3</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Principles of Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Marketing Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>5</td>
												<td>FA2: Maintaining Financial Records II </td>
												<td>3</td>
											</tr>
											<tr>
												<td>6</td>
												<td>F2: Management Accounting I</td>
												<td>3</td>
											</tr>
											<tr>
												<td>7</td>
												<td>F2: Management Accounting II</td>
												<td>3</td>
											</tr>
											<tr>
												<td>8</td>
												<td>F9: Financial Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>9</td>
												<td>QuickBooks</td>
												<td>3</td>
											</tr>
											<tr>
												<td>10</td>
												<td>Money and Banking</td>
												<td>3</td>
											</tr>
											<tr>
												<td>11</td>
												<td>Cambodian Business Law</td>
												<td>3</td>
											</tr>
											<tr>
												<td>12</td>
												<td>Statistics for Business and Economics</td>
												<td>3</td>
											</tr>
											<tr>
												<td>13</td>
												<td>Research Methodology</td>
												<td>3</td>
											</tr>
											<tr>
												<td>14</td>
												<td>International Trade and Policy</td>
												<td>3</td>
											</tr>
											<tr>
												<td>15</td>
												<td>Human Resource Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>16</td>
												<td>Quantitative Methods for Business and Economics</td>
												<td>3</td>
											</tr>
										</tbody>

									</table>
								</div>
								<div class="tab-pane fade active p-3" id="nav-second" role="tabpane1" aria-labelledby="nav-second-tab">
									<table class="table text-center">
										<thead style="font-size: 18px; color: #002060;">
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
												<td>Principles of Marketing</td>
												<td>3</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Principles of Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Marketing Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>5</td>
												<td>FA2: Maintaining Financial Records II </td>
												<td>3</td>
											</tr>
											<tr>
												<td>6</td>
												<td>F2: Management Accounting I</td>
												<td>3</td>
											</tr>
											<tr>
												<td>7</td>
												<td>F2: Management Accounting II</td>
												<td>3</td>
											</tr>
											<tr>
												<td>8</td>
												<td>F9: Financial Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>9</td>
												<td>QuickBooks</td>
												<td>3</td>
											</tr>
											<tr>
												<td>10</td>
												<td>Money and Banking</td>
												<td>3</td>
											</tr>
											<tr>
												<td>11</td>
												<td>Cambodian Business Law</td>
												<td>3</td>
											</tr>
											<tr>
												<td>12</td>
												<td>Statistics for Business and Economics</td>
												<td>3</td>
											</tr>
											<tr>
												<td>13</td>
												<td>Research Methodology</td>
												<td>3</td>
											</tr>
											<tr>
												<td>14</td>
												<td>International Trade and Policy</td>
												<td>3</td>
											</tr>
											<tr>
												<td>15</td>
												<td>Human Resource Management</td>
												<td>3</td>
											</tr>
											<tr>
												<td>16</td>
												<td>Quantitative Methods for Business and Economics</td>
												<td>3</td>
											</tr>
										</tbody>

									</table>
								</div>
								<div class="tab-pane fade active p-3" id="nav-third" role="tabpane1" aria-labelledby="nav-third-tab">
									<table class="table text-center">
										<thead style="font-size: 18px; color: #002060;">
											<th>No</th>
											<th>Subject Description</th>
											<th>Credit</th>
										</thead>
										<tbody class="table-group-divider">
											<tr>
												<td>1</td>
												<td>Economic Development</td>
												<td>3</td>
											</tr>
											<tr>
												<td>2</td>
												<td>International Economics</td>
												<td>3</td>
											</tr>
											<tr>
												<td>3</td>
												<td>International Political Economy</td>
												<td>3</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Regional/Asean Economics</td>
												<td>3</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Econometrics</td>
												<td>3</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Managerial Economics</td>
												<td>3</td>
											</tr>
										</tbody>

									</table>
								</div>
								<div class="tab-pane fade active p-3" id="nav-forth" role="tabpane1" aria-labelledby="nav-forth-tab">
									<table class="table">
										<thead style="font-size: 18px; color: #002060;">
											<th>No</th>
											<th>Subject Description</th>
											<th>Credit</th>
										</thead>
										<tbody class="table-group-divider">
											<tr>
												<td>1</td>
												<td>Business Communication and Ethics</td>
												<td>3</td>
											</tr>
											<tr>
												<td>2</td>
												<td>English Language III</td>
												<td>3</td>
											</tr>
											<tr>
												<td>3</td>
												<td>English Language IV</td>
												<td>3</td>
											</tr>
											<tr>
												<td>4</td>
												<td>English Language V</td>
												<td>3</td>
											</tr>
											<tr>
												<td>5</td>
												<td>English Language VI</td>
												<td>3</td>
											</tr>
											<tr>
												<td>6</td>
												<td>English Language VII</td>
												<td>3</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Chinese Language III</td>
												<td>3</td>
											</tr>
											<tr>
												<td>8</td>
												<td>Chinese Language IV</td>
												<td>3</td>
											</tr>
											<tr>
												<td>9</td>
												<td>Chinese Language V</td>
												<td>3</td>
											</tr>
											<tr>
												<td>10</td>
												<td>Chinese Language VI</td>
												<td>3</td>
											</tr>
											<tr>
												<td>11</td>
												<td>Chinese Language VII</td>
												<td>3</td>
											</tr>
										</tbody>

									</table>
								</div>
							</div>

						</div>
					<?php } ?>
				</section> -->
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