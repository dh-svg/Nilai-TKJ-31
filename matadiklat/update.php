<?php
if (isset($_POST['save'])) {
    include_once('conf.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $sql = "UPDATE subjects SET subject='$subject', hours='$hours' WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=matadiklat');
    }else {
        include('index.php?m=matadiklat');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Ditambahkan")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=matadiklat&s=add'>Sini</a>";
}