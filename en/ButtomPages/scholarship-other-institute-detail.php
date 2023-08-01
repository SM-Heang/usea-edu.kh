<?php
$page = 'scholarship-other';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

$_SESSION['page'] = $page;
$_SESSION['right'] = 'scholarship-other-institute';
include_once '../include/header.php';
include_once '../../connection/db.connection.php';
include_once '../../function.php';
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
					<a href="#">Scholarship Other Institution</a>
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
				Scholarship Other Institution
				</div>
			</div>
			<div class="scholarship-content">
                <div class="row">
                    <?php
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM usea_scholarship WHERE scholarship_id= $id";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        }
                    ?>
                    <div class="col-xxl-12 scholarsip-university-info">
                        <div class="col-xxl-3 scholarship-logo">
                            <img src="../../media/scholarship/institution/<?php echo $result['scholarship_img'];?>" alt="">
                        </div>
                        <div class="col-xxl-9 university-info">
                            <hr style="border: 1px solid #002060;" width="100%;">
                            <ul>
                                <li><i class="fa-solid fa-building-columns"></i>  <?php echo $result['institutions'];?></i></li>
                            </ul>
                            <ul style="display: flex;">
                                <li style=" margin-right: 10px;"><i class="fa-solid fa-graduation-cap"> </i> <?php echo $result['education_level'];?></li>
                                <li><i class="fa-solid fa-book-open"></i> <?php echo $result['education_major']?></li>
                            </ul>
                            <ul>
                                <li><i class="fa-solid fa-location-dot"></i>  <?php echo $result['location'];?></li>
                                
                            </ul>
                            <ul style="display: flex;">
                                <li style=" margin-right: 10px;"><i class="fa-solid fa-calendar-xmark"></i>  ថ្ងៃទី
                                    <?php 
                                        $days=date("d",strtotime($result['expire_date'])); 
                                        convertNumber($days);
                                    ?> ខែ
                                    <?php 
                                    $month = date("M",strtotime($result['expire_date']));
                                    convertMonth($month);
                                    ?> 
                                    ឆ្នាំ
                                    <?php 
                                        $year = date("Y",strtotime($result['expire_date']));
                                        convertNumber($year);
                                    ?></li>
                                    <li><i class="fa-solid fa-clock"></i>  
                                    <?php 
                                    $times =date('h:i', strtotime($result['expire_date'])); 
                                        convertNumber($times);
                                    $shift =date('a', strtotime($result['expire_date'])) ;
                                    convertShift($shift);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <hr style="border: 1px solid #002060;" width="100%;">
                <div class="​​col-xxl-12 scholarship-detail text-center">
                    <div class="container border">
                         <img src="../../media/scholarship/institution/details/<?php echo $result['scholarship_detail_img'] ?>" alt="" width="100%;">
                    </div>
                </div>
            </div>

		</div>
		<!-- Start Right Content-->
		<?php
		include_once '../include/right-content-buttom.php';
		?>
	</div>
</div>
<!-- End Main Content-->


<?php
include_once '../include/right-content-buttom.php';
include_once '../include/footer.php';
?>