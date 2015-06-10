<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Data Pangkalan</h4>
                <div class="showback"> 
                    <?php
                    switch ($_GET['act']) {
                        default :
                            ?>
                            <a href="?page=datapangkalan&act=add">
                                <button type="button" class="btn btn-warning">+ Tambah Pangkalan</button>
                            </a>
                        </div>

                        <hr>
                        <thead>
                            <tr>
                                <th><i class=""></i>Nama Pangkalan</th>
                                <th><i class=""></i>Keterangan</th>
                                <th><i class=""></i> Kode Kwarran</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                        $query = mysql_query("SELECT * FROM pangkalantb");
                        while ($row = mysql_fetch_array($query)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><a href="basic_table.html#"><?= $row['namapangkalan'] ?></a></td>
                                    <td class="hidden-phone"><?= $row['alamatpangkalan'] ?></td>
                                    <td><?= $row['kodekwarran'] ?></td>
                                    <td><span class="label label-info label-mini">???</span></td>
                                    <td>
                                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>

                            </tbody>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                    break;

                case "add":
                    ?>
                    <p><a href="?page=datapangkalan"><img src="../images/back.png"></a></p>
                    <h4>Tambah Kwarran</h4>
                    <div class="box round first fullpage">
                        <div class="block ">
                            <form id="frm_fakultas" action="modul/mod_fakultas/aksi_fakultas.php?mod=fakultas&act=input" method="POST">
                                <table class="form">
                                    <tr valign="top">
                                        <td width="110"><label>Nama Kwarran *)</label></td>
                                        <td><input type="text" name="namakwarran" class="required" size="40"></td>
                                    </tr>
                                    <tr valign="top">
                                        <td><label>Status *)</label></td>
                                        <td><select name="aktif" class="required">
                                                <option value="">- none -</option>
                                                <option value="A">Aktif</option>
                                                <option value="N">Non-Aktif</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button type="submit" class="btn btn-primary"><i class="icon-save"></i> Simpan</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->
        <?php
        break;
}
?>