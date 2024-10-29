<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Data</div>
                    <div class="col-4">
                    <a href="?m=nilai&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                    </div>
            </div>
            <?php 
            include_once('conf.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM Points WHERE id='$id'";
            $result = mysqli_query($connect, $sql);
            $r = mysqli_fetch_array($result);
            ?>
            <div class="card-body">
             <form action="?m=nilai&s=update" method="post">
                <div class="mb-3">
                    <input type="text" name="name" value="<?=$r['name']?>" class="form-control" placeholder="Isi Nama" autofocus>
                </div>
                <div class="mb-3">
                    <input type="text" name="uh" value="<?=$r['uh']?>" class="form-control" placeholder="Nilai UH" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="uts" value="<?=$r['uts']?>" class="form-control" placeholder="Nilai UTS" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="uas" value="<?=$r['uas']?>" class="form-control" placeholder="Nilai UAS" required>
                </div>
                <div class="mb-3">
                    <select name="major_id" class="form-control">
                        <option value="">- Pilih Jurusan -</option>
                        <?php 
                        include_once('conf.php');
                        $sql2 = "SELECT id, subject FROM subjects";
                        $query = mysqli_query($connect, $sql2);
                        while ($r2 = mysqli_fetch_array($query)) { 
                        
                        ?>
                        <option value="<?=$r2['id']?>" <?=$r2['id']==$r['major_id'] ? 'selected' : '' ?>><?=$r2['subject']?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?=$r['id']?>">&nbsp;
                    <input type="reset" class="btn btn-warning">&nbsp;
                    <input type="submit" value="Simpan" name="update" class="btn btn-success">
                </div>
             </form>   
            </div>
        </div>
    </div>
</div>