<?php
if (isset($_POST['update'])) {
    include_once('conf.php');
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $subject_id = $_POST['subject_id'];

    $sql = "UPDATE teachers SET nip='$nip', name='$name', gender='$gender', pob='$pob', dob='$dob', subject_id='$subject_id' WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=instruktur');
    }else {
        include('index.php?m=instruktur');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Diupdate")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=instruktur&s=add'>Sini</a>";
}
