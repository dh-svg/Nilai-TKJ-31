<?php
if (isset($_POST['update'])) {
    include_once('conf.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $Capacity = $_POST['capacity'];
    $Fill = $_POST['fill'];

    $sql = "UPDATE major SET name='$name', capacity='$Capacity', fill='$Fill' WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=jurusan');
    }else {
        include('index.php?m=jurusan');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Diupdate")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=jurusan&s=add'>Sini</a>";
}

