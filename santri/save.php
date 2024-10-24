<?php
if (isset($_POST['save'])) {
    include_once('conf.php');
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $major_id = $_POST['major_id'];

    $sql = "INSERT INTO students SET nis='$nis', name='$name', gender='$gender', pob='$pob', dob='$dob', major_id='$major_id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=santri');
    }else {
        include('index.php?m=santri');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Ditambahkan")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=santri&s=add'>Sini</a>";
}
