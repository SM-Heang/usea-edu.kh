<?php
$page = 'university';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['page'] = $page;
$_SESSION['right'] = 'scholarship-university';

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
                    <a href="#">Scholarship's University</a>
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
                Scholarship's University
                </div>
            </div>
                <div class="row">
                <?php
            
                    $sql = "SELECT * FROM usea_scholarship WHERE keyword = 'university'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    // var_dump($result);
                    foreach($result as $key => $value) {
                ?>
                    <div class="col-xxl-12 scholarship-card">
                        <div class="col-xxl-2 scholarship-img">
                            <a href="scholarship-university-detail.php?id=<?php echo $value['scholarship_id']?>"><img src="../../media/scholarship/<?php echo $value['scholarship_img'] ?>" alt=""></a>
                        </div>
                        <div class="col-xxl-10 scholarship-info">
                            <div class="row">
                                <span><?php echo $value['scholarship_title_en']?></span>
                                <ul>
                                    <li><i class="fa-solid fa-graduation-cap"></i> <?php echo $value['education_level']?></li>
                                    <li><i class="fa-solid fa-book-open"></i> គណិតវិទ្យា</li>
                                </ul>
                                <ul>
                                    <li><i class="fa-solid fa-calendar-xmark"></i> <?php echo date('Y-m-d', strtotime($value['expire_date']))?></li>
                                    <li><i class="fa-solid fa-clock"></i> <?php echo date('h:i:sa', strtotime($value['expire_date']))?></li>
                                </ul>
                            </div>                    
                            
                        </div>
                    </div>
                    <?php } ?>
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