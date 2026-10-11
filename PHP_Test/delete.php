<?php
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("location:Login.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['book_id'] = $_GET['id'];
    $sql = $conn -> prepare('
    delete from books where id = ?
    ');
    
    $sql ->bind_param('i',$_SESSION['book_id']);
    
    if ($sql -> execute()) {
        header('Location:Library_Dashboard.php');
        exit();
    }
    
}
    ?>