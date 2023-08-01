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
            return "វិច្ឆិការ";
        break;
        case "Dec":
            return "ធ្នូ";
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
		case 'registration_info':
			$sql = "SELECT * FROM usea_admission";
			$stmt=$conn->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetch(PDO::FETCH_ASSOC);
			break;
		case 'scholarship_university':
			$sql = "SELECT 
			scholarship_id as id, 
			institutions as i_school_name, 
			education_level as i_educational_level,
			education_major as i_major,
			expire_date as i_expire_date
			FROM usea_scholarship WHERE keyword= 'university'";
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
					'i_link' => "http://".$_SERVER['HTTP_HOST']."/usea-edu.kh/en/ButtomPages/scholarship-university-detail.php?id=". $value['id']
				);
			}

			$output = $newscholarship;
			header('Content-Type: application/json');
			echo json_encode($output);
			break;
		case 'scholarship_institution':
			$sql = "SELECT 
			scholarship_id as id, 
			institutions as i_school_name, 
			education_level as i_educational_level,
			education_major as i_major,
			expire_date as i_expire_date
			FROM usea_scholarship WHERE keyword= 'institution'";
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
					'o_link' => "http://".$_SERVER['HTTP_HOST']."/usea-edu.kh/en/ButtomPages/scholarship-university-detail.php?id=". $value['id']
				);
			}

			$output = $newscholarship;
			header('Content-Type: application/json');
			echo json_encode($output);
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