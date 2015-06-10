<div class="content">
    <div class="btn-controls">
        <div class="btn-box-row row-fluid">
            <a href="?page=tambahkwarran" class="btn-box span3">
                <i class="icon-plus"></i>
                <b>Tambah Kwarran</b>
            </a>
            <a href="?page=cetakkwarran" class="btn-box span3">
                <i class="icon-print"></i>
                <b>Cetak Data</b>
            </a>
            <a href="?page=uploadkwarran" class="btn-box span3">
                <i class="icon-upload"></i>
                <b>Upload Data</b>
            </a>

        </div>

    </div><!--/.btn-controls-->
    <div class="module">
        <div class="module-head">
            <h3>
                Data Kwarran</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">
                <thead>
                    <tr>
                        <th>
                            Kode / Tanggal 
                        </th>
                        <th>
                            Nama 
                        </th>
                        <th>
                            Alamat 
                        </th>
                        <th>
                            Admin
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysql_query("SELECT * FROM kwarrantb");
                    $no = 1;
                    while ($row = mysql_fetch_array($query)) {
                        echo "<tr class='odd gradeX'>
                                <td> <a href='?page=detailkwarran&kode=$row[kdkwarran]'>$row[kdkwarran]<br> Pembuatan : $row[tanggalkwarran]</a> </td>
                                <td> $row[namakwarran] </td>
                                <td> $row[alamatkwarran] </td>
                                <td class='center'> $row[kodeadmin] </td>
                                <td>                                    
                                    <a href='?page=ubahkwarran&kode=$row[kdkwarran]'><button class='btn btn-primary' title='edit'><i class='icon-edit'></i></button></a>
                                    <button class='btn btn-primary' title='hapus' onclick='myFunction(\"$row[kdkwarran]\")'><i class='icon-trash'></i></button>                                
                                </td>
                            </tr>  ";
                    }
                    ?>  
                
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            Kode / Tanggal 
                        </th>
                        <th>
                            Nama 
                        </th>
                        <th>
                            Alamat 
                        </th>
                        <th>
                            Admin
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--/.module-->
</div>
<script type="text/javascript">
    function myFunction(kode)
    {
        var x;
        var r = confirm("Yakin Menghapus data dengan kode (" + kode + ") ?");
        if (r == true)
        {
            window.location.assign("?page=datakwarran&kodehapus=" + kode);
        }
    }
</script>
<?php
if (isset($_GET['kodehapus'])) {

    $kode = antiInjections($_GET['kodehapus']);
    $query = mysql_query("DELETE FROM kwarrantb WHERE kdkwarran='$kode'");
    if ($query) {
        echo "<script type='text/javascript'>
        alert('Hapus Berhasil !');
        </script>";
        echo "<meta http-equiv='refresh' content='0; URL=?page=datakwarran'>";
    } else {
        echo "<script type='text/javascript'>
        alert('Hapus Gagal !');
        </script>";
        echo "<meta http-equiv='refresh' content='0; URL=?page=datakwarran'>";
    }
}
?>