<?php
$page = 'header';
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
$_SESSION['right'] = $page;
$_SESSION['right'] = 'admission';

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
                    <a href="#"> Home > </a>
                </li>
                <li>
                    <a href="#"> Admission </a>
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
                    Admission
                </div>
            </div>

            <div id="content-detail">
                <?php
				$stmt = $conn->prepare("SELECT * from usea_admission");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				echo "<pre>";
				print_r($result);
				echo "</pre>";
                foreach($result as $key => $value){
                    
                
				?>
               <div class="container">
                        <h3><?php echo $value['admission_title']; ?></h3>
                    <div class="enrolment-date">
                        <h4><i class="fa-solid fa-hand-point-right"></i> <?php echo $value['date_title']; ?></h4>
                        <div>
                            <h4>ថ្នាក់បរិញ្ញាបត្ររង static</h4>
                            <ul>
                                <li>វគ្គសិក្សាទី១ ចូលរៀនថ្ងៃទី ១៦ ខែ មករា ឆ្នាំ២០២៣</li>
                                <li>វគ្គសិក្សាទី២ ចូលរៀនថ្ងៃទី ១៣ ខែ កុម្ភៈ ឆ្នាំ២០២៣</li>
                                <li>វគ្គសិក្សាទី៣ ចូលរៀនថ្ងៃទី 20 ខែ មិនា ឆ្នាំ២០២៣</li>
                            </ul>
                        </div>
                        <div>
                            <h4>ថ្នាក់បរិញ្ញាបត្រ</h4>
                            <ul>
                                <li>វគ្គសិក្សាទី១ ចូលរៀនថ្ងៃទី ១៦ ខែ មករា ឆ្នាំ២០២៣</li>
                                <li>វគ្គសិក្សាទី២ ចូលរៀនថ្ងៃទី ១៣ ខែ កុម្ភៈ ឆ្នាំ២០២៣</li>
                            </ul>
                        </div>
                    </div>   
                    <div class="study-time">
                        <h4><i class="fa-solid fa-hand-point-right"></i> ម៉ោងសិក្សាសម្រាប់ថ្នាក់បរិញ្ញាបត្ររង និងបរិញ្ញាបត្រដូចខាងក្រោម៖</h4>
                        <div>
                            <h4>ថ្នាក់បរិញ្ញាបត្ររង</h4>
                            <ul>
                                <li>វគ្គសិក្សាទី១ ចូលរៀនថ្ងៃទី ១៦ ខែ មករា ឆ្នាំ២០២៣</li>
                                <li>វគ្គសិក្សាទី២ ចូលរៀនថ្ងៃទី ១៣ ខែ កុម្ភៈ ឆ្នាំ២០២៣</li>
                                <li>វគ្គសិក្សាទី៣ ចូលរៀនថ្ងៃទី 20 ខែ មិនា ឆ្នាំ២០២៣</li>
                            </ul>
                        </div>
                    </div>                                           
               </div>
               <?php } ?>

            </div>
        </div>
        <!-- Start Right Content-->
        <?php
		include_once '../include/right-content-laws.php';
		?>
    </div>
</div>
<!-- End Main Content-->

<?php
// include_once 'include/buttom-content.php';
include_once '../include/buttom-content.php';

// include_once 'include/footer.php';
include_once '../include/footer.php';

?>