<?php
if (isset($_GET['id'])) {
    include_once('conf.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM teachers WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location: ?m=instruktur');
    }else {
        include('index.php?m=instruktur');
        print '<script language="JavaScript">';
            print'alert("Data Gagal Dihapus")';
        print '</script>';
    }

} else {
    print "Jangan Langsung di Eksekusi Ke File Ini, Silahkan Klik <a href='?m=instruktur&s=add'>Sini</a>";
}
