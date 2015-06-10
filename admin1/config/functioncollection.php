<?php

function antiInjections($string) {
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = mysql_real_escape_string($string);
    return $string;
}

function redirectMeta($time, $url) {
    echo "<meta http-equiv='refresh' content='$time; URL=$url'>";
}

function redirectJS($url) {
    echo "<script type='text/javascript'>
            window.location.href='$url';
        </script>";
}

function urlAtoom($end) {
    $url = $_SERVER['PHP_SELF'];
    $dir = explode("/", $url);
    $enddir = end($dir);
    $result = str_replace("$enddir", "", $url);
    echo "http://" . $_SERVER['HTTP_HOST'], $result, $end;
}

function imageUpload($postfile, $folder) {
    $namafile = $postfile;
    $namafile_name = $namafile['name'];
    $namafile_type = $namafile['type'];
    $namafile_size = $namafile['size'];
    $a = date('Ymd-his');

//UPLOAD FOTO 1
    if (!empty($namafile_type)) {
        switch ($namafile_type) {
            case "image/jpeg" :
                move_uploaded_file($namafile['tmp_name'], "$folder/$namafile_name");
                $namafile1 = $a . ".jpg";
                rename("$folder/$namafile_name", "$folder/$namafile1");
                return $namafile1;
                break;
            case "image/png" :
                move_uploaded_file($namafile['tmp_name'], "$folder/$namafile_name");
                $namafile1 = $a . ".png";
                rename("$folder/$namafile_name", "$folder/$namafile1");
                return $namafile1;
                break;
            default :
                echo "<script type=\"text/javascript\">
                            alert(\"File Foto Harus Bertipe (*.jpg, *.png) !\");
                      </script>";
        }
    }
}

function getFileExtention($filename) {
    $path = $filename;
    return pathinfo($path, PATHINFO_EXTENSION);
}

function filesUpload($postfile, $folder) {
    $namafile = $postfile;
    $namafile_name = $namafile['name'];
    $a = date('his');
    move_uploaded_file($namafile['tmp_name'], "$folder/$namafile_name");
    $namafile1 = "$namafile_name-$a." . getFileExtention($namafile_name);
    rename("$folder/$namafile_name", "$folder/$namafile1");
    return $namafile1;
}

function rupiah($uang) {
    $rp = "";
    $digit = strlen($uang);

    while ($digit > 3) {
        $rp = "." . substr($uang, -3) . $rp;
        $lebar = strlen($uang) - 3;
        $uang = substr($uang, 0, $lebar);
        $digit = strlen($uang);
    }
    $rp = $uang . $rp . ",-";
    return "Rp." . $rp;
}

function makeInt($angka) {
    if ($angka < -0.0000001) {
        return ceil($angka - 0.0000001);
    } else {
        return floor($angka + 0.0000001);
    }
}

function konvhijriah($tanggal) {

    switch ($hari) {
        case "Monday":
            $harinya = "Senin";
            break;
        case "Tuesday";
            $harinya = "Selasa";
            break;
        case "Wednesday":
            $harinya = "Rabu";
            break;
        case "Thursday":
            $harinya = "Kamis";
            break;
        case "Friday":
            $harinya = "Jum'at";
            break;
        case "Saturday":
            $harinya = "Sabtu";
            break;
        default:
            $harinya = "Minggu";
            break;
    }
    $array_bulan = array("Muharram", "Safar", "Rabiul Awwal", "Rabiul Akhir",
        "Jumadil Awwal", "Jumadil Akhir", "Rajab", "Sya'ban",
        "Ramadhan", "Syawwal", "Zulqaidah", "Zulhijjah");

    $date = makeInt(substr($tanggal, 8, 2));
    $month = makeInt(substr($tanggal, 5, 2));
    $year = makeInt(substr($tanggal, 0, 4));

    if (($year > 1582) || (($year == "1582") && ($month > 10)) || (($year == "1582") && ($month == "10") && ($date > 14))) {
        $jd = makeInt((1461 * ($year + 4800 + makeInt(($month - 14) / 12))) / 4) +
                makeInt((367 * ($month - 2 - 12 * (makeInt(($month - 14) / 12)))) / 12) -
                makeInt((3 * (makeInt(($year + 4900 + makeInt(($month - 14) / 12)) / 100))) / 4) +
                $date - 32075;
    } else {
        $jd = 367 * $year - makeInt((7 * ($year + 5001 + makeInt(($month - 9) / 7))) / 4) +
                makeInt((275 * $month) / 9) + $date + 1729777;
    }

    $wd = $jd % 7;
    $l = $jd - 1948440 + 10632;
    $n = makeInt(($l - 1) / 10631);
    $l = $l - 10631 * $n + 354;
    $z = (makeInt((10985 - $l) / 5316)) * (makeInt((50 * $l) / 17719)) + (makeInt($l / 5670)) * (makeInt((43 * $l) / 15238));
    $l = $l - (makeInt((30 - $z) / 15)) * (makeInt((17719 * $z) / 50)) - (makeInt($z / 16)) * (makeInt((15238 * $z) / 43)) + 29;
    $m = makeInt((24 * $l) / 709);
    $d = $l - makeInt((709 * $m) / 24);
    $y = 30 * $n + $z - 30;

    $g = $m - 1;
    $final = "$d $array_bulan[$g] $y H";

    return $final;
}

function konvnasional($tanggal) {

    $array_bulan = array("Januari", "Februari", "Maret",
        "April", "Mei", "Juni",
        "Juli", "Agustus", "September",
        "Oktober", "Nopember", "Desember");

    $tanggalnya = substr($tanggal, 8, 2);
    $bulannya = $array_bulan[ceil(substr($tanggal, 5, 2)) - 1];
    $tahunnya = substr($tanggal, 0, 4);
    $jamnya = substr($tanggal, 11, 2);
    $menitnya = substr($tanggal, 14, 2);
    $detiknya = substr($tanggal, 17, 2);
    $tglsekarang = $tanggalnya . " " . $bulannya . " " . $tahunnya . " " . $jamnya . ":" . $menitnya . ":" . $detiknya;

    echo "Tanggal Sekarang : " . $tglsekarang;
}

function selisihHari($tgl1) {
    $tgl = explode("/", $tgl1);
    $cek_jmlhr1 = cal_days_in_month(CAL_GREGORIAN, $tgl['1'], $tgl['2']);
    $cek_jmlhr2 = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
    $sshari = $cek_jmlhr1 - $tgl['0'];
    $ssbln = 12 - $tgl['1'] - 1;
    $hari = 0;
    $bulan = 0;
    $tahun = 0;
//hari+bulan
    if ($sshari + date('d') >= $cek_jmlhr2) {
        $bulan = 1;
        $hari = $sshari + date('d') - $cek_jmlhr2;
    } else {
        $hari = $sshari + date('d');
    }
    if ($ssbln + date('m') + $bulan >= 12) {
        $bulan = ($ssbln + date('m') + $bulan) - 12;
        $tahun = date('Y') - $tgl['2'];
    } else {
        $bulan = ($ssbln + date('m') + $bulan);
        $tahun = (date('Y') - $tgl['2']) - 1;
    }

    $selisih = $hari;
    return $selisih;
}

function selisihHari2($tglAwal, $tglAkhir) {
    // list tanggal merah selain hari minggu
    $tglLibur = Array("2013-01-04", "2013-01-05", "2013-01-17");

    // memecah string tanggal awal untuk mendapatkan
    // tanggal, bulan, tahun
    $pecah1 = explode("/", $tglAwal);
    $date1 = $pecah1[0];
    $month1 = $pecah1[1];
    $year1 = $pecah1[2];

    // memecah string tanggal akhir untuk mendapatkan
    // tanggal, bulan, tahun
    $pecah2 = explode("/", $tglAkhir);
    $date2 = $pecah2[0];
    $month2 = $pecah2[1];
    $year2 = $pecah2[2];

    // mencari total selisih hari dari tanggal awal dan akhir
    $jd1 = GregorianToJD($month1, $date1, $year1);
    $jd2 = GregorianToJD($month2, $date2, $year2);

    $selisih = $jd2 - $jd1;
    // menghitung selisih hari yang bukan tanggal merah dan hari minggu
    return $selisih;
}
?>
