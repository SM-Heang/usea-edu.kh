<?php
    $page = 'human-resource';
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['page']= $page;
    $_SESSION['right']= 'human_resource';
    include_once '../include/header.php';
    include_once '../../connection/db.connection.php';
?>




<?php
    include_once '../include/buttom-content.php';
    include_once '../include/footer.php';
?>




