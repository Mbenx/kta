<div class="row">
    <thead>
        <tr>
            <th><i></i>Kode Kwarran</th>
            <th><i></i>Nama</th>
            <th><i></i> Alamat</th>
            <th><i></i>Admin</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
                <?php
                $query = mysql_query("SELECT * FROM kwarrantb");
                $no = 1;
                while ($row = mysql_fetch_array($query)) {
                    echo "<tr>
                <td title='detail'><a href='?page=detailkwarran'>$row[kdkwarran]<br> Pembuatan : $row[tanggalkwarran]</a></td>
                <td>$row[namakwarran]</td>
                <td>$row[alamatkwarran]</td>
                <td><span class='label label-info label-mini'>$row[kodeadmin]</span></td>
                <td>
                    <button class='glyphicon glyphicon-file btn-xs' title='file'></button>
                    <a href='?page=ubahkwarran&kode=$row[kdkwarran]'><button class='btn btn-primary btn-xs' title='edit'><i class='fa fa-pencil'></i></button></a>
                    <button class='btn btn-danger btn-xs' title='hapus' onclick='myFunction(\"$row[kdkwarran]\")'><i class='fa fa-trash-o'></i></button>
                </td>
            </tr>   ";
                    $no++;
                }
                ?>
        </tbody>
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