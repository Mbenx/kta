<?php
$pages = antiInjections($_GET['page']);
switch ($pages) {
    case "organisasi":
        include_once './views/mng-sistem/organisasi.php';
        break;
    
    case "pengguna":
        include_once 'views/mng-sistem/pengguna.php';
        break;
    
    case "backup":
        include_once './views/mng-sistem/backup.php';
        break;

    case "datakwarran":
        include_once './views/master-data/datakwarran.php';
        break;
    
    case "datapangkalan":
        include_once './views/master-data/datapangkalan.php';
        break;
    
    case "datagudep":
        include_once './views/master-data/datagudep.php';
        break;
    
    case "dataanggota":
        include_once './views/master-data/dataanggota.php';
        break;
    
    case "datagolongan":
        include_once './views/master-data/datagolongan.php';
        break;
    
    case "datapotensi":
        include_once './views/datapotensi/datapotensi.php';
        break;
    
    case "ktapramuka":
        include_once './views/kta/ktapramuka.php';
        break;
    
    case "allproduk":
        include_once './views/master/allproduk.php';
        break;

    default:
        include_once './views/master/master.php';
        break;
}
?>
