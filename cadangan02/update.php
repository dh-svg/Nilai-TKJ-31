<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $capacity = $_POST['capacity'];
    $fill = $_POST['fill'];

    $sql = "UPDATE students SET name='$name', capacity='$capacity', fill='$fill' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=santri');
    } else {
        include('index.php?m=santri');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    //echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=santri&s=add'>disini</a>";
    echo '<script>windows.history.back()</script>'; //JavaScript 
}
