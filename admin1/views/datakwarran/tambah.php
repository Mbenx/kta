<?php
$date = date("d/m/Y");
$query = mysql_query("SELECT * FROM admintb WHERE ");
?>
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-panel">
                <!--                <form method="POST" name="tambah" enctype="multipart/form-data" onsubmit="return validate();">-->
                <h4 class="mb">
                    <i class="fa fa-angle-right"></i>
                    Form Tambah Kwarran
                </h4><br>
                <form class="form-horizontal style-form" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">  
                            <label class="col-sm-2 col-sm-2 control-label">Kode</label>
                            <div class="col-sm-3">
                                <input name="kdkwarran" class="form-control" id="disabledInput" type="text" value="11-03-" readonly="">
                            </div>
                            <div class="col-sm-2">
                                <select name="kdkwarran1" class="form-control">
                                    <?php
                                    $nok = 1;
                                    while ($nok <= 18) {
                                        echo "<option>$nok</option>";
                                        $nok++;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8">
                                <input name="namakwarran" type="text" placeholder="Masukkan Nama Kwarran" class="form-control ">                           
                            </div>
                        </div>
                        <div class="form-group">                           
                            <div class="col-sm-10">
                                <textarea name="alamatkwarran" class="ckeditor" type="text" required="" rows="10"></textarea>
                                <span class="help-block">
                                    A block of help text that breaks onto a new line and may extend beyond one line.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Kode Admin</label>                           
                            <div class="col-sm-5">
                                <input name="kodeadmin" value="" type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Tanggal Pembuatan</label>                          
                            <div class="col-sm-5">
                                <input name="tanggalkwarran" value="<?php echo "$date";?>" type="text" class="form-control" disabled>
                            </div>
                        </div>                        
                    </div>            
                    <div class="form-group">
                        <button type="button" onclick="history.go(0)" value="refresh" class="btn btn-default">
                            Refresh
                        </button>
                        <button name="tambah" class="btn btn-danger">
                            +Tambah Kwarran
                        </button>                        
                        <span class="help-block">
                            A block of help text that breaks onto a new line and may extend beyond one line.
                        </span>
                    </div>                 
                </form>
            </div>
        </div><!-- col-lg-12-->      
    </div><!-- /row -->
</section><! --/wrapper -->
<?php
if (isset($_POST['tambah'])) {
    $kd = antiInjections($_POST['kdkwarran']);
    $kd1 = antiInjections($_POST['kdkwarran1']);
    $kdkwarran = $kd . $kd1;
    $namakwarran = antiInjections($_POST['namakwarran']);
    $alamatkwarran = $_POST['alamatkwarran'];
    $tanggalkwarran = antiInjections($_POST['tanggalkwarran']);
    $kodeadmin = antiInjections($_POST['kodeadmin']);
    $query = mysql_query("INSERT INTO `kwarrantb`(`kdkwarran`, `namakwarran`, `alamatkwarran`,
             `kodeadmin`, `tanggalkwarran`)
             VALUES ('$kdkwarran','$namakwarran','$alamatkwarran','$tanggalkwarran','$kodeadmin')");
    if ($query) {
        echo "<script type='text/javascript'>
        alret('Tambah barang Berhasil !!');
        </script>";
        echo "<meta http-equiv='refresh'  content='0; URL=?page=datakwarran'>";
    } else {
        echo "<script type='text/javascript'>
        alret ('Tambah Gagal !!');
        </script>";
        echo "<meta http-equiv='refresh' content='0; URL=?page=tambahkwarran'>";
    }
}
?>