<?php
if (isset($_POST['update'])) {
    include_once('conf.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $capacity = $_POST['capacity'];
    $fill = $_POST['fill'];

    $sql = "UPDATE students SET name='$name', capacity='$capacity', fill='$fill' WHERE id='$id'";
    $result = mysqli_query($con,$sql);
    if ($result) {
        header('location: ?m=santri');
    } else {
        include('index.php?m=santri');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, kli <a href='?m=santri&s=santri'>disini</a>";
    //echo '<script>windows.history.back()</script>';
}
