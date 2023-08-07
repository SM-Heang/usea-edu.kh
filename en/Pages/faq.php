<?php 
	$page = 'about';
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	$_SESSION['page']= $page;
	$_SESSION['right']= 'faq';
	
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
						<a href="#">Frequently Asked Questions</a>
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
                        Frequently Asked Questions
					</div>
				</div>
                <?php
                    $sql = "SELECT * FROM usea_faq WHERE keyword = 'general'";
                    $stmt= $conn->prepare($sql);
                    $stmt->execute();
                    $faq = $stmt->fetchALL(PDO::FETCH_ASSOC);
                    // var_dump($faq);
                ?>
				<div id="content-detail">
					<div class="content-history-detail mt-2">
                        <h2>Question About USEA</h2>
                        <span>General</span>
                        <?php 
                            $sql = "SELECT * FROM usea_faq WHERE keyword = 'general'";
                            $stmt= $conn->prepare($sql);
                            $stmt->execute();
                            $faq = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        ?>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <?php
                                foreach($faq as $key => $value){  
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $value['faq_id']; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $value['faq_id']; ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?php echo $value['faq_id']; ?>">
                                    <?php  echo $value['faq_question']; ?>
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapse<?php echo $value['faq_id']; ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?php echo $value['faq_id']; ?>">
                                    <div class="accordion-body">
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

