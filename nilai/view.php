<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Nilai</div>
                    <div class="col-4">
                     <a href="?m=nilai&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
            <table class="table table-bordered table-striped table hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Santri</th>
                            <th>ID</th>
                            <th>Nilai Ulangan Harian</th>
                            <th>Nilai Ulangan Tengah Semester</th>
                            <th>Nilai Ulangan Akhir Semester</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <?php 
                    include_once('conf.php');
                    $sql = "SELECT Points.id AS maj, subjects.id AS eje, Points.name, Points.uh, Points.uts, Points.uas, subjects.hours, subjects.subject AS nev FROM Points JOIN subjects ON subjects.id=Points.major_id";
                    $result = mysqli_query($connect, $sql);
                    if (mysqli_num_rows($result)) {
                        $no=1;
                        while ($r = mysqli_fetch_assoc($result)) {
                            print '<tr>
                                    <td>' . $no .'</td>
                                    <td>' . $r['name'] .'</td>
                                    <td>' . $r['eje'] .'</td>
                                    <td>' . $r['uh'] .'</td>
                                    <td>' . $r['uts'] .'</td>
                                    <td>' . $r['uas'] .'</td>
                                    <td>' . $r['nev'] .'</td>
                                    <td>
                                    <a href="?m=nilai&s=edit&id= '.$r['maj'] .'" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=nilai&s=delete&id= '.$r['maj'] .'" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda Yakin Menghapus Ini, Menghapus Ini Berisiko Tidak Dapat Dikembalikan Lagi!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\')">Hapus</a>
                                    </td>
                                   </tr>';
                                   $no++;
                        }
                    } else {
                        print '<tr>
                                <td colspan="8" align="center">Data Kosong</td>
                               </tr>';
                    }
                    
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>