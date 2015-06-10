<div class="module">
    <div class="module-head">
        <h3>
            DataTables</h3>
    </div>
    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
               width="100%">
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
            <tfoot>
                <tr>
                    <th>
                        Rendering engine
                    </th>
                    <th>
                        Browser
                    </th>
                    <th>
                        Platform(s)
                    </th>
                    <th>
                        Engine version
                    </th>
                    <th>
                        CSS grade
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!--/.module-->