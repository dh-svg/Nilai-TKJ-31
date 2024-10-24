<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Santri</div>
                <div class="col-4">
                    <a href="?m=santri&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once("conf.php");
            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id='$id'";
            $query = mysqli_query($connect, $sql);
            $r = mysqli_fetch_array($query);
            ?>
            <div class="card-body">
                <form action="?m=santri&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="nis" value="<?=$r['nis']?>" class="form-control" placeholder="Nomo Induk Santri" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" value="<?=$r['name']?>" class="form-control" placeholder="Nama Santri" required>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>&nbsp;
                        <input type="radio" name="gender" value="Laki-laki" <?=$r['gender'] == 'Laki-laki' ? 'checked' : '' ?>>Laki-laki&nbsp;
                        <input type="radio" name="gender" value="Perempuan" <?=$r['gender'] == 'Perempuan' ? 'checked' : '' ?>>Perempuan
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pob" value="<?=$r['pob']?>" class="form-control" placeholder="Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <input type="date" name="dob" value="<?=$r['dob']?>" class="form-control" placeholder="Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <select name="major_id" class="form-control" required>
                            <option value="">- Pilih Data Santri -</option>
                            <?php 
                                include_once('conf.php');
                                $sql2 = "SELECT id, name FROM major";
                                $result = mysqli_query($connect, $sql2);
                                while ($r2 = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?=$r2['id']?>" <?=$r2['id']==$r['major_id'] ? 'selected' : '' ?>><?=$r2['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$r['id']?>">&nbsp;
                        <input type="reset" class="btn btn-warning">&nbsp;
                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>