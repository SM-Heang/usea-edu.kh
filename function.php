<?php

// convert en to kh number
function convertNumber($num){
    $kh_num = ["០", "១", "២", "៣", "៤", "៥", "៦", "៧", "៨", "៩"];
    for($i=0; $i<10; $i++){
        $num = str_replace($i, $kh_num[$i], $num);
    }
    echo $num;
}
// convert en to kh month
function convertMonth($month){
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
}

function convertShift($shift){
    if($shift == "pm"){
        echo "ល្ងាច";
      }elseif($shift == "am"){
        echo "ព្រឹក";
      }    
}
function selectData($conn, $sql) {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    }
?>