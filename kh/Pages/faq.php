<?php 
	$page = 'about_kh';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	$_SESSION['page']= $page;
	$_SESSION['right']= 'faq-kh';
	
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
						<a href="#">សំណួរដែលសួរញឹកញាប់</a>
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
					<div class="row title-text">
                        សំណួរដែលសួរញឹកញាប់
					</div>
				</div>
                <?php
                    $sql = "SELECT * FROM usea_faq WHERE keyword = 'general'";
                    $stmt= $conn->prepare($sql);
                    $stmt->execute();
                    $faq = $stmt->fetchALL(PDO::FETCH_ASSOC);
                    // var_dump($faq);
                ?>
				<div id="content-detail" class="font-kh">
					<div class="content-history-detail mt-3">
                        <div class="title-text" style="color:var(--primary-color);">សំណួរទាក់ទងនឹងសាកលវិទ្យាល័យ&nbsp;សៅស៍អ៊ីសថ៍អេយសៀ</div>
                        <span class="font-kh mt-1 mb-1" style="color:var(--primary-color);">សំណួរទូរទៅ</span>
                        <?php 
                            $sql = "SELECT * FROM usea_faq WHERE keyword = 'general'";
                            $stmt= $conn->prepare($sql);
                            $stmt->execute();
                            $faq = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <div class="accordion font-kh mt-1" id="accordionPanelsStayOpenExample">
                            <?php
                                foreach($faq as $key => $value){  
                            ?>
                            <div class="accordion-item font-kh">
                                <h2 class="accordion-header font-kh" id="panelsStayOpen-heading<?php echo $value['faq_id']; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $value['faq_id']; ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?php echo $value['faq_id']; ?>">
                                    <?php  echo $value['faq_question']; ?>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapse<?php echo $value['faq_id']; ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?php echo $value['faq_id']; ?>">
                                    <div class="accordion-body font-kh">
                                        <?php echo $value['faq_answer']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
					</div>
				</div>
			</div>
			<!-- Start Right Content-->
			<?php
				include_once '../include/right-content.php';
			?>
		</div>
	</div>
	<!-- End Main Content-->

	<?php
		include_once '../include/buttom-content.php';
		include_once '../include/footer.php';
	?>

