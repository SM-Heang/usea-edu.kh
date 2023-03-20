<?php
    $page = 'career';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'career-right';
    include_once '../include/header.php';
    include_once '../../connection/db.connection.php';
?>




<?php
    include_once '../include/right-content-buttom.php';
    include_once '../include/footer.php';
?>




