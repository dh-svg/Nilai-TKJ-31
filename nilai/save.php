<?php
if (isset($_POST['save'])) {
    include_once('conf.php');
    $name = $_POST['name'];
    $uh = $_POST['uh'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $major_id = $_POST['major_id'];

    $sql = "INSERT INTO Points SET name='$name', uh='$uh', uts='$uts', uas='$uas', major_id='$major_id'";
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