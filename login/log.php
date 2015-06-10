<?php
session_start();
include_once '../config/core.php';
include_once '../config/functioncollection.php';

$emailuser = antiInjections($_POST['emailuser']);
$passworduser = antiInjections($_POST['passworduser']);
$pengguna = antiInjections($_GET['pengguna']);

if($pengguna=="masuk"){
    $cek = mysql_query("SELECT * FROM usertb WHERE emailuser='$emailuser' AND passworduser='$passworduser'");
    if (mysql_num_rows($cek)==1){
        
        $c=  mysql_fetch_array ($cek);
        $_SESSION['emailuser'] = $c['emailuser'];
        $_SESSION['namauser'] = $c['namauser'];
        
        header("location:./user/index.php");
        
    }  else {
    die("passord atau username anda salah <a href='../index.php'>Kembali</a>");
    }
    
}
else if($pengguna=="keluar"){
    unset($_SESSION['emailuser']);
    unset($_SESSION['passworduser']);
    header("location:../index.php");
}
?>
