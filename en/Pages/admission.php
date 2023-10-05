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
        <div class="col-xxl-12">
            <div class="container" style="background-color:#002060;">
                <div class="row" style="color: white; font-size: 16pt; padding: 5pt;">
                    Admission
                </div>
            </div>

            <div id="content-detail">
                <?php
                    $stmt = $conn->prepare("SELECT shift_date.shift_title_en as title, usea_admission_title.date_title_en as date_title,usea_admission_title.time_title_en as time_title,usea_admission_detail.time_detail_en as time_detail, usea_degree.degree_name_en as degree_name,usea_admission_info.degree_info_en as degree_info 
                    FROM usea_admission, usea_degree, shift_date, usea_admission_title, usea_admission_detail, usea_admission_info WHERE usea_admission.degree_type = usea_degree.degree_id && usea_admission.admission_title = shift_date.shift_id && usea_admission.date_title = usea_admission_title.title_id && usea_admission.time_title = usea_admission_title.title_id && usea_admission.time_detail = usea_admission_detail.detail_id && usea_admission.degree_info = usea_admission_info.admission_info_id");
                    $stmt->execute();
                    $data = array();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $degree_name = $row['degree_name'];
                        $degree_info = $row['degree_info'];
                    
                        // Create the details item for this row
                        $details_item = array(
                            "date_title"     => $row['date_title'],
                            "education_list" => array(
                                array(
                                    "education_name" => $degree_name,
                                    "list"           => array(
                                        array("info" => $degree_info)
                                    )
                                )
                            ),
                            "time_title"     => $row['time_title'],
                            "time_detail"    => $row['time_detail'],
                        );
                    
                        // Check if the title already exists in $data array
                        $index = -1;
                        foreach ($data as $key => $value) {
                            if ($value["title"] === $row["title"]) {
                                $index = $key;
                                break;
                            }
                        }
        
                        if ($index >= 0) {
                            // If title exists, check if the education name already exists
                            $eduIndex = -1;
                            foreach ($data[$index]["details"][0]["education_list"] as $eduKey => $eduValue) {
                                if ($eduValue["education_name"] === $degree_name) {
                                    $eduIndex = $eduKey;
                                    break;
                                }
                            }
                    
                            if ($eduIndex >= 0) {
                                // If education name exists, append the new "info" to the existing list
                                array_push($data[$index]["details"][0]["education_list"][$eduIndex]["list"], array("info" => $degree_info));
                            } else {
                                // If education name does not exist, add the new item
                                $data[$index]["details"][0]["education_list"][] = array(
                                    "education_name" => $degree_name,
                                    "list"           => array(
                                        array("info" => $degree_info)
                                    )
                                );
                            }
                        } else {
                            // If title does not exist, add the new item along with the education name and "info"
                            $item = array(
                                "title"   => $row["title"],
                                "details" => array($details_item),
                            );
                            array_push($data, $item);
                        }
                        
                    }
                    // echo "<pre>";
                    // print_r($data);
                    // echo "</pre>";
                ?>
        </div>
        
    </div>
</div>
<!-- End Main Content-->

<?php
// include_once 'include/buttom-content.php';
include_once '../include/buttom-content.php';

// include_once 'include/footer.php';
include_once '../include/footer.php';

?>