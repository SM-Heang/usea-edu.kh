<?php
    $page = 'master_degree_kh';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['page'] = $page;
    $_SESSION['right'] = 'master-degree-kh';

    include_once '../include/header.php';
    include_once '../../connection/db.connection.php';
?>




<?php
    include_once '../include/right-content-buttom.php';
    include_once '../include/footer.php';
?>




