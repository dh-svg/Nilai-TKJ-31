<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Jurusan</div>
                <div class="col-4">
                    <a href="?m=jurusan&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Kapasitas</th>
                            <th>Terisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('conf.php');
                        $sql = "SELECT * FROM major";
                        $result = mysqli_query($connect, $sql);
                        if (mysqli_num_rows($result)) {
                            $no=1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                print '<tr>
                                <td>'. $no.'</td>
                                <td>'. $r['name'].'</td>
                                <td>'. $r['capacity'].'</td>
                                <td>'. $r['fill'].'</td>
                                <td>
                                    <a href="?m=jurusan&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=jurusan&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Jurusan Ini?, Menghapus Jurusan Ini akan Menyebabkan Hilangnya Semua Data jurusan Yang Telah Anda Edit Pada Jurusan Tersebut!!!!!!!!!!!!!!!!!!!!!\')">Hapus</a>
                                </td>
                                </tr>';
                                $no++;
                            }
                            
                        } else {
                            print '<tr>
                            <td colspan="5" align="center">Data Kosong</td>
                            </tr>';
                        }
                         
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>