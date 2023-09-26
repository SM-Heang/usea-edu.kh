<?php
    $page = 'career';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['page']= $page;
    $_SESSION['right']= 'career-right';
    include_once '../include/header.php';
    include_once '../../connection/db.connection.php';
    include_once '../../function.php';

?>
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
                    <a href="#">Career</a>
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
                Career
                </div>
            </div>
            <div class="row">
                    <?php
                
                        $sql = "SELECT 
                        career_id as id,
                        career_img as logo,
                        career_position_en as position,
                        career_organization_en as organization,
                        location_en as location,
                        expire_date
                        FROM usea_career WHERE keyword = 'career' LIMIT 5";
                        if (isset($_GET['page'])) {
                            if ($_GET['page'] > 1) {
                                $sql .= " OFFSET " . ($_GET['page'] - 1) * 5;
                            }
                        }
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        // var_dump($result);
                        foreach($result as $key => $value) {
                    ?>
                    <div class="col-xxl-12 career-card">
                        <div class="col-xxl-2 career-img">
                            <a href="career-detail.php?id=<?php echo $value['id']?>"><img src="../../media/career/logos/<?php echo $value['logo'] ?>" alt=""></a>
                        </div>
                        <div class="col-xxl-10 career-info">
                            <div class="row">
                                <span><?php echo $value['position']?></span>
                                <hr width="100%;" style="color: #002060;">
                                <span class="span-career-info"><i class="fa-solid fa-building-columns"> <?php echo $value['organization'] ?></i></span>
                                <span class="span-career-info"><i class="fa-solid fa-location-dot"></i>  <?php echo $value['location'];?></span>
                                <span class="span-career-info"><i class="fa-solid fa-calendar-xmark"></i>  
                                    <?php 
                                        $day = date("d",strtotime($value['expire_date']));
                                        echo $day;
                                    ?>
                                    <?php 
                                        $month = date("M",strtotime($value['expire_date']));
                                        echo $month;
                                    ?> 
                                    <?php 
                                        $year=date("Y",strtotime($value['expire_date']));
                                        echo $year;
                                    ?>
                                </span> 
                            </div>                    
                        </div>
                    </div>
                    <?php } ?>
                </div>


                <!--Start Pagination -->
				<?php
				$sql = "SELECT count(*) AS CountRecords FROM usea_career WHERE keyword = 'career' ";
				$stmt = $conn->prepare($sql);
				$stmt->execute();
				$temp = $stmt->fetch(PDO::FETCH_ASSOC);
				$maxpage = 1;
				if ($temp) {
					$maxpage = ceil($temp['CountRecords'] / 5);
				}
 
				?>
				<ul class="pagination d-flex justify-content-center mt-5 mb-3">
					<li class="page-item">
						<a class="page-link bg_btn btn m-0" href="career.php?page=<?php if (isset($_GET['page']) && $_GET['page'] > 1)
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
													?>" href="career.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>

					<a class="page-link bg_btn btn m-0" href="career.php?page=<?php 
					
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
               
    

<?php
    include_once '../include/right-content-buttom.php';
    include_once '../include/footer.php';
?>




