<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Instruktur</div>
                <div class="col-4">
                    <a href="?m=instruktur&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
               <form action="?m=instruktur&s=save" method="post">
                <div class="mb-3">
                    <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Instruktur" required autofocus>
                </div>
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Nama Instruktur" required>
                </div>
                <div class="mb-3">
                    <label for="">Jenis Kelamin:</label>&nbsp;
                    <input type="radio" name="gender" value="Laki-laki">Laki-laki&nbsp; 
                    <input type="radio" name="gender" value="Perempuan">Perempuan
                </div>
                <div class="mb-3">
                    <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir" required>
                </div>
                <div class="mb-3">
                    <input type="date" name="dob" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
                <div class="mb-3">
                    <select name="subject_id" class="form-control" required>
                        <option value="">- Pilih Jurusan -</option>
                        <?php
                            include_once('conf.php');
                            $sql = "SELECT id, subject FROM subjects";
                            $query = mysqli_query($connect,$sql);
                            while ($r = mysqli_fetch_array($query)) {
                        ?>    
                                <option value="<?=$r['id']?>"><?=$r['subject']?></option>
                            <?php } ?>
                        
                    </select>
                </div>
                <div class="mb-3">
                    <input type="reset" class="btn btn-warning">&nbsp;
                    <input type="submit" name ="save" value="Simpan" class="btn btn-success">
                </div>
               </form>
            </div>
        </div>
    </div>
</div>