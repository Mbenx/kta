<?php

$pages = ($_GET['page']);
switch ($pages) {
    case "login":
        include_once './views/login/login.php';
        break;
    
    case "daftarakun":
        include_once '.views/login/daftarakun.php';
        break;
    
    default:
        include_once './views/master/master.php';
        break;
}
?>