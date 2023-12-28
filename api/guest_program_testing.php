<?php

// Establish database connection
include_once '../connection/db.connection.php';

// Prepare the query to fetch student performance data
$query = "SELECT fac_icon, usea_faculty.fac_name_kh as fac_name, usea_major.major_name_kh as major_name, usea_degree.degree_name_kh as education_name,
major_info, usea_study_year.study_year_en as year_name, usea_semester.semester_name_en as semester_name, usea_subject.subject_name_en as subject_name, study_hour as hour, credit
FROM usea_study_plan, usea_faculty, usea_major, usea_degree, usea_study_year, usea_semester, usea_subject 
WHERE usea_study_plan.fac_name = usea_faculty.fac_id 
AND usea_study_plan.major_name = usea_major.major_id 
AND usea_study_plan.education_name = usea_degree.degree_id 
AND usea_study_plan.study_year = usea_study_year.study_year_id 
AND usea_study_plan.semester_name = usea_semester.semester_id
AND usea_study_plan.subject_name = usea_subject.subject_id";

// Prepare the statement
$stmt = $conn->prepare($query);

// Execute the statement
$stmt->execute();

// Bind variables to the result columns
$stmt->bindColumn('fac_icon', $fac_icon);
$stmt->bindColumn('fac_name', $fac_name);
$stmt->bindColumn('major_name', $major_name);
$stmt->bindColumn('education_name', $degree_name);
$stmt->bindColumn('major_info', $major_info);
$stmt->bindColumn('year_name', $year_name);
$stmt->bindColumn('semester_name', $semester_name);
$stmt->bindColumn('subject_name', $subject_name);
$stmt->bindColumn('hour', $hour);
$stmt->bindColumn('credit', $credit);

// Create an array to store the data
$data = [
    "program_data" => []
];

// Fetch the rows and store the data in the array
while ($stmt->fetch(PDO::FETCH_ASSOC)) {
    $subject_data = [
        "Subject" => $subject_name,
        "Hour"    => $hour,
        "Credit"  => $credit
    ];

    // Structure the data into nested arrays
    $faculty_key = array_search($fac_name, array_column($data['program_data'], 'faculty_name'));
    if ($faculty_key === false) {
        $data['program_data'][] = [
            'faculty_name' => $fac_name,
            'faculty_data' => [
                'fac_icon'   => $fac_icon,
                'major_name' => []
            ]
        ];
        $faculty_key            = count($data['program_data']) - 1;
    }

    $major_key = array_search($major_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'], 'major_name'));
    if ($major_key === false) {
        $data['program_data'][$faculty_key]['faculty_data']['major_name'][] = [
            'major_name' => $major_name,
            'major_data' => []
        ];
        $major_key                                                          = count($data['program_data'][$faculty_key]['faculty_data']['major_name']) - 1;
    }

    $degree_key = array_search($degree_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'], 'degree_name'));
    if ($degree_key === false) {
        $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][] = [
            'degree_name'   => $degree_name,
            'degree_detail' => [
                'major_info'  => $major_info,
                'degree_data' => []
            ]
        ];
        $degree_key                                                                                   = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data']) - 1;
    }

    $year_key = array_search($year_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'], 'year_name'));
    if ($year_key === false) {
        $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][] = [
            'year_name' => $year_name,
            'year_data' => []
        ];
        $year_key                                                                                                                                  = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data']) - 1;
    }

    $semester_key = array_search($semester_name, array_column($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'], 'semester_name'));
    if ($semester_key === false) {
        $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'][] = [
            'semester_name' => $semester_name,
            'semester_data' => []
        ];
        $semester_key                                                                                                                                                      = count($data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data']) - 1;
    }

    $data['program_data'][$faculty_key]['faculty_data']['major_name'][$major_key]['major_data'][$degree_key]['degree_detail']['degree_data'][$year_key]['year_data'][$semester_key]['semester_data'][] = $subject_data;
}

// Close the statement
// $stmt->close();

// Close the database connection
// $mysqli->close();

// Set the response headers
header('Content-Type: application/json');

// Send the JSON response
echo json_encode($data, JSON_PRETTY_PRINT);

?>