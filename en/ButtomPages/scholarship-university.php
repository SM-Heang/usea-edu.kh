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
                                    <li><i class="fa-solid fa-calendar-xmark"></i> ថ្ងៃទី <?php echo date("d",strtotime($value['expire_date']));?> ខែ
                                <?php 
                                   $month = date("M",strtotime($value['expire_date']));
                                    switch($month){
                                        case "Jan":
                                            echo "មករា";
                                        break;
                                        case "Feb":
                                            echo "កុម្ភៈ";
                                        break;
                                        case "Mar":
                                            echo "មីនា";
                                        break;
                                        case "Apr":
                                            echo "មេសា";
                                        break;
                                        case "May":
                                            echo "ឧសភា";
                                        break;
                                        case "Jun":
                                            echo "មិថុនា";
                                        break;
                                        case "Jul":
                                            echo "កក្កដា";
                                        break;
                                        case "Aug":
                                            echo "សីហា";
                                        break;
                                        case "Sep":
                                            echo "កញ្ញា";
                                        break;
                                        case "Oct":
                                            echo "តុលា";
                                        break;
                                        case "Nov":
                                            echo "វិច្ឆិការ";
                                        break;
                                        case "Dec":
                                            echo "ធ្នូ";
                                        break;
                                        default:
                                        echo "invalid month";
                                    }

                                ?> 
                                ឆ្នាំ<?php echo date("Y",strtotime($value['expire_date']));?></li>
                                <li><i class="fa-solid fa-clock"></i>  
                                <?php 
                                   echo $times =date('h:i ', strtotime($value['expire_date'])); 
                                   $shift =date('a', strtotime($value['expire_date'])) ;
                                   if($shift == "pm"){
                                     echo "ល្ងាច";
                                   }elseif($shift == "am"){
                                     echo "ព្រឹក";
                                   }    
     
                                ?></li>
                                    
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