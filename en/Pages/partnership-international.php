<?php
	$page = 'partnership';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$_SESSION['page']= $page;
	
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
						<a href="partnership-local">Partnership</a>
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
						Partnership
					</div>
				</div>
				<div id="content-detail">
					<div class="content-president-detail">
					<?php  
							$sql = "SELECT * from usea_partnership WHERE partnership_type = 'international' ORDER BY signed_date DESC limit 8";
							if (isset($_GET['page'])) {
				    			if ($_GET['page']>1) {
				    		 	$sql .= " OFFSET ".  ($_GET['page']-1)*10;
				    			}
				   			 }
							$stmt= $conn->prepare($sql);
							$stmt->execute();
							$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
							// echo "<pre>";
							// print_r($result);
							// echo "</pre>";
						foreach ($result as $key => $value) { ?>
						<div class="col-xxl-12 d-flex mt-3 ">
							<img src="../../media/Partnership/<?php echo $value['partnership_logo']; ?>" alt="" width="125px" height="100px" >
                            <hr>
								<p><?php echo $value['partnership_title_en'];?></p>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- Start Right Content-->
			<?php 
				include_once "../include/right-conent-partnership.php";
			 ?>
		</div>
		<!--Start Pagination -->
				<?php 
				 	$sql = "SELECT count(*) AS CountRecords FROM usea_partnership WHERE partnership_type = 'international' ";
				    $stmt = $conn->prepare($sql);
				    $stmt ->execute();
				    $temp = $stmt->fetch(PDO::FETCH_ASSOC);
				    $maxpage =1;
				    if ($temp) {
				    	$maxpage = ceil($temp['CountRecords']/10);
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
                    		 ?>" href="partnership-international.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    	<?php } ?>

                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
                <!--End Logic Pagination -->
	</div>
	<!-- End Main Content-->
<?php 
	include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
?>

