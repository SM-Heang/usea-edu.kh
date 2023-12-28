<?php

$events = [
    ['event_name' => 'Event 1', 'event_date' => '2023-10-15'],
    ['event_name' => 'Event 2', 'event_date' => '2023-12-01'],
    ['event_name' => 'Event 3', 'event_date' => '2023-12-20'],
];

$currentDate = date('Y-m-d');  // Get the current date

foreach ($events as $event) {
    $eventDate = $event['event_date'];

    if (strtotime($eventDate) >= strtotime($currentDate)) {
        echo $event['event_name'] . ' is an upcoming event on ' . $event['event_date'] . '<br>';
    } else {
        echo $event['event_name'] . ' has passed on ' . $event['event_date'] . '<br>';
    }
}


?>


