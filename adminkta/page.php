<?php
$pages = antiInjections($_GET['page']);
switch ($pages) {
    
    case "datakwarran":
        include_once './views/datakwarran/masterdata.php';
        break;
    
    case "detailkwarran":
        include_once './views/datakwarran/detail.php';
        break;
    
    case "tambahkwarran":
        include_once './views/datakwarran/tambah.php';
        break;
    
    case "ubahkwarran":
        include_once './views/datakwarran/ubah.php';
        break;
    
   

    default:
        include_once './views/master/master.php';
        break;
}
?>
