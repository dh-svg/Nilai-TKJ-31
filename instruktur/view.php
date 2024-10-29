<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Instruktur</div>
                <div class="col-4">
                    <a href="?m=instruktur&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Instruktur</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
include_once 'conf.php';
$sql = "SELECT teachers.id AS idp, teachers.name AS nameg, teachers.nip, teachers.gender, teachers.pob, teachers.dob, subjects.subject AS namet FROM teachers JOIN subjects ON subjects.id=teachers.subject_id";
$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result)) {
    $no = 1;
    while ($r = mysqli_fetch_array($result)) {
        print '<tr>
                                <td>' . $no . '</td>
                                <td>' . $r['nip'] . '</td>
                                <td>' . $r['nameg'] . '</td>
                                <td>' . $r['gender'] . '</td>
                                <td>' . $r['pob'] . '</td>
                                <td>' . $r['dob'] . '</td>
                                <td>' . $r['namet'] . '</td>
                                <td>
                                    <a href="?m=instruktur&s=edit&id=' . $r['idp'] . '" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=instruktur&s=delete&id=' . $r['idp'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Jurusan Ini?, Menghapus Jurusan Ini akan Menyebabkan Hilangnya Semua Data instruktur Yang Telah Anda Edit Pada Jurusan Tersebut!!!!!!!!!!!!!!!!!!!!!\')">Hapus</a>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>