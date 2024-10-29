<?php
$module = isset($_GET['s']) ? ($_GET['s']) : 'home';
switch ($module) {
    case 'view': default:
        include('nilai/view.php');
        break;
    case 'add':
        include('nilai/add.php');
        break;
    case 'edit':
        include('nilai/edit.php');
        break;
    case 'delete':
        include('nilai/delete.php');
        break;
    case 'update':
        include('nilai/update.php');
        break;
    case 'save':
        include('nilai/save.php');
        break;
}
