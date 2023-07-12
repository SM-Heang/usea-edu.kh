<?php
$page = 'about';
// $page = 'about';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['page'] = $page;

$_SESSION['right'] = 'event-s';

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
						<a href="events.php">Events</a>
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
					<div class="row title-text" style="color: white; font-size: 16pt; padding: 5pt;">
						Past Events
					</div>
				</div>

				<!-- =====> Start Events <===== -->
				<div class="row mt-3 mb-5 g-3" id="events">
					<?php
					$sql = "SELECT * from usea_events WHERE event_status = 'past' ORDER BY event_date DESC limit 12";
					if (isset($_GET['page'])) {
						if ($_GET['page'] > 1) {
							$sql .= " OFFSET " . ($_GET['page'] - 1) * 12;
						}
					}
					// echo $sql;
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
					// echo "<pre>";
					// print_r($_GET);
					// echo "</pre>";
					foreach ($result as $key => $value) { ?>
						<div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 mb-sm-2 mb-lg-2 mb-xxl-0" id="events-card">
							<div class="card w-50 h-100 w-100 animate-card">
								<img src="../../media/events/<?php echo $value['event_cover']; ?>" alt="aquare" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo substr($value['event_title_en'], 0, 140) . "..."; ?></h5>
								</div>
								<div class="card-footer text-end p-1">
									<a href="event-detail.php?id=<?php echo $value['event_id'] ?>" class="btn btn-sm event-btn text-end py-1 px-3">Read More</a>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
				<!-- =====> End Events <===== -->

				<!--Start Pagination -->
				<?php
				$sql = "SELECT count(*) AS CountRecords FROM usea_events WHERE event_status = 'past' ";
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
						<a class="page-link bg_btn btn m-0" href="events.php?page=<?php if (isset($_GET['page']) && $_GET['page'] > 1)
							echo $_GET['page'] - 1;
						else
							echo 1;
						?>">Previous</a>
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
			include_once "../include/right-content.php";
			?>
			<!-- End Main Content-->

			<?php
			include_once '../include/buttom-content.php';
			include_once '../include/footer.php';
			?>