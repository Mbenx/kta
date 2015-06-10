<?php
$date = date("d/m/Y");

?>
<div class="module">
    <div class="module-head">
        <h3>Form Tambah Kwarran</h3>
    </div>
    <div class="module-body">

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Well done!</strong> Now you are listening me :) 
        </div>

        <br />

        <form method="POST" action="" onsubmit="return validate();" name="tambahkwarran" class="form-horizontal row-fluid">
            <div class="span6">

                <div class="control-group"> 
                    <label>Nomor Kwarran</label>
                    <input value="11-03-" name="kdkwarran" class="span2" readonly="">
                    <select tabindex="1" name="kdkwarran1" class="span2">
                        <?php
                        $nok = 1;
                        while ($nok <= 18) {
                            echo "<option>$nok</option>";
                            $nok++;
                        }
                        ?>
                    </select>                    
                </div> 

                <div class="control-group">           
                    <input name="namakwarran" type="text" id="basicinput" placeholder="Masukkan Nama Kwarran" class="span8">                    
                </div>      

                <div class="control-group">
                    <label>Alamat Kwarran</label>                    
                    <textarea name="alamatkwarran" class="ckeditor" rows="5"></textarea>                    
                </div>                

            </div>

            <div class="span6">

                <div class="control-group">
                    <label>Admin</label>
                    <input value="" name="kodeadmin" type="text" id="basicinput"  class="span8" readonly="">
                </div>
                
<!--                <div class="control-group">
                    <label>Terahir di Update</label>
                    <input value="" name="lastupdatekwarran" type="text" id="basicinput"  class="span8" disabled>
                </div>-->

                <div class="control-group">
                    <label>Tanggal Pembuatan</label>
                    <input value="<?php echo "$date";?>" name="tanggalkwarran" type="text" id="basicinput"  class="span8" readonly="">
                </div>

                <div class="control-group">                    
                    <button name="refresh" type="refresh" class="btn btn-info">Refresh</button>
                    <button name="tambah" class="btn btn-danger">+ Tambah Kwarran</button>
                </div>

            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['tambah'])) {
    $kd = $_POST['kdkwarran'];
    $kd1 = $_POST['kdkwarran1'];
    $kdkwarran = $kd . $kd1;
    $namakwarran = antiInjections($_POST['namakwarran']);
    $alamatkwarran = $_POST['alamatkwarran'];
    $tanggalkwarran = antiInjections($_POST['tanggalkwarran']);
    $kodeadmin = antiInjections($_POST['kodeadmin']);
    $query = mysql_query("INSERT INTO `kwarrantb`(`kdkwarran`, `namakwarran`, 
            `alamatkwarran`, `kodeadmin`, `tanggalkwarran`) 
            VALUES ('$kdkwarran','$namakwarran','$alamatkwarran','$kodeadmin','$date')");
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