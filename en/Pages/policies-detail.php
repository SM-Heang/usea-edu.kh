<?php
    $page = 'policies-detail';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'policies-detail';
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
						<a href="#">Policies</a>
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
			<div class="col-12">
				<div class="container" style="background-color:#002060;">
					<div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
                    Policies
					</div>
				</div>
				<div class="container mt-3 mb-3">
					<div class="row">
                        <div class="col-12">
                                <?php
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                        $sql = "SELECT * FROM usea_policies WHERE id=$id";
                                        $stmt = $conn->prepare($sql);
                                        $stmt->execute();
                                        $temp = $stmt->fetch(PDO::FETCH_ASSOC);
                                        // var_dump($temp);
                                    }
									
								?>
                            <iframe src="../../media/policies/<?php echo $temp['filename']?>#toolbar=0" frameborder="1" width="100%" height=975px></iframe>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Content-->




<?php
    include_once '../include/footer.php';
?>




