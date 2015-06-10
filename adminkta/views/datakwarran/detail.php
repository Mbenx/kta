<?php
$getkd = antiInjections($_GET['kode']);
$queryselect = mysql_query("SELECT * FROM kwarrantb WHERE kdkwarran='$getkd'");
$row = mysql_fetch_array($queryselect);
?>
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Kwarran</h1>
    </div>
    <!--End Page Header -->
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Kode Kwarran      : <?php echo "$row[kdkwarran]"; ?>
        </div>
        <div class="panel-heading">
            Nama            : <?php echo "$row[namakwarran]"; ?>
        </div>
        <div class="panel-heading">
            Alamat           : <?php echo "$row[alamatkwaran]"; ?>
        </div>
        <div class="panel-heading">
            Admin        : <?php echo "$row[kodeadmin]"; ?>
        </div>
        
        <div class="panel-heading">
            Tanggal Pembuatan : <?php echo "$row[tanggalkwarran]"; ?>
        </div>

    </div>
</div>


