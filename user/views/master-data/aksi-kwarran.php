<?php

error_reporting(0);
session_start();
//include "../../../config/class_database.php";
//include "../../../config/serverconfig.php";
//include "../../../config/debug.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    header("Location: ../../../index.php?code=2");
} else {
    if ($_GET['mod'] == 'fakultas' && $_GET['act'] == 'input') {
        $created_date = date('Y-m-d H:i:s');

        $db->database_prepare("INSERT INTO msfks (	fakultas,
													aktif,
													created_date,
													created_userid,
													modified_date,
													modified_userid)
											VALUE	(?,?,?,?,?,?)")
                ->execute($_POST["fakultas"], $_POST["aktif"], $created_date, $_SESSION["userid"], "", "");
        header("Location: ../../index.php?mod=fakultas&code=1");
    } elseif ($_GET['mod'] == 'fakultas' && $_GET['act'] == 'update') {
        $modified_date = date('Y-m-d H:i:s');

        $db->database_prepare("UPDATE msfks SET	fakultas = ?,
												aktif = ?,
												modified_date = ?,
												modified_userid = ?
												WHERE fakultas_id = ?")
                ->execute($_POST["fakultas"], $_POST["aktif"], $modified_date, $_SESSION["userid"], $_POST["id"]);
        header("Location: ../../index.php?mod=fakultas&code=2");
    } elseif ($_GET['mod'] == 'fakultas' && $_GET['act'] == 'delete') {
        $db->database_prepare("DELETE FROM msfks WHERE fakultas_id = ?")->execute($_GET["id"]);
        header("Location: ../../index.php?mod=fakultas&code=3");
    }
}
?>