<?php
	// $page= 'upcoming-events';
	$page = 'about_kh';
		if(session_status() == PHP_SESSION_NONE){
			session_start();
		}
		$_SESSION['page'] = $page;
		$_SESSION['right'] = 'upcoming-events-kh';

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
						<a href="#">ព្រឹត្តិការណ៍</a>
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
					<div class="row title-text">
                        ព្រឹត្តិការណ៍នាពេលខាងមុខ
					</div>
				</div>

				<!-- =====> Start Events <===== -->
			<div class="row animate-box mt-5 mb-5" id="events">
				<?php 
					$sql ="SELECT * from usea_events WHERE event_status = 'upcoming' ORDER BY event_date DESC limit 12";
					if (isset($_GET['page'])) {
				    	if ($_GET['page']>1) {
				    		 $sql .= " OFFSET ".  ($_GET['page']-1)*12;
				    	}
				    }
					$stmt= $conn->prepare($sql);
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
					foreach ($result as $key => $value) { ?>
				<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 animate-box d-flex" id="events-card">
					<div class="card">
					  <div class="bg-image hover-overlay" data-mdb-ripple-color="light">
					    <img src="../../media/events/<?php echo $value['event_cover']; ?>" class="img-fluid"/>
					    <a href="#!">
					      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
					    </a>
					  </div>
					  <div class="card-body">
					    <h5 class="card-title" style="font-size: 1rem; color: #002060;"><?php echo substr($value['event_title_en'], 0, 250) . "...";?></h5>
					    <p class="card-text" ><?php echo substr($value['event_description_kh'],0 ,0) ?></p>
					  </div>
					  <div style="text-align: right;">
					  	<a href="#" class="btn btn-sm event-btn px-3 py-1">អានបន្ថែម</a>
					  </div>
					</div>
				</div>
				<?php } ?>

			</div>
			<!-- =====> End Events <===== -->

				<!--Start Pagination -->
				<?php 
				 	$sql = "SELECT count(*) AS CountRecords FROM usea_events WHERE event_status = 'upcoming' ";
				    $stmt = $conn->prepare($sql);
				    $stmt ->execute();
				    $temp = $stmt->fetch(PDO::FETCH_ASSOC);
				    $maxpage =1;
				    if ($temp) {
				    	$maxpage = ceil($temp['CountRecords']/12);
				    }
 				?>
                <ul class="pagination d-flex justify-content-center mt-5 mb-5">
                    <li class="page-item">
                    <a class="page-link bg_btn btn m-0">ត្រឡប់</a>
                    </li>
                    <?php 
                    	for ($i=1; $i <=$maxpage ; $i++) { ?>
                    		
                    		<li class="page-item"><a class="page-link 
                    		<?php 
                    			if (isset($_GET['page'])) {
                    				if ($i==$_GET['page']) {
                    					echo 'active';
                    				}
                    				}else{
                    					if ($i==1) {
                    						echo 'active';
                    					}
                    			}
                    		 ?>" href="upcoming-events.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    	<?php } ?>

                    <a class="page-link bg_btn btn m-0" href="#">បន្ទាប់</a>
                    </li>
                </ul>
                <!--End Logic Pagination -->
         
	</div>

			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content.php';
			?>
	<!-- End Main Content-->

<?php
    include_once '../include/buttom-content.php';
    include_once '../include/footer.php';
?>