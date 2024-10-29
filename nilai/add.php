<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Data</div>
                    <div class="col-4">
                    <a href="?m=nilai&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                    </div>
            </div>

            <div class="card-body">
             <form action="?m=nilai&s=save" method="post">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Isi Nama" autofocus>
                </div>
                <div class="mb-3">
                    <input type="text" name="uh" class="form-control" placeholder="Nilai UH" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="uts" class="form-control" placeholder="Nilai UTS" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="uas" class="form-control" placeholder="Nilai UAS" required>
                </div>
                <div class="mb-3">
                    <select name="major_id" class="form-control">
                        <option value="">- Pilih Jurusan -</option>
                        <?php 
                        include_once('conf.php');
                        $sql = "SELECT id, subject FROM subjects";
                        $result = mysqli_query($connect, $sql);
                        while ($r = mysqli_fetch_array($result)) { 
                        
                        ?>
                        <option value="<?=$r['id']?>"><?=$r['subject']?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="reset" class="btn btn-warning">&nbsp;
                    <input type="submit" value="Simpan" name="save" class="btn btn-success">
                </div>
             </form>   
            </div>
        </div>
    </div>
</div>