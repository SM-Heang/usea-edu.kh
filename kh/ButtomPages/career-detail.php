<?php
$page = 'career_other_institute';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['page'] = $page;
$_SESSION['right'] = 'career-kh';

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
                    <a href="#">មជ្ឈមណ្ឌលការងារ</a>
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
                មជ្ឈមណ្ឌលការងារ
                </div>
            </div>
           
            <div class="career-content">
                <div class="row">

               
                <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $sql = "SELECT 
                        career_id as id,
                        career_img as logo,
                        career_position_kh as position,
                        career_organization_kh as organization,
                        location_kh as location,
                        expire_date,
                        career_detail_img,
                        career_detail_kh as detail
                        FROM usea_career WHERE career_id = $id";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        // var_dump($result);
                    }
                ?>
                    <div class="col-xxl-12 career-university-info">
                        <div class="col-xxl-3 career-logo">
                            <img src="../../media/career/logos/<?php echo $result['logo'];?>" alt="">
                        </div>
                        <div class="col-xxl-9 career-info">
                            <div class="row">
                                <span class="career-info-title"><?php echo $result['position']?></span>
                                <hr width="100%;" style="color: #002060;">
                                <span class="span-career-info"><i class="fa-solid fa-building-columns"> <?php echo $result['organization'] ?></i></span>
                                <span class="span-career-info"><i class="fa-solid fa-location-dot"></i>  <?php echo $result['location'];?></span>
                                <span class="span-career-info" style=" margin-right: 10px;"><i class="fa-solid fa-calendar-xmark">
                                        </i>  
                                            ថ្ងៃទី
                                            <?php 
                                                $days=date("d",strtotime($result['expire_date'])); 
                                                convertNumber($days);
                                            ?> 
                                            ខែ
                                            <?php 
                                            $month = date("M",strtotime($result['expire_date']));
                                            convertMonth($month);
                                            ?> 
                                            ឆ្នាំ
                                            <?php 
                                                $year = date("Y",strtotime($result['expire_date']));
                                                convertNumber($year);
                                            ?>
                                        </li> 
                                </span>
                             </div>
                        </div>
                    </div>
                </div>
                
                <hr style="border: 1px solid #002060;" width="100%;">
                <span style="color: #002060; font-size: 20px; font-weight: bold;">សេចក្តីប្រកាស</span><br>
                <span style="font-size: 16px; font-family: Khmer OS Battambang"><?php echo $result['detail'] ?></span>
                <div class="col-xxl-12 career-detail text-center">
                    <div class="container border">
                         <img src="../../media/career/details/<?php echo $result['career_detail_img'] ?>" alt="" width="100%;">
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