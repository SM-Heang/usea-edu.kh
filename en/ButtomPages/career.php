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
                
                        $sql = "SELECT * FROM usea_career WHERE keyword = 'career'";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        // var_dump($result);
                        foreach($result as $key => $value) {
                    ?>
                    <div class="col-xxl-12 career-card">
                        <div class="col-xxl-2 career-img">
                            <a href="career-detail.php?id=<?php echo $value['career_id']?>"><img src="../../media/career/<?php echo $value['career_img'] ?>" alt=""></a>
                        </div>
                        <div class="col-xxl-10 career-info">
                            <div class="row">
                                <span><?php echo $value['career_position']?></span>
                                <hr width="100%;" style="color: #002060;">
                                <span class="span-career-info"><i class="fa-solid fa-building-columns"> <?php echo $value['career_organization'] ?></i></span>
                                <span class="span-career-info"><i class="fa-solid fa-location-dot"></i>  <?php echo $value['location'];?></span>
                                <span class="span-career-info"><i class="fa-solid fa-calendar-xmark"></i> 
                                    ថ្ងៃទី 
                                    <?php 
                                        $day = date("d",strtotime($value['expire_date']));
                                        convertNumber($day);
                                    ?> ខែ
                                    <?php 
                                        $month = date("M",strtotime($value['expire_date']));
                                        convertMonth($month);
                                    ?> 
                                    ឆ្នាំ
                                    <?php 
                                        $year=date("Y",strtotime($value['expire_date']));
                                        convertNumber($year);
                                    ?>
                                </span> 
                            </div>                    
                        </div>
                    </div>
                    <?php } ?>
                </div>
        
            </div>      
    

<?php
    include_once '../include/right-content-buttom.php';
    include_once '../include/footer.php';
?>




