<?php
// Establish a database connection
include_once '../connection/db.connection.php';
// Fetch data from the database
$sql = "SELECT event_status as event_name FROM usea_events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $current_event_name = null;
    $count = 0;

    while ($row = $result->fetch_assoc()) {
        $event_name = $row['event_name'];

        if ($event_name !== $current_event_name) {
            // Display data for a new event_name
            if ($current_event_name !== null) {
                echo "<hr>"; // Add a separator between different event_names
            }

            $current_event_name = $event_name;
            $count = 0;
        }

        // Stop displaying data after 10 records for the current event_name
        if ($count >= 10) {
            continue;
        }
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
