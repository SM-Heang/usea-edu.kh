<?php 

try{
    include_once '../connection/db.connection.php';
function convertNumber($num){
    $kh_num = ["០", "១", "២", "៣", "៤", "៥", "៦", "៧", "៨", "៩"];
    for($i=0; $i<10; $i++){
        $num = str_replace($i, $kh_num[$i], $num);
    }
    return $num;
}
// convert en to kh month
function convertMonth($month){
    switch($month){
        case "Jan":
            return "មករា";
        break;
        case "Feb":
            return "កុម្ភៈ";
        break;
        case "Mar":
            return "មីនា";
        break;
        case "Apr":
            return "មេសា";
        break;
        case "May":
            return "ឧសភា";
        break;
        case "Jun":
            return "មិថុនា";
        break;
        case "Jul":
            return "កក្កដា";
        break;
        case "Aug":
            return "សីហា";
        break;
        case "Sep":
            return "កញ្ញា";
        break;
        case "Oct":
            return "តុលា";
        break;
        case "Nov":
            return "វិច្ឆិកា";
        break;
        case "Dec":
            return "ធ្នូ";
        break;
        default:
        return "invalid month";
    }
}
// convert en to kh day of the week
function convertWeekDay($days){
    switch($days){
        case "Mon":
            return "ច័ន្ទ";
        break;
        case "Tue":
            return "អង្គារ";
        break;
        case "Wed":
            return "ពុធ";
        break;
        case "Thu":
            return "ព្រហស្បតិ៍";
        break;
        case "Fri":
            return "សុក្រ";
        break;
        case "Sat":
            return "សៅរ៍";
        break;
        case "Sun":
            return "អាទិត្យ";
        break;
        default:
        return "invalid month";
    }
}
// convert shift
function convertShift($shift){
    if($shift == "pm"){
        return "ល្ងាច";
      }elseif($shift == "am"){
        return "ព្រឹក";
      }    
}

if(isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'study_program_kh':
            // Prepare the query to fetch student performance data
            $query = "SELECT usea_degree.degree_id, usea_faculty_icon.icon_name as fac_icon, usea_faculty.fac_name_kh as fac_name, usea_major.major_name_kh as major_name, usea_degree.degree_name_kh as education_name,
            usea_major.major_info_kh as major_info, usea_study_year.study_year_kh as year_name, usea_subject.subject_name_kh as subject_name, total_credit, credit
            FROM usea_study_plan, usea_faculty, usea_major, usea_degree, usea_study_year, usea_subject , usea_faculty_icon
            WHERE usea_study_plan.fac_name = usea_faculty.fac_id 
            AND usea_study_plan.major_name = usea_major.major_id 
            AND usea_study_plan.major_info_en = usea_major.major_id
            AND usea_study_plan.education_name = usea_degree.degree_id 
            AND usea_study_plan.study_year = usea_study_year.study_year_id 
            AND usea_study_plan.subject_name = usea_subject.subject_id
            AND usea_study_plan.fac_icon = usea_faculty_icon.icon_id ORDER BY degree_id ASC";

            // Prepare the statement
            $stmt = $conn->prepare($query);

            // Execute the statement
            $stmt->execute();

            // Bind variables to the result columns
            $stmt->bindColumn('fac_icon', $fac_icon);
            $stmt->bindColumn('degree_id', $degree_id);
            $stmt->bindColumn('fac_name', $fac_name);
            $stmt->bindColumn('major_name', $major_name);
            $stmt->bindColumn('education_name', $degree_name);
            $stmt->bindColumn('major_info', $major_info);
            $stmt->bindColumn('year_name', $year_name);
            // $stmt->bindColumn('semester_name', $semester_name);
            $stmt->bindColumn('subject_name', $subject_name);
            $stmt->bindColumn('total_credit', $total_credit);
            $stmt->bindColumn('credit', $credit);

            // Create an array to store the data
            $data = [
                "program_data" => []
            ];

            // Fetch the rows and store the data in the array
            while ($stmt->fetch(PDO::FETCH_ASSOC)) {
                $subject_data = [
                    "Subject" => $subject_name,
                    // "Hour"    => $hour,
                    "Credit"  => $credit
                ];

                // Structure the data into nested arrays
                $faculty_key = array_search($fac_name, array_column($data['program_data'], 'faculty_name'));
                if ($faculty_key === false) {
                    $data['program_data'][] = [
                        'faculty_name' => $fac_name,
                        'faculty_data' => [
                            'fac_icon'   => "http://".$_SERVER['HTTP_HOST']."/media/asset/icon/nav-icon/". $fac_icon,
                            'major_name' => []
                        ]
                    ];
                    $faculty_key = count($data['program_data']) - 1;
                }

                $major_key = array_search($major_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'], 'major_name'));
                if ($major_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][] = [
                        'major_name' => $major_name,
                        'major_data' => []
                    ];
                    $major_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name']) - 1;
                }

                $degree_key = array_search($degree_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'], 'degree_name'));
                if ($degree_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][] = [
                        'degree_id' => $degree_id,
                        'degree_name'   => $degree_name,
                        'degree_detail' => [
                            'major_info'  => $major_info,
                            'degree_data' => []
                        ]
                    ];
                    $degree_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data']) - 1;
                }

                $year_key = array_search($year_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'], 'year_name'));
                if ($year_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][] = [
                        'year_name' => $year_name,
                        'year_data' => []
                    ];
                    $year_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data']) - 1;
                }

                $total_credit_key = array_search($total_credit, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'], 'total_credit'));
                if ($total_credit_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'][] = [
                        'total_credit' => $total_credit,
                        'subject_data' => []
                    ];
                    $total_credit_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data']) - 1;
                }

                $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'][$total_credit_key]['subject_data'][] = $subject_data;
            }

            // Close the statement
            // $stmt->close();

            // Close the database connection
            // $mysqli->close();

            // Set the response headers
            header('Content-Type: application/json');

            // Send the JSON response
            echo json_encode($data, JSON_PRETTY_PRINT);
            break;
        case 'study_program_en':
            // Prepare the query to fetch student performance data
            $query = "SELECT usea_degree.degree_id, usea_faculty_icon.icon_name as fac_icon, usea_faculty.fac_name_en as fac_name, usea_major.major_name_en as major_name, usea_degree.degree_name_en as education_name,
            usea_major.major_info_en as major_info, usea_study_year.study_year_en as year_name, usea_subject.subject_name_en as subject_name, total_credit, credit
            FROM usea_study_plan, usea_faculty, usea_major, usea_degree, usea_study_year, usea_subject , usea_faculty_icon
            WHERE usea_study_plan.fac_name = usea_faculty.fac_id 
            AND usea_study_plan.major_name = usea_major.major_id 
            AND usea_study_plan.major_info_en = usea_major.major_id
            AND usea_study_plan.education_name = usea_degree.degree_id 
            AND usea_study_plan.study_year = usea_study_year.study_year_id 
            AND usea_study_plan.subject_name = usea_subject.subject_id
            AND usea_study_plan.fac_icon = usea_faculty_icon.icon_id ORDER BY degree_id ASC";

            // Prepare the statement
            $stmt = $conn->prepare($query);

            // Execute the statement
            $stmt->execute();

            // Bind variables to the result columns
            $stmt->bindColumn('fac_icon', $fac_icon);
            $stmt->bindColumn('degree_id', $degree_id);
            $stmt->bindColumn('fac_name', $fac_name);
            $stmt->bindColumn('major_name', $major_name);
            $stmt->bindColumn('education_name', $degree_name);
            $stmt->bindColumn('major_info', $major_info);
            $stmt->bindColumn('year_name', $year_name);
            // $stmt->bindColumn('semester_name', $semester_name);
            $stmt->bindColumn('subject_name', $subject_name);
            $stmt->bindColumn('total_credit', $total_credit);
            $stmt->bindColumn('credit', $credit);

            // Create an array to store the data
            $data = [
                "program_data" => []
            ];

            // Fetch the rows and store the data in the array
            while ($stmt->fetch(PDO::FETCH_ASSOC)) {
                $subject_data = [
                    "Subject" => $subject_name,
                    // "Hour"    => $hour,
                    "Credit"  => $credit
                ];

                // Structure the data into nested arrays
                $faculty_key = array_search($fac_name, array_column($data['program_data'], 'faculty_name'));
                if ($faculty_key === false) {
                    $data['program_data'][] = [
                        'faculty_name' => $fac_name,
                        'faculty_data' => [
                            'fac_icon'   => "http://".$_SERVER['HTTP_HOST']."/media/asset/icon/nav-icon/". $fac_icon,
                            'major_name' => []
                        ]
                    ];
                    $faculty_key = count($data['program_data']) - 1;
                }

                $major_key = array_search($major_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'], 'major_name'));
                if ($major_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][] = [
                        'major_name' => $major_name,
                        'major_data' => []
                    ];
                    $major_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name']) - 1;
                }

                $degree_key = array_search($degree_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'], 'degree_name'));
                if ($degree_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][] = [
                        'degree_id' => $degree_id,
                        'degree_name'   => $degree_name,
                        'degree_detail' => [
                            'major_info'  => $major_info,
                            'degree_data' => []
                        ]
                    ];
                    $degree_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data']) - 1;
                }

                $year_key = array_search($year_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'], 'year_name'));
                if ($year_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][] = [
                        'year_name' => $year_name,
                        'year_data' => []
                    ];
                    $year_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data']) - 1;
                }

                $total_credit_key = array_search($total_credit, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'], 'total_credit'));
                if ($total_credit_key === false) {
                    $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'][] = [
                        'total_credit' => $total_credit,
                        'subject_data' => []
                    ];
                    $total_credit_key = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data']) - 1;
                }
                

                $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'][$total_credit_key]['subject_data'][] = $subject_data;
            }

            // Close the statement
            // $stmt->close();

            // Close the database connection
            // $mysqli->close();

            // Set the response headers
           
            header('Content-Type: application/json');

            // Send the JSON response
            echo json_encode($data, JSON_PRETTY_PRINT);
            break;
            
        case 'acca_kh':

            $sql = "SELECT usea_faculty_icon.icon_name as fac_icon,
            usea_faculty.fac_name_kh as fac_name,
            usea_major.major_name_kh as major_name,
            usea_subject.subject_name_kh as subject_name,
            hour_per_week,
            weeks,
            total_hour,
            course_hour
            FROM usea_study_plan, usea_faculty_icon, usea_faculty, usea_major, usea_subject
            WHERE usea_study_plan.fac_icon = usea_faculty_icon.icon_id 
            AND usea_study_plan.fac_name = usea_faculty.fac_id
            AND usea_study_plan.major_name = usea_major.major_id
            AND usea_study_plan.subject_name = usea_subject.subject_id
            AND usea_faculty.fac_id = '6'";

            // Prepare the statement
            $stmt = $conn->prepare($sql);

            // Execute the statement
            $stmt->execute();

            // Bind the result variables
            $stmt->bindColumn('fac_icon', $fac_icon);
            $stmt->bindColumn('fac_name', $fac_name);
            $stmt->bindColumn('major_name', $major_name);
            $stmt->bindColumn('subject_name', $subject_name);
            $stmt->bindColumn('hour_per_week', $hour_per_week);
            $stmt->bindColumn('weeks', $weeks);
            $stmt->bindColumn('total_hour', $total_hour);
            $stmt->bindColumn('course_hour', $course_hour);
            // Create an array to store the data
            $data = [
                "program_acca" => []
            ];
            $subject_counter = 1;
            // Fetch the rows and store the data in the array
            while ($stmt->fetch()) {
                $faculty_key = array_search($fac_name, array_column($data['program_acca'], 'faculty_name'));
                if ($faculty_key === false) {
                    $faculty_data = [
                        'fac_icon'   => "http://".$_SERVER['HTTP_HOST']."/media/asset/icon/nav-icon/". $fac_icon,
                        'major_data' => []
                    ];
            
                    $major_data = [
                        'major_name'   => $major_name,
                        'course_hour'  => $course_hour,
                        'subject_data' => []
                    ];
            
                    $subject_data = [
                        'No'        => strval($subject_counter++),  // Add and increment the counter
                        'subject'       => $subject_name,
                        'hour_per_week' => $hour_per_week,
                        'weeks'         => $weeks,
                        'total_hour'    => $total_hour,
                    ];
            
                    $major_data['subject_data'][] = $subject_data;
                    $faculty_data['major_data'][] = $major_data;
            
                    $data['program_acca'][] = [
                        'faculty_name' => $fac_name,
                        'faculty_data' => [$faculty_data]
                    ];
                } else {
                    $major_key = array_search($major_name, array_column($data['program_acca'][$faculty_key]['faculty_data'][0]['major_data'], 'major_name'));
            
                    if ($major_key === false) {
                        $major_data = [
                            'major_name'   => $major_name,
                            'course_hour'  => $course_hour,
                            'subject_data' => []
                        ];
            
                        $subject_data = [
                            'No'        => strval($subject_counter++),  // Add and increment the counter
                            'subject'       => $subject_name,
                            'hour_per_week' => $hour_per_week,
                            'weeks'         => $weeks,
                            'total_hour'    => $total_hour,
                        ];
            
                        $major_data['subject_data'][] = $subject_data;
                        $data['program_acca'][$faculty_key]['faculty_data'][0]['major_data'][] = $major_data;
                    } else {
                        $subject_data = [
                            'No'        => strval($subject_counter++),  // Add and increment the counter
                            'subject'       => $subject_name,
                            'hour_per_week' => $hour_per_week,
                            'weeks'         => $weeks,
                            'total_hour'    => $total_hour,
                        ];
                        
                        $data['program_acca'][$faculty_key]['faculty_data'][0]['major_data'][$major_key]['subject_data'][] = $subject_data;
                    }
                }
            }

            // Set the response headers
            header('Content-Type: application/json');

            // Send the JSON response
            echo json_encode($data, JSON_PRETTY_PRINT);
            break;
            
        case 'acca_en':

            $sql = "SELECT usea_faculty_icon.icon_name as fac_icon,
            usea_faculty.fac_name_en as fac_name,
            usea_major.major_name_en as major_name,
            usea_subject.subject_name_en as subject_name,
            hour_per_week,
            weeks,
            total_hour,
            course_hour
            FROM usea_study_plan, usea_faculty_icon, usea_faculty, usea_major, usea_subject
            WHERE usea_study_plan.fac_icon = usea_faculty_icon.icon_id 
            AND usea_study_plan.fac_name = usea_faculty.fac_id
            AND usea_study_plan.major_name = usea_major.major_id
            AND usea_study_plan.subject_name = usea_subject.subject_id
            AND usea_faculty.fac_id = '6'";

            // Prepare the statement
            $stmt = $conn->prepare($sql);

            // Execute the statement
            $stmt->execute();

            // Bind the result variables
            $stmt->bindColumn('fac_icon', $fac_icon);
            $stmt->bindColumn('fac_name', $fac_name);
            $stmt->bindColumn('major_name', $major_name);
            $stmt->bindColumn('subject_name', $subject_name);
            $stmt->bindColumn('hour_per_week', $hour_per_week);
            $stmt->bindColumn('weeks', $weeks);
            $stmt->bindColumn('total_hour', $total_hour);
            $stmt->bindColumn('course_hour', $course_hour);
            // Create an array to store the data
            $data = [
                "program_acca" => []
            ];
            $subject_counter = 1;
            // Fetch the rows and store the data in the array
            while ($stmt->fetch()) {
                $faculty_key = array_search($fac_name, array_column($data['program_acca'], 'faculty_name'));
                if ($faculty_key === false) {
                    $faculty_data = [
                        'fac_icon'   => "http://".$_SERVER['HTTP_HOST']."/media/asset/icon/nav-icon/". $fac_icon,
                        'major_data' => []
                    ];
            
                    $major_data = [
                        'major_name'   => $major_name,
                        'course_hour'  => $course_hour,
                        'subject_data' => []
                    ];
            
                    $subject_data = [
                        'No'        => strval($subject_counter++),  // Add and increment the counter
                        'subject'       => $subject_name,
                        'hour_per_week' => $hour_per_week,
                        'weeks'         => $weeks,
                        'total_hour'    => $total_hour,
                    ];
            
                    $major_data['subject_data'][] = $subject_data;
                    $faculty_data['major_data'][] = $major_data;
            
                    $data['program_acca'][] = [
                        'faculty_name' => $fac_name,
                        'faculty_data' => [$faculty_data]
                    ];
                } else {
                    $major_key = array_search($major_name, array_column($data['program_acca'][$faculty_key]['faculty_data'][0]['major_data'], 'major_name'));
            
                    if ($major_key === false) {
                        $major_data = [
                            'major_name'   => $major_name,
                            'course_hour'  => $course_hour,
                            'subject_data' => []
                        ];
            
                        $subject_data = [
                            'No'        => strval($subject_counter++),  // Add and increment the counter
                            'subject'       => $subject_name,
                            'hour_per_week' => $hour_per_week,
                            'weeks'         => $weeks,
                            'total_hour'    => $total_hour,
                        ];
            
                        $major_data['subject_data'][] = $subject_data;
                        $data['program_acca'][$faculty_key]['faculty_data'][0]['major_data'][] = $major_data;
                    } else {
                        $subject_data = [
                            'No'        => strval($subject_counter++),  // Add and increment the counter
                            'subject'       => $subject_name,
                            'hour_per_week' => $hour_per_week,
                            'weeks'         => $weeks,
                            'total_hour'    => $total_hour,
                        ];
                        
                        $data['program_acca'][$faculty_key]['faculty_data'][0]['major_data'][$major_key]['subject_data'][] = $subject_data;
                    }
                }
            }

            // Set the response headers
            header('Content-Type: application/json');

            // Send the JSON response
            echo json_encode($data, JSON_PRETTY_PRINT);
            break;
            
        case 'registration_info':
            
            $sql    = 'SELECT shift_date.shift_title_kh as title, usea_admission_title.date_title_kh as date_title,usea_admission_title.time_title_kh as time_title,usea_admission_detail.time_detail_kh as time_detail, usea_degree.degree_name_kh as degree_name,usea_admission_info.degree_info_kh as degree_info 
            FROM usea_admission, usea_degree, shift_date, usea_admission_title, usea_admission_detail, usea_admission_info WHERE usea_admission.degree_type = usea_degree.degree_id && usea_admission.admission_title = shift_date.shift_id && usea_admission.date_title = usea_admission_title.title_id && usea_admission.time_title = usea_admission_title.title_id && usea_admission.time_detail = usea_admission_detail.detail_id && usea_admission.degree_info = usea_admission_info.admission_info_id';
            
            $stmt = $conn->prepare($sql);
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
                echo json_encode($data);
                break;
                
        case 'registration_info_en':
            
            $sql    = 'SELECT shift_date.shift_title_en as title, usea_admission_title.date_title_en as date_title,usea_admission_title.time_title_en as time_title,usea_admission_detail.time_detail_en as time_detail, usea_degree.degree_name_en as degree_name,usea_admission_info.degree_info_en as degree_info 
            FROM usea_admission, usea_degree, shift_date, usea_admission_title, usea_admission_detail, usea_admission_info WHERE usea_admission.degree_type = usea_degree.degree_id && usea_admission.admission_title = shift_date.shift_id && usea_admission.date_title = usea_admission_title.title_id && usea_admission.time_title = usea_admission_title.title_id && usea_admission.time_detail = usea_admission_detail.detail_id && usea_admission.degree_info = usea_admission_info.admission_info_id';
            
            $stmt = $conn->prepare($sql);
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
                echo json_encode($data);
                break;
                
        case 'scholarship_i_university_en':
            
            $sql = "SELECT 
            scholarship_id as id,
            institutions_en as i_school_name, 
            usea_degree.degree_name_en as i_educational_level,
            education_major_en as i_major,
            expire_date as i_expire_date
            FROM usea_degree, usea_scholarship WHERE usea_scholarship.education_level = usea_degree.degree_id AND scholarship_type= '1'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $scholarship = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newscholarship = array();
            foreach ($scholarship as $key => $value) {
                $newscholarship[] = array(
                    'id' => $value['id'],
                    'i_school_name' => $value['i_school_name'],
                    'i_educational_level' => $value['i_educational_level'],
                    'i_major' => $value['i_major'],
                    'i_expire_date' => "Date: " . date("d M Y",strtotime($value['i_expire_date'])) . " Time: " . date("H:i",strtotime($value['i_expire_date'])) ,
                    'i_link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/scholarship-university-detail.php?id=". $value['id']
                );
            }

            $output = $newscholarship;
            header('Content-Type: application/json');
            echo json_encode($output);
            break;
            
        case 'scholarship_i_university_kh':
            $sql = "SELECT 
            scholarship_id as id, 
            institutions_kh as i_school_name, 
            usea_degree.degree_name_kh as i_educational_level,
            education_major_kh as i_major,
            expire_date as i_expire_date
            FROM usea_degree, usea_scholarship WHERE usea_scholarship.education_level = usea_degree.degree_id AND scholarship_type= '1'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $scholarship = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newscholarship = array();
            foreach ($scholarship as $key => $value) {
                $newscholarship[] = array(
                    'id' => $value['id'],
                    'i_school_name' => $value['i_school_name'],
                    'i_educational_level' => $value['i_educational_level'],
                    'i_major' => $value['i_major'],
                    'i_expire_date' => "ថ្ងៃទី " . convertNumber(date("d",strtotime($value['i_expire_date']))) . " ខែ" . convertMonth(date("M",strtotime($value['i_expire_date']))) . " ឆ្នាំ" . convertNumber(date("Y",strtotime($value['i_expire_date']))) ." ម៉ោង". convertNumber(date("h",strtotime($value['i_expire_date']))) . " និង " . convertNumber(date("i",strtotime($value['i_expire_date']))) . "នាទី " . convertShift(date("a",strtotime($value['i_expire_date']))),
                    'i_link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/scholarship-university-detail.php?id=". $value['id']
                );
            }

            $output = $newscholarship;
            header('Content-Type: application/json');
            echo json_encode($output);
            break;
            
        case 'scholarship_o_university_en':
            $sql = "SELECT 
            scholarship_id as id, 
            institutions_en as i_school_name, 
            usea_degree.degree_name_en as i_educational_level,
            education_major_en as i_major,
            expire_date as i_expire_date
            FROM usea_degree, usea_scholarship WHERE usea_scholarship.education_level = usea_degree.degree_id AND scholarship_type= '2'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $scholarship = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newscholarship = array();
            foreach ($scholarship as $key => $value) {
                $newscholarship[] = array(
                    'id' => $value['id'],
                    'o_school_name' => $value['i_school_name'],
                    'o_educational_level' => $value['i_educational_level'],
                    'o_major' => $value['i_major'],
                    'o_expire_date' => "Date: " . date("d M Y",strtotime($value['i_expire_date'])) . " Time: " . date("H:i",strtotime($value['i_expire_date'])),
                    'o_link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/scholarship-university-detail.php?id=". $value['id']
                );
            }

            $output = $newscholarship;
            header('Content-Type: application/json');
            echo json_encode($output);
            break;
            
        case 'scholarship_o_university_kh':
            $sql = "SELECT 
            scholarship_id as id, 
            institutions_kh as i_school_name, 
            usea_degree.degree_name_kh as i_educational_level,
            education_major_kh as i_major,
            expire_date as i_expire_date
            FROM usea_degree, usea_scholarship WHERE usea_scholarship.education_level = usea_degree.degree_id AND scholarship_type= '2'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $scholarship = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newscholarship = array();
            foreach ($scholarship as $key => $value) {
                $newscholarship[] = array(
                    'id' => $value['id'],
                    'o_school_name' => $value['i_school_name'],
                    'o_educational_level' => $value['i_educational_level'],
                    'o_major' => $value['i_major'],
                    'o_expire_date' => "ថ្ងៃទី " . convertNumber(date("d",strtotime($value['i_expire_date']))) . " ខែ" . convertMonth(date("M",strtotime($value['i_expire_date']))) . " ឆ្នាំ" . convertNumber(date("Y",strtotime($value['i_expire_date']))) ." ម៉ោង". convertNumber(date("h",strtotime($value['i_expire_date']))) . " និង " . convertNumber(date("i",strtotime($value['i_expire_date']))) . "នាទី " . convertShift(date("a",strtotime($value['i_expire_date']))),
                    'o_link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/scholarship-university-detail.php?id=". $value['id']
                );
            }

            $output = $newscholarship;
            header('Content-Type: application/json');
            echo json_encode($output);
            break;
            
        case 'career_en':
            $sql = "SELECT career_id as id, career_img as logo, career_position_en as position, career_organization_en as organization, expire_date FROM usea_career WHERE keyword = 'career' ORDER BY career_id desc";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $career = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newcareer = array();
            foreach ($career as $key => $value) {
                $newcareer[] = array(
                    'id' => $value['id'],
                    'logo' => "http://".$_SERVER['HTTP_HOST']."/media/career/logos/". $value['logo'],
                    'position' => $value['position'],
                    'organization' => $value['organization'],
                    'expired_date' => date("d",strtotime($value['expire_date'])). " " . date("F",strtotime($value['expire_date'])) . " " . date("Y",strtotime($value['expire_date'])),
                    'link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/career-detail.php?id=". $value['id']
                );
            }
            $output = $newcareer;
            header('Content-Type: application/json');
            echo json_encode($output);
            break;
            
        case 'career_kh':
            $sql = "SELECT career_id as id, career_img as logo, career_position_kh as position, career_organization_kh as organization, expire_date FROM usea_career WHERE keyword = 'career' ORDER BY career_id desc";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $career = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newcareer = array();
            foreach ($career as $key => $value) {
                $newcareer[] = array(
                    'id' => $value['id'],
                    'logo' => "http://".$_SERVER['HTTP_HOST']."/media/career/logos/". $value['logo'],
                    'position' => $value['position'],
                    'organization' => $value['organization'],
                    'expired_date' => "ថ្ងៃទី " . convertNumber(date("d",strtotime($value['expire_date']))) . " ខែ" . convertMonth(date("M",strtotime($value['expire_date']))) . " ឆ្នាំ" . convertNumber(date("Y",strtotime($value['expire_date']))),
                    'link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/career-detail.php?id=". $value['id']
                );
            }
            $output = $newcareer;
            header('Content-Type: application/json');
            echo json_encode($output);
            break;
            
        case 'faq':
            $sql = "SELECT faq_id as id, faq_question_kh as question, faq_answer_kh as answer FROM usea_faq";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $faq = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newfaq = array();
            foreach ($faq as $key => $value) {
                $newfaq[] = array(
                    'id' => $value['id'],
                    'question' => $value['question'],
                    'answer' => str_replace(array("<li>","</li>"), array("\n",""), strip_tags($value['answer'], array("<li>")))
                );
            }
            echo json_encode($newfaq);
            break;
            
        case 'faq_en':
            $sql = "SELECT faq_id as id, faq_question_en as question, faq_answer_en as answer FROM usea_faq";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $faq = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newfaq = array();
            foreach ($faq as $key => $value) {
                $newfaq[] = array(
                    'id' => $value['id'],
                    'question' => $value['question'],
                    'answer' => str_replace(array("<li>","</li>"), array("\n",""), strip_tags($value['answer'], array("<li>")))
                );
            }
            header('Content-Type: application/json');
            echo json_encode($newfaq);
            break;
            
        case 'past_events_en':
            $sql = "SELECT 
            event_id as id,
            event_cover as past_image,
            event_title_en as past_title,
            event_description_en as past_desc,
            event_date as past_date FROM usea_events WHERE event_status = 'past' ORDER BY event_id DESC LIMIT 10
            ";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $past_events = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $new_past_events = array();
            foreach ($past_events as $key => $value) {
                if($value['past_desc'] == null){
                    $value['past_desc'] = "";
                }else{
                    $value['past_desc'] = str_replace(array("&nbsp;", "<br>"), array("", "\n"),strip_tags($value['past_desc'], "<br>"));
                }
                $new_past_events[] = array(
                    'id' => $value['id'],
                    'past_image' => "http://".$_SERVER['HTTP_HOST']."/media/events/". $value['past_image'],
                    'past_title' => $value['past_title'],
                    'past_desc' =>  $value['past_desc'],
                    'past_date' => date("l d M Y",strtotime($value['past_date'])),
                    'past_time' => date("H:i", strtotime($value['past_date']))
                );
            }
            header('Content-Type: application/json');
            echo json_encode($new_past_events);
            // var_dump($new_past_events['past_desc']);
            break;
            
        case 'past_events_kh':
            $sql = "SELECT 
            event_id as id,
            event_cover as past_image,
            event_title_kh as past_title,
            event_description_kh as past_desc,
            event_date as past_date FROM usea_events WHERE event_status = 'past' ORDER BY event_id DESC LIMIT 10
            ";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $past_events = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $new_past_events = array();
            foreach ($past_events as $key => $value) {
                if($value['past_desc'] == null){
                    $value['past_desc'] = "";
                }else{
                    $value['past_desc'] = str_replace(array("&nbsp;", "<br>"), array("", "\n"),strip_tags($value['past_desc'], "<br>"));
                }
                $new_past_events[] = array(
                    'id' => $value['id'],
                    'past_image' => "http://".$_SERVER['HTTP_HOST']."/media/events/". $value['past_image'],
                    'past_title' => $value['past_title'],
                    'past_desc' =>  $value['past_desc'],
                    'past_date' => "ថ្ងៃទី " . convertNumber(date("d",strtotime($value['past_date']))) . " ខែ" . convertMonth(date("M",strtotime($value['past_date']))) . " ឆ្នាំ" . convertNumber(date("Y",strtotime($value['past_date']))),
                    'past_time' => convertNumber(date("h:i", strtotime($value['past_date']))). " " . convertShift(date("a", strtotime($value['past_date'])))
                );
            }
            header('Content-Type: application/json');
            echo json_encode($new_past_events);
            // var_dump($new_past_events['past_desc']);
            break;
            
        case 'upcoming_events_en':
            $sql = "SELECT 
            event_id as id,
            event_cover as upcoming_image,
            event_title_en as upcoming_title,
            event_description_en as upcoming_desc,
            event_date as upcoming_date FROM usea_events WHERE event_status = 'upcoming' ORDER BY event_id DESC LIMIT 10
            ";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $upcoming_events = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $new_upcoming_events = array();
            foreach ($upcoming_events as $key => $value) {
                // if($value['upcoming_image']&&$value['upcoming_title'] == null){
                //  echo $value['upcoming_image'] = $value['upcoming_title'] = "Null";
                // }
                if($value['upcoming_desc'] == null){
                    $value['upcoming_desc'] = "";
                }else{
                    $value['upcoming_desc'] = str_replace("&nbsp;", "",strip_tags($value['upcoming_desc']));
                }
                $new_upcoming_events[] = array(
                    'id' => $value['id'],
                    'upcoming_image' => "http://".$_SERVER['HTTP_HOST']."/media/events/". $value['upcoming_image'],
                    'upcoming_title' => $value['upcoming_title'],
                    'upcoming_desc' =>  $value['upcoming_desc'],
                    'upcoming_date' => date("l d M Y",strtotime($value['upcoming_date'])),
                    'upcoming_time' => date("h:i a", strtotime($value['upcoming_date']))
                );
            }
            header('Content-Type: application/json');
            echo json_encode($new_upcoming_events);
            // var_dump($new_past_events['past_desc']);
            break;
            
        case 'upcoming_events_kh':
            $sql = "SELECT 
            event_id as id,
            event_cover as upcoming_image,
            event_title_kh as upcoming_title,
            event_description_kh as upcoming_desc,
            event_date as upcoming_date FROM usea_events WHERE event_status = 'upcoming' ORDER BY event_id DESC LIMIT 10
            ";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $upcoming_events = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $new_upcoming_events = array();
            foreach ($upcoming_events as $key => $value) {
                // if($value['upcoming_image']&&$value['upcoming_title'] == null){
                //  echo $value['upcoming_image'] = $value['upcoming_title'] = "Null";
                // }
                if($value['upcoming_desc'] == null){
                    $value['upcoming_desc'] = "";
                }else{
                    $value['upcoming_desc'] = str_replace("&nbsp;", "",strip_tags($value['upcoming_desc']));
                }
                $new_upcoming_events[] = array(
                    'id' => $value['id'],
                    'upcoming_image' => "http://".$_SERVER['HTTP_HOST']."/media/events/". $value['upcoming_image'],
                    'upcoming_title' => $value['upcoming_title'],
                    'upcoming_desc' =>  $value['upcoming_desc'],
                    'upcoming_date' => "ថ្ងៃទី " . convertNumber(date("d",strtotime($value['upcoming_date']))) . " ខែ" . convertMonth(date("M",strtotime($value['upcoming_date']))) . " ឆ្នាំ" . convertNumber(date("Y",strtotime($value['upcoming_date']))),
                    'upcoming_time' => convertNumber(date("h:i",strtotime($value['upcoming_date']))) . " " . convertShift(date("a",strtotime($value['upcoming_date']))),
                );
            }
            header('Content-Type: application/json');
            echo json_encode($new_upcoming_events);
            // var_dump($new_past_events['past_desc']);
            break;
            
        case 'slide_home':
            $sql = "SELECT slide_image_name as image_url FROM usea_slide_show WHERE keyword = 'home' && slide_status = 1";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $image_url = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $new_image_url = array();
            foreach ($image_url as $key => $value) {
                $new_image_url[] = array(
                    'image_url' => "http://".$_SERVER['HTTP_HOST']."/media/slider/". $value['image_url'],
                );
            }
            header('Content-Type: application/json');
            echo json_encode($new_image_url);
            break;
            
        case 'yt_video':
            $sql = "SELECT video_id  as id,
            thumbnail as youtube_thumbnail,
            video_title_kh as title,
            video_caption_en as caption,
            link FROM usea_video ORDER BY video_id DESC LIMIT 5";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $yt_video = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newyt_video = array();
           
            foreach ($yt_video as $key => $value) {
                if($value['caption'] == null){
                    $newyt_video[] = array(
                    'id' => $value['id'],
                    'youtube_thumbnail' => $value['youtube_thumbnail'],
                    'title' => $value['title'],
                    'caption' => "",
                    'link' => $value['link']
                );
                }else{
                $newyt_video[] = array(
                    'id' => $value['id'],
                    'youtube_thumbnail' => $value['youtube_thumbnail'],
                    'title' => $value['title'],
                    'caption' => $value['caption'],
                    'link' => $value['link']
                );
                }
            }
            header('Content-Type: application/json');
            echo json_encode($newyt_video);
            break;
        case 'recognition_en':
            $sql = "SELECT recognition_cover  as image,
            title_en as title,
            link FROM usea_recognition";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $recognition = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newrecognition = array();
           
            foreach ($recognition as $key => $value) {
                
                    $newrecognition[] = array(
                    'image' => "http://".$_SERVER['HTTP_HOST']."/media/". $value['image'],
                    'title' => $value['title'],
                    'link' => "http://".$_SERVER['HTTP_HOST']."/en/Pages/recognition.php"
                );
            }
            header('Content-Type: application/json');
            echo json_encode($newrecognition);
            break;
        case 'recognition_kh':
            $sql = "SELECT recognition_cover  as image,
            title_kh as title,
            link FROM usea_recognition";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $recognition = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $newrecognition = array();
           
            foreach ($recognition as $key => $value) {
                
                    $newrecognition[] = array(
                    'image' => "http://".$_SERVER['HTTP_HOST']."/media/". $value['image'],
                    'title' => $value['title'],
                    'link' => "http://".$_SERVER['HTTP_HOST']."/kh/Pages/recognition.php"
                );
            }
            header('Content-Type: application/json');
            echo json_encode($newrecognition);
            break;
        case 'scholarship_en':
            // Prepare the query to fetch student performance data
            $query = "SELECT scholarship_id as id,  usea_scholarship_type.scholarship_type_en as scholarship_name, usea_degree.degree_name_en as education_level, institutions_en as school_name, education_major_en as major_name, expire_date from usea_scholarship, usea_scholarship_type, usea_degree WHERE usea_scholarship.education_level = usea_degree.degree_id AND usea_scholarship.scholarship_type = usea_scholarship_type.type_id";

            // Prepare the statement
            $stmt = $conn->prepare($query);

            // Execute the statement
            $stmt->execute();

            // Bind variables to the result columns
            $stmt->bindColumn('id', $id);
            $stmt->bindColumn('scholarship_name', $scholarship_name);
            $stmt->bindColumn('education_level', $education_level);
            $stmt->bindColumn('school_name', $school_name);
            $stmt->bindColumn('major_name', $major_name);
            $stmt->bindColumn('expire_date', $expire_date);
            // Create an array to store the data
            $data = [
                "scholarship" => []
            ];

            // Fetch the rows and store the data in the array
            while ($stmt->fetch(PDO::FETCH_ASSOC)) {
                $scholarship_data = [
                    "school_name" => $school_name,
                    "education_level"  => $education_level,
                    "major_name"  => $major_name,
                    "expire_date"  => "Date: " . date("d ",strtotime($expire_date)) . date("M ",strtotime($expire_date)) . date("Y ",strtotime($expire_date)). "Time: " . date("H:i ",strtotime($expire_date)),
                    'link'   => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/scholarship-university-detail.php?id=". $id,
                ];

                // Structure the data into nested arrays
                $scholarship_key = array_search($scholarship_name, array_column($data['scholarship'], 'scholarship_name'));
                if ($scholarship_key === false) {
                    $data['scholarship'][] = [
                        'scholarship_name' => $scholarship_name,
                        'scholarship_data' =>[]
                    ];
                    $scholarship_key = count($data['scholarship']) - 1;
                }
                $data['scholarship'][$scholarship_key]['scholarship_data'][] = $scholarship_data;
            }

            header('Content-Type: application/json');

            // Send the JSON response
            echo json_encode($data, JSON_PRETTY_PRINT);
            break;
        case 'scholarship_kh':
            // Prepare the query to fetch student performance data
            $query = "SELECT scholarship_id as id,  usea_scholarship_type.scholarship_type_kh as scholarship_name, usea_degree.degree_name_kh as education_level, institutions_kh as school_name, education_major_kh as major_name, expire_date from usea_scholarship, usea_scholarship_type, usea_degree WHERE usea_scholarship.education_level = usea_degree.degree_id AND usea_scholarship.scholarship_type = usea_scholarship_type.type_id";

            // Prepare the statement
            $stmt = $conn->prepare($query);

            // Execute the statement
            $stmt->execute();

            // Bind variables to the result columns
            $stmt->bindColumn('id', $id);
            $stmt->bindColumn('scholarship_name', $scholarship_name);
            $stmt->bindColumn('education_level', $education_level);
            $stmt->bindColumn('school_name', $school_name);
            $stmt->bindColumn('major_name', $major_name);
            $stmt->bindColumn('expire_date', $expire_date);
            // Create an array to store the data
            $data = [
                "scholarship" => []
            ];

            // Fetch the rows and store the data in the array
            while ($stmt->fetch(PDO::FETCH_ASSOC)) {
                $scholarship_data = [
                    "school_name" => $school_name,
                    "education_level"  => $education_level,
                    "major_name"  => $major_name,
                    "expire_date"  => "ថ្ងៃទី " . convertNumber(date("d",strtotime($expire_date))) . " ខែ" . convertMonth(date("M",strtotime($expire_date))) . " ឆ្នាំ" . convertNumber(date("Y",strtotime($expire_date))) . " ម៉ោង៖ " . convertNumber(date("H:i ",strtotime($expire_date))) . convertShift(date("a", strtotime($expire_date))),
                    'link'   => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/scholarship-university-detail.php?id=". $id,
                ];

                // Structure the data into nested arrays
                $scholarship_key = array_search($scholarship_name, array_column($data['scholarship'], 'scholarship_name'));
                if ($scholarship_key === false) {
                    $data['scholarship'][] = [
                        'scholarship_name' => $scholarship_name,
                        'scholarship_data' =>[]
                    ];
                    $scholarship_key = count($data['scholarship']) - 1;
                }
                $data['scholarship'][$scholarship_key]['scholarship_data'][] = $scholarship_data;
            }

            header('Content-Type: application/json');

            // Send the JSON response
            echo json_encode($data, JSON_PRETTY_PRINT);
            break;
        case 'events_en':
            // Prepare the query to fetch student performance data
            $query = "SELECT event_id as id, usea_event_status.event_status_en as event_name, event_cover as image,  event_title_en as title, event_description_en as description, event_date from usea_events, usea_event_status WHERE usea_events.event_status = usea_event_status.status_id ORDER BY event_id DESC LIMIT 1";

            // Prepare the statement
            $stmt = $conn->prepare($query);

            // Execute the statement
            $stmt->execute();

            // Bind variables to the result columns
            $stmt->bindColumn('id', $id);
            $stmt->bindColumn('event_name', $event_name);
            $stmt->bindColumn('image', $image);
            $stmt->bindColumn('title', $title);
            $stmt->bindColumn('description', $description);
            $stmt->bindColumn('event_date', $event_date);
            // Create an array to store the data
            $data = [
                "event" => []
            ];

            // Fetch the rows and store the data in the array
            while ($stmt->fetch(PDO::FETCH_ASSOC)) {
                $new_events_data = array();
                if($description == null){
                        $description = "";
                    }else{
                        $description = str_replace(array("&nbsp;", "<br>"), array("", "\n"),strip_tags($description, "<br>"));
                    }
                $new_events_data = [
                    "image" => "http://".$_SERVER['HTTP_HOST']."/media/events/". $image,
                    "title"  => $title,
                    "description"  => $description,
                    "event_date"  => date("l d M Y",strtotime($event_date)),
                    'time'   => date("H:i",strtotime($event_date)) . date(" a",strtotime($event_date)) ,
                ];

                // Structure the data into nested arrays
                $event_key = array_search($event_name, array_column($data['event'], 'event_name'));
                if ($event_key === false) {
                    $data['event'][] = [
                        'event_name' => $event_name,
                        'event_data' =>[]
                    ];
                    $event_key = count($data['event']) - 1;
                }
                $data['event'][$event_key]['event_data'][] = $new_events_data;
            }
            
            // header('Content-Type: application/json');
            // Send the JSON response
            // echo json_encode($data, JSON_PRETTY_PRINT);
            foreach ($data as $key => $value) {
                var_dump($value[0]['event_data']);
            }
            break;
        case 'events_kh':
            // Prepare the query to fetch student performance data
            $query = "SELECT event_id as id, usea_event_status.event_status_kh as event_name, event_cover as image,  event_title_kh as title, event_description_kh as description, event_date from usea_events, usea_event_status WHERE usea_events.event_status = usea_event_status.status_id ORDER BY event_id DESC LIMIT 15";

            // Prepare the statement
            $stmt = $conn->prepare($query);

            // Execute the statement
            $stmt->execute();

            // Bind variables to the result columns
            $stmt->bindColumn('id', $id);
            $stmt->bindColumn('event_name', $event_name);
            $stmt->bindColumn('image', $image);
            $stmt->bindColumn('title', $title);
            $stmt->bindColumn('description', $description);
            $stmt->bindColumn('event_date', $event_date);
            // Create an array to store the data
            $data = [
                "event" => []
            ];

            // Fetch the rows and store the data in the array
            while ($stmt->fetch(PDO::FETCH_ASSOC)) {
                $new_events_data = array();
                if($description == null){
                        $description = "";
                    }else{
                        $description = str_replace(array("&nbsp;", "<br>"), array("", "\n"),strip_tags($description, "<br>"));
                    }
                $new_events_data = [
                    "image" => "http://".$_SERVER['HTTP_HOST']."/media/events/" . $image,
                    "title"  => $title,
                    "description"  => $description,
                    "event_date"  => "ថ្ងៃទី " . convertNumber(date("d",strtotime($event_date))) . " ខែ" . convertMonth(date("M",strtotime($event_date))) . " ឆ្នាំ" . convertNumber(date("Y",strtotime($event_date))),
                    'time'   => convertNumber(date("h:i", strtotime($event_date))). " " . convertShift(date("a", strtotime($event_date)))
                ];

                // Structure the data into nested arrays
                $event_key = array_search($event_name, array_column($data['event'], 'event_name'));
                if ($event_key === false) {
                    $data['event'][] = [
                        'event_name' => $event_name,
                        'event_data' =>[]
                    ];
                    $event_key = count($data['event']) - 1;
                }
                $data['event'][$event_key]['event_data'][] = $new_events_data;
            }

            header('Content-Type: application/json');

            // Send the JSON response
            echo json_encode($data, JSON_PRETTY_PRINT);
            break;
        default:
            echo "Invalid Data";
            break;
    }
}

}catch (PDOException $e) {
    echo json_encode(array(
            'error' => true,
            'message' => $e->getMessage()
        ), 
        JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP);
}
    





?>