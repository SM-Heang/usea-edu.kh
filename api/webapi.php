<?php 
	require "../connection/db.connection.php";
	// // Program to display URL of current page.
	// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	// 	$link = "https";
	// else
	// 	$link = "http";

	// // Here append the common URL characters.
	// $link .= "://";

	// // Append the host(domain name, ip) to the URL.
	// $link .= $_SERVER['HTTP_HOST'];

	// // Append the requested resource location to the URL
	// $link .= $_SERVER['REQUEST_URI'] . "?action=";

if(isset($_GET['action'])){
	switch ($_GET['action']) {
		case 'registration_info':
			$sql = "SELECT * FROM usea_admission";
			$stmt=$conn->prepare($sql);
			$stmt->execute();
			$data = $stmt->fetch(PDO::FETCH_ASSOC);
			break;
		
		default:
			echo "Invalid Data";
			break;
	}
}





?>