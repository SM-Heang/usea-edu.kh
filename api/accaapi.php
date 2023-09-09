<?php

// Establish database connection
include_once '../connection/db.connection.php';

// Prepare the query to fetch student performance data
$sql = "SELECT usea_faculty_icon.icon_name as fac_icon,
usea_faculty.fac_name_kh as fac_name,
usea_major.major_name_kh as major_name,
usea_subject.subject_name_en as subject_name,
hour_per_week,
weeks,
total_hour
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

// Create an array to store the data
$data = [
    "program_acca" => []
];
$no = 0;
// Fetch the rows and store the data in the array
while ($stmt->fetch()) {

    $faculty_key = array_search($fac_name, array_column($data['program_acca'], 'faculty_name'));
    if ($faculty_key === false) {
        $faculty_data = [
            'fac_icon'   => $fac_icon,
            'major_data' => []
        ];

        $major_data = [
            'major_name'   => $major_name,
            'subject_data' => []
        ];

        $subject_data = [
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
                'subject_data' => []
            ];

            $subject_data = [
                'subject'       => $subject_name,
                'hour_per_week' => $hour_per_week,
                'weeks'         => $weeks,
                'total_hour'    => $total_hour,
            ];

            $major_data['subject_data'][]= $subject_data;
            $data['program_acca'][$faculty_key]['faculty_data'][0]['major_data'][] = $major_data;
        } else {
            $subject_data = [
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

?>