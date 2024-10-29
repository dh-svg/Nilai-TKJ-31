<?php
if (isset($_POST['save'])) {
    include_once('conf.php');
    $id = $_POST['id'];
    
    $sql = "DELETE FROM Points WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('Location: ?m=nilai');
    } else {
        include('index.php?m=nilai');
        print '<script language= JavaScript>';
        print 'alert("Data Tidak Ditambahkan")';
        print '</script>';
    }
} else {
    print "Jangan Langsung Kesini, Silahkan Klik <a href='?m=nilai&s=add'>Sini</a>";
}