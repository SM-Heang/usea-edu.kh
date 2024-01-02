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
        case 'events_en':
            // Prepare the query to fetch student performance data
            $query = "WITH RankedEvents AS (
                SELECT
                    event_id as id,
                    usea_event_status.event_status_en as event_name,
                    event_cover as image,
                    event_title_en as title,
                    event_description_en as description,
                    event_date,
                    ROW_NUMBER() OVER (PARTITION BY usea_event_status.event_status_en ORDER BY event_id DESC) AS RowNum
                FROM
                    usea_events
                JOIN
                    usea_event_status ON usea_events.event_status = usea_event_status.status_id
            )
            SELECT
                id,
                event_name,
                image,
                title,
                description,
                event_date
            FROM
                RankedEvents
            WHERE
                RowNum <= 10
            ORDER BY event_name DESC"; // Add ORDER BY clause here
        
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
                var_dump($startDate);
                $new_events_data = array();
                if($description == null){
                        $description = "";
                    }else{
                        $description = str_replace(array("&nbsp;", "<br>"), array("", "\n"),strip_tags($description, "<br>"));
                    }
                $new_events_data = [
                    "image" => "http://" . $_SERVER['HTTP_HOST'] . "/media/events/" . $image,
                    "title" => $title,
                    "description" => $description,
                    "event_date" => date("l d M Y", strtotime($event_date)),
                    'time' => date("H:i", strtotime($event_date)) . date(" a", strtotime($event_date)),
                ];
        
                // Structure the data into nested arrays
                $event_key = array_search($event_name, array_column($data['event'], 'event_name'));
        
                if ($event_key === false) {
                    $data['event'][] = [
                        'events_date'=> $event_date,
                        'event_name' => $event_name,
                        'event_data' => []
                    ];
                    $event_key = count($data['event']) - 1;
                }
        
                $data['event'][$event_key]['event_data'][] = $new_events_data;
            }
        
            // Send the JSON response
            // echo json_encode($data, JSON_PRETTY_PRINT);
            foreach ($data as $key => $value) {
                var_dump($value[0]['event_data']);
            }
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