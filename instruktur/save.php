<?php
if (isset($_POST['save'])) {
    include_once('conf.php');
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $subject_id = $_POST['subject_id'];

    $sql = "INSERT INTO teachers SET nip='$nip', name='$name', gender='$gender', pob='$pob', dob='$dob', subject_id='$subject_id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=instruktur');
    }else {
        include('index.php?m=instruktur');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Ditambahkan")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=instruktur&s=add'>Sini</a>";
}
