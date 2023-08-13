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
		case 'registration_info':
			$sql = "SELECT usea_degree.degree_id, admission_title as title, date_title, time_title, time_detail, usea_degree.degree_name_kh as education_name, degree_info, keyword FROM usea_admission, usea_degree WHERE usea_admission.degree_type = usea_degree.degree_id ";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$newresult = array();
			foreach ($result as $key => $value) {
				if(!isset($newresult[$value['degree_id']] )){
					$newresult[$value['degree_id']] = array(
						'education_name' => $value['education_name'],
						'list' => array(
							'info' => $value['degree_info']
					)
					);

				}

			}
			foreach ($result as $key => $value) {
				
				$finalresult = array(
					'title' => $value['title'],
					'details' => array(
						'date_title' => $value['date_title'],
						'education_list' => $newresult,	
						'time_title' => $value['time_title'] ,
						'time_detail' => $value['time_detail']
					),

				);
			// header('Content-Type: application/json');
			// echo json_encode($finalresult);
			}
			header('Content-Type: application/json');
			echo json_encode($finalresult);


			// foreach ($result as $key1 => $value1) {
			// 	// check if degree_id apprear
			// 	if(!isset($degree[$value1['degree_id']])){
			// 		$degree[$value1['degree_id']] = array(
			// 			'id' => $value1['degree_id'] ,
			// 			'degree_name' => $value1['education_name']
			// 		);
			// 	}
			// }

			// foreach ($degree as $key => $value) {
			// 	$list = array();
			// 	foreach ($result as $key1 => $value1) {
			// 		if($value['id']== $value1['degree_id']){
			// 			$list[] = $value1;
			// 		}
			// 	}
			// 	$degree[$key]['list'] = $list;
			// }
			// // var_dump($degree);
			// $newresult = array();
			// foreach ($result as $key => $value) {

			// 	$newresult = array(
			// 		'title' => 'កាលបរិច្ឆេទចូលរៀន និងម៉ោងសិក្សាសម្រាប់កម្មវិធី សិក្សាថ្ងៃច័ន្ទ ដល់ថ្ងៃសៅរ៍',
			// 		'details' => array(
			// 			'date_title' => 'កាលបរិច្ឆេទចូលរៀនសម្រាប់ ថ្នាក់បរិញ្ញាបត្ររង និងថ្នាក់បរិញ្ញាបត្រដូចខាងក្រោម',
			// 			'education_list' => $degree,						
			// 			'time_title' => 'ម៉ោងសិក្សាសម្រាប់ថ្នាក់បរិញ្ញាបត្ររង និងថ្នាក់បរិញ្ញាបត្រដូចខាងក្រោម',
			// 			'time_detail' => "ពេលព្រឹក ម៉ោង ៧:០០ ដល់ ១០:៣០\r\n ពេលល្ងាច ម៉ោង ១៨:០០ ដល់ ២១:១៥" 
			// 		),

			// 	);
			// }

			
			// header('Content-Type: application/json');
			// echo json_encode($newresult);
			
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
					'o_link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/scholarship-university-detail.php?id=". $value['id']
				);
			}
			$output = $newscholarship;
			header('Content-Type: application/json');
			echo json_encode($output);
			break;
		case 'career':
			$sql = "SELECT career_id as id,	career_img as logo,	career_position as position, career_organization as organization FROM usea_career WHERE keyword = 'career'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$career = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$newcareer = array();
			foreach ($career as $key => $value) {
				$newcareer[] = array(
					'id' => $value['id'],
					'logo' => "http://".$_SERVER['HTTP_HOST']."/media/career/". $value['logo'],
					'position' => $value['position'],
					'organization' => $value['organization'],
					'link' => "http://".$_SERVER['HTTP_HOST']."/en/ButtomPages/career-detail.php?id=". $value['id']
				);
			}
			$output = $newcareer;
			header('Content-Type: application/json');
			echo json_encode($output);
			break;
		case 'faq':
			$sql = "SELECT faq_id as id, faq_question as question, faq_answer as answer FROM usea_faq";
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
		case 'past_events':
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
				// if($value['past_image']&&$value['past_title'] == null){
				// 	echo $value['past_image'] = $value['past_title'] = "Null";
				// }
				if($value['past_desc'] == null){
					$value['past_desc'] = "";
				}else{
					$value['past_desc'] = str_replace(array("&nbsp;", "<br>"), array("", "\n"),strip_tags($value['past_desc'], "<br>"));
				}
				$new_past_events[] = array(
					'id' => $value['id'],
					'past_image' => "http://".$_SERVER['HTTP_HOST']."/media/events/". $value['past_image'],
					'past_title' => $value['past_title'],
					'past_desc' =>	$value['past_desc'] ,

					'past_day' => convertWeekDay(date('D', strtotime($value['past_date']))),
					'past_date' => convertNumber(date('d', strtotime($value['past_date']))),
					'past_month' => convertMonth(date('M', strtotime($value['past_date']))),
					'past_year' => convertNumber(date('Y', strtotime($value['past_date']))),
					'past_time' => "៩:00 ព្រឹក"
				);
			}
			header('Content-Type: application/json');
			echo json_encode($new_past_events);
			// var_dump($new_past_events['past_desc']);
			break;
		case 'upcoming_events':
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
				// 	echo $value['upcoming_image'] = $value['upcoming_title'] = "Null";
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
					'upcoming_desc' =>	$value['upcoming_desc'],
					'upcoming_day' => convertWeekDay(date('D', strtotime($value['upcoming_date']))),
					'upcoming_date' => convertNumber(date('d', strtotime($value['upcoming_date']))),
					'upcoming_month' => convertMonth(date('M', strtotime($value['upcoming_date']))),
					'upcoming_year' => convertNumber(date('Y', strtotime($value['upcoming_date']))),
					'upcoming_time' => "៩:00 ព្រឹក"
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
			link FROM usea_video";
			$stmt=$conn->prepare($sql);
			$stmt->execute();
			$yt_video = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$newyt_video = array();
			foreach ($yt_video as $key => $value) {
				$newyt_video[] = array(
					'id' => $value['id'],
					'youtube_thumbnail' => $value['youtube_thumbnail'],
					'title' => $value['title'],
					'caption' => $value['caption'],
					'link' => $value['link']
				);
			}
			header('Content-Type: application/json');
			echo json_encode($newyt_video);
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

