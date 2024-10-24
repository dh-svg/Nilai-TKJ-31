<?php
if (isset($_POST['save'])) {
    include_once('conf.php');
    $name = $_POST['name'];
    $Capacity = $_POST['capacity'];
    $Fill = $_POST['fill'];

    $sql = "INSERT INTO major SET name='$name', capacity='$Capacity', fill='$Fill'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=jurusan');
    }else {
        include('index.php?m=jurusan');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Ditambahkan")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=jurusan&s=add'>Sini</a>";
}
