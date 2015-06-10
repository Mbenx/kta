<?php
$date = date("d/m/Y");
$getkode = antiInjections($_GET['kode']);
$queryselect = mysql_query("SELECT * FROM kwarrantb WHERE kdkwarran='$getkode'");
$row = mysql_fetch_array($queryselect);
?>
<div class="module">
    <div class="module-head">
        <h3>Form Ubah Kwarran</h3>
    </div>
    <div class="module-body">

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Well done!</strong> Now you are listening me :) 
        </div>

        <br />

        <form method="POST" action="" onsubmit="return validate();" name="ubahkwarran" class="form-horizontal row-fluid">
            <div class="span6">

                <div class="control-group">
                    <label>Nomor Kwarran</label>
                    <input value="<?php echo "$row[kdkwarran]";?>" name="kdkwarran" type="text" id="basicinput"  class="span8" readonly="">
                </div>

                <div class="control-group">           
                    <input value="<?php echo "$row[namakwarran]";?>" name="namakwarran" type="text" id="basicinput" placeholder="Masukkan Nama Kwarran" class="span8">                    
                </div>      

                <div class="control-group">
                    <label>Alamat Kwarran</label>                    
                    <textarea name="alamatkwarran" class="ckeditor" rows="5">
                        <?php echo "$row[alamatkwarran]";?>
                    </textarea>                    
                </div>                

            </div>

            <div class="span6">

                <div class="control-group">
                    <label>Admin</label>
                    <input value="<?php echo "$row[kodeadmin]";?>" name="kodeadmin" type="text" id="basicinput"  class="span8" readonly="">
                </div>
                
                <div class="control-group">
                    <label>Tanggal</label>
                    <input value="<?php echo "$date";?>" name="lastupdatekwarran" type="text" id="basicinput"  class="span8" readonly="">
                </div>

                <div class="control-group">                    
                    <button name="refresh" class="btn btn-info">Refresh</button>
                    <button name="ubah" class="btn btn-danger"> Ubah Kwarran</button>
                </div>

            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['ubah'])) {
    $kdkwarran = $_POST['kdkwarran'];
    $namakwarran = $_POST['namakwarran'];
    $alamatkwarran = $_POST['alamatkwarran'];
    $lastupdatekwarran = $_POST['lastupdatekwarran'];
    $kodeadmin = $_POST['kodeadmin'];
    $query = mysql_query("UPDATE `kwarrantb` SET `kdkwarran`='$kdkwarran',
            `namakwarran`='$namakwarran',`alamatkwarran`='$alamatkwarran',`lastupdatekwarran`='$lastupdatekwarran',
            `kodeadmin`='$kodeadmin' WHERE kdkwarran='$getkode'");
    if ($query) {
        echo "<script type='text/javascript'>
                alert('Ubah Berhasil !');
              </script>";
        echo "<meta http-equiv='refresh' content='0; URL=?page=datakwarran'>";
    } else {
        echo "<script type='text/javascript'>
                alert('Ubah Gagal !');
              </script>";
        echo "<meta http-equiv='refresh' content='0; URL=?page=ubahkwarran&kode=$getkode>";
    }
}
?>