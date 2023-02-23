<?php
$page = 'academics';

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
$_SESSION['page'] = $page;
include_once '../include/header.php';
include_once '../../connection/db.connection.php';
?>
<!-- Main Content-->
<div class="container">
	<div class="row">
		<!-- Start Content-->
		<div class="col-xxl-12">
			<div id="content-detail">
				<?php 
        $sql = "SELECT * from usea_events WHERE event_status = 'past' ORDER BY event_date";
        if($_GET['id']){
          print_r($_GET);
        }
        ?>
			</div>
		</div>

<?php
include_once '../include/buttom-content.php';
include_once '../include/footer.php';
?>