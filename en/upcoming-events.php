<?php
    include_once 'include/header.php';
    include_once '../connection/db.connection.php';

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
						<a href="#">Events</a>
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
                        Past Events
					</div>
				</div>

				<!-- =====> Start Events <===== -->
			<div class="row animate-box" id="events">
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
					<div class="card" style="background-color: #FFFCF3;">
					  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
					    <img src="../media/events/<?php echo $value['event_cover']; ?>" class="img-fluid"/>
					    <a href="#!">
					      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
					    </a>
					  </div>
					  <div class="card-body">
					    <h5 class="card-title" style="font-size: 1rem; color: #002060;"><?php echo substr($value['event_title_en'], 0, 250) . "...";?></h5>
					    <p class="card-text" ><?php echo substr($value['event_description_en'],0 ,0) ?></p>
					  </div>
					  <div style="text-align: right;">
					  	<a href="#" class="btn btn-danger btn-sm">Read More</a>
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
                <ul class="pagination float-right mt-3">
                    <li class="page-item">
                    <a class="page-link">Previous</a>
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

                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                <!--End Logic Pagination -->
         
	</div>

			<!-- Start Right Content-->
			<div class="col-xxl-3">
				<div class="right-content">
					<ul>
						<li><a href="history-logo.php">History & LOGO Meaning</a></li><br><hr>
						<li><a href="president-message.php">President Message</a></li><br><hr>
						<li><a href="vision-mision-corevalue.php">Vision, Mission & Core Value</a></li><br><hr>
						<li><a href="usea-structure">University Structure</a></li><br><hr>
						<li><a href="#">Recognition</a></li><br><hr>
						<li>
							<a href="#" >Events</a><br><hr>							
							<ul>
								<li><a href="upcoming-events.php"  class="active">Upcoming Events</a><br><hr></li>
								<li><a href="events.php">Past Events</a><br><hr></li>
							</ul>
                        </li><br><hr>
						<li><a href="location.php">Location</a></li><br><hr>
					</ul>
				</div>
			</div>
	<!-- End Main Content-->

<?php
    include_once 'include/buttom-content.php';
    include_once 'include/footer.php';
?>