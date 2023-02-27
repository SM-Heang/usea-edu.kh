<?php
$page = 'publication';
// $page = 'publication';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['page'] = $page;

$_SESSION['right'] = 'publication';

include_once '../include/header.php';
include_once '../../connection/db.connection.php';
?>

<!-- Start Web Location -->
<div>
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
						<a href="#">Publication</a>
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
						Publication
					</div>
				</div>

				<!-- =====> Start Events <===== -->
				<div class="row animate-box mt-5 mb-5" id="events">
					<?php
					$sql = "SELECT * FROM usea_article WHERE categories_id = 7 AND keywords = 'Research & Publication' ORDER BY article_id DESC";
					// if (isset($_GET['page'])) {
					// 	if ($_GET['page'] > 1) {
					// 		$sql .= " OFFSET " . ($_GET['page'] - 1) * 12;
					// 	}
					// }
					// echo $sql;
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
					// echo "<pre>";
					// print_r($result);
					// echo "</pre>";
					foreach ($result as $key => $value) { ?>
						<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 animate-box d-flex gx-2 gy-2" id="events-card">
							<div class="card">
								<div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="light" style="height: 200px; width: auto;" >
									
									<a href="#">
										<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
									</a>
								</div>
								<div class="card-body">
									<h5 class="card-title" style="font-size: 1rem; color: #002060;">
										<?php echo $value['article_title_en']?>
									</h5>
									<p class="card-text">
										<?php echo substr($value['article_description_en'],0,0) . '...'?>
									</p>
								</div>
								<div style="text-align: right;">
									<a href="events.php?" class="btn btn-danger btn-sm">Read More</a>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
				<!-- =====> End Events <===== -->

				<!--Start Pagination -->
				<?php
				$sql = "SELECT count(*) AS CountRecords FROM usea_article WHERE categories = 7 AND keywords  ";
				$stmt = $conn->prepare($sql);
				$stmt->execute();
				$temp = $stmt->fetch(PDO::FETCH_ASSOC);
				$maxpage = 1;
				if ($temp) {
					$maxpage = ceil($temp['CountRecords'] / 12);
				}
 
				?>
				<ul class="pagination d-flex justify-content-center mt-5 mb-3">
					<li class="page-item">
						<a class="page-link bg_btn btn m-0"​ href="events.php?page=<?php if (isset($_GET['page']) && $_GET['page'] > 1)
							echo $_GET['page'] - 1;
						else
							echo 1;
						?>">​Previous</a>
					</li>
					<!-- Loop Page Number -->
					<?php
					for ($i = 1; $i <= $maxpage; $i++) { ?>

						<li class="page-item"><a class="page-link 
													<?php
													if (isset($_GET['page'])) {
														if ($i == $_GET['page']) {
															echo 'active';
														}
													} else {
														if ($i == 1) {
															echo 'active';
														}
													}
													?>" href="events.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>

					<a class="page-link bg_btn btn m-0" href="events.php?page=<?php 
					
					if (isset($_GET['page'])){
						if($_GET['page']==$maxpage){
							echo $maxpage;
						}else{
							echo $_GET['page']+1;
						}
					}else{
						echo 2;
					}
						?>">Next</a>
					</li>
				</ul>
				<!--End Logic Pagination -->

			</div>

			<!-- Start Right Content-->
			<?php
			include_once "../include/right-content-research.php";
			?>
			<!-- End Main Content-->

			<?php
			include_once '../include/buttom-content.php';
			include_once '../include/footer.php';
			?>