<?php
$email = $_POST['email'];
$password = $_POST ['password'];

if ($_POST["admin"]==1){
    $sql = $db->database_prepare("SELECT * FROM admintb WHERE email = ? AND password = ? AND leveladmin = '1'")->execute($email,$password);
    
}
 else {
    $sql = $db->database_prepare("SELECT * FROM usertb WHERE email = ? AND password = ? AND status = '1' ")->execute($email,$password);
}
$nums = $db->database_nums_rows($sql);
$data =$db->database_fetch_array($sql);

if ($nums > 0){
    session_start();
    $last_login = date('d-m-Y H:i:s');
    
    if ($_POST['admin']== 1){
        
    }
}
?>