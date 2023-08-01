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
           
            <div class="scholarship-content">
                <div class="row">

               
                <?php

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM usea_scholarship WHERE scholarship_id= $id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    // var_dump($result);
                }
                ?>
                    <div class="col-xxl-12 scholarsip-university-info">
                        <div class="col-xxl-3 scholarship-logo">
                            <img src="../../media/scholarship/<?php echo $result['scholarship_img'];?>" alt="">
                        </div>
                        <div class="col-xxl-9 university-info">
                            <hr style="border: 1px solid #002060;" width="100%;">
                            <ul>
                                <li><i class="fa-solid fa-building-columns"></i>  <?php echo $result['institutions'];?></i></li>
                                <li><i class="fa-solid fa-graduation-cap"> </i> <?php echo $result['education_level'];?></li>
                                <li><i class="fa-solid fa-location-dot"></i>  <?php echo $result['location'];?></li>
                                <li><i class="fa-solid fa-calendar-xmark"></i>  ថ្ងៃទី<?php echo date("d",strtotime($result['expire_date']));?> ខែ
                                <?php 
                                   $month = date("M",strtotime($result['expire_date']));
                                //    $months = ["មករា", "កុម្ភៈ", "មិនា","មេសា","ឧសភា","មិថុនា","កក្កដា","សីហា","កញ្ញា","តុលា","វិច្ឆិកា","ធ្នូ",];
                               
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
                                ឆ្នាំ<?php echo date("Y",strtotime($result['expire_date']));?></li>
                                <li><i class="fa-solid fa-clock"></i>  
                                <?php 
                                   echo $times =date('h:i', strtotime($result['expire_date'])); 
                                   $shift =date('a', strtotime($result['expire_date'])) ;
                                   if($shift == "pm"){
                                     echo "ល្ងាច";
                                   }elseif($shift == "am"){
                                     echo "ព្រឹក";
                                   }    
     
                                ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <hr style="border: 1px solid #002060;" width="100%;">
                <div class="​​col-xxl-12 scholarship-detail text-center">
                    <div class="container border">
                         <img src="../../media/scholarship/<?php echo $result['scholarship_detail_img'] ?>" alt="" width="100%;">
                    </div>
                   
                    <!-- <div class="scholarship-title">
                        <?php echo $result['scholarship_title_en'];?>
                    </div><br>
                    <div class="scholarship-description">
                        <?php echo $result['scholarship_description_en'];?>
                    </div><br>
                    <div class="scholarship-requirement">
                        <span>លក្ខណ្ឌក្នុងការចូលរួមប្រឡង ៖</span>
                        <div class="detail-scholarship"> 
                           ១. បេក្ខជនមានសិទ្ធប្រឡង ៖ ប្រឡងមធ្យមសិក្សាទុតិយភូមិ សម្រាប់បន្តការសិក្សាថ្នាក់បរិញ្ញាបត្រ និងជានិស្សិតបញ្ចប់ការសិក្សាដោយជោគជ័យថ្នាក់បរិញ្ញាបត្រ
                           ២. បេក្ខជនមានសិទ្ធប្រឡង ៖ ប្រឡងមធ្យមសិក្សាទុតិយភូមិ សម្រាប់បន្តការសិក្សាថ្នាក់បរិញ្ញាបត្រ និងជានិស្សិតបញ្ចប់ការសិក្សាដោយជោគជ័យថ្នាក់បរិញ្ញាបត្រ
                           ៣. បេក្ខជនមានសិទ្ធប្រឡង ៖ ប្រឡងមធ្យមសិក្សាទុតិយភូមិ សម្រាប់បន្តការសិក្សាថ្នាក់បរិញ្ញាបត្រ និងជានិស្សិតបញ្ចប់ការសិក្សាដោយជោគជ័យថ្នាក់បរិញ្ញាបត្រ
                           ៤. បេក្ខជនមានសិទ្ធប្រឡង ៖ ប្រឡងមធ្យមសិក្សាទុតិយភូមិ សម្រាប់បន្តការសិក្សាថ្នាក់បរិញ្ញាបត្រ និងជានិស្សិតបញ្ចប់ការសិក្សាដោយជោគជ័យថ្នាក់បរិញ្ញាបត្រ
                           ៥. បេក្ខជនមានសិទ្ធប្រឡង ៖ ប្រឡងមធ្យមសិក្សាទុតិយភូមិ សម្រាប់បន្តការសិក្សាថ្នាក់បរិញ្ញាបត្រ និងជានិស្សិតបញ្ចប់ការសិក្សាដោយជោគជ័យថ្នាក់បរិញ្ញាបត្រ
                            បេក្ខជនត្រូវមកទទួលពាក្យស្នើសុំប្រឡងអាហារូបករណ៍នៅការិយាល័យ ផ្ដល់ព័ត៌មានរបស់សាកលវិទ្យាល័យ សៅស៍អ៊ីសថ៍អេយសៀចាប់ពីថ្ងៃជូនដំណឹងនេះតទៅ។ ព័ត៌មានបន្ថែមសូមទំនាក់ទំនង ៖ ០៩០ ៩០៥ ៩០២, ០៧០ ៤០៨ ៤៣៨ ។
                        </div>
                    </div> -->
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