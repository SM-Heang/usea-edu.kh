<?php
		$page = 'partnership_international_detail';

	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	$_SESSION['page']= $page;
	$_SESSION['right_partnership']= 'partnership-international-detail';
	
    include_once '../include/header.php';
    include_once '../../connection/db.connection.php';

?>
	<!-- Start Web Location -->
	
	<div class="container">
		<div class="row">
			<div class="col-12 web-location">
				<ul>
					<li><a href="index.php">
						<i class="fa-solid fa-house"></i>
						<i class="fa-solid fa-caret-right"></i>
					</a>
					</li>
					<li>
						<a href="partnership-international.php">Partnership</a>
					</li>
				</ul>
            
			</div>
		</div><hr>
	</div>
	<!-- End Web Location -->
	<!-- Main Content-->
	<?php
			$id =$_GET['id'];
			$sql = "SELECT * FROM usea_partnership WHERE partnership_id = '$id' ";
				    $stmt = $conn->prepare($sql);
				    $stmt ->execute();
				    $temp = $stmt->fetch(PDO::FETCH_ASSOC);
		?>
	<div class="container">
		<div>
			<?php echo $temp['partnership_description_en']?>
		</div>
	</div>
	<!-- End Main Content-->
	
<?php 
	include_once '../include/buttom-content.php';
	include_once '../include/footer.php';
?>
