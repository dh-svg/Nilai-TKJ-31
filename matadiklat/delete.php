<?php
if (isset($_GET['id'])) {
    include_once('conf.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM subjects WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=matadiklat');
    }else {
        include('index.php?m=matadiklat');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Dihapus")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=matadiklat&s=add'>Sini</a>";
}
