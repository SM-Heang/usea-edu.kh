<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "usea_maindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$response = array();

// Check for errors
if (!$conn) {
    die('Error connecting to the database.');
}

// Retrieve data from the database
$sql    = 'SELECT shift_date.shift_title_kh as title, date_title, time_title, time_detail, usea_degree.degree_name_kh as degree_name, degree_info 
FROM usea_admission, usea_degree, shift_date WHERE usea_admission.degree_type = usea_degree.degree_id && usea_admission.admission_title = shift_date.shift_id';
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die('Error retrieving data from the database.');
}

// Convert the data to an array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
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

// Return the data as JSON
echo json_encode($data);
?>