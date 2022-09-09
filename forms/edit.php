<?php

if (isset($_GET['remove'])) {
    $removeItems =  $database->prepare("DELETE FROM movies_info WHERE ID = :id");
    $removeItems->bindParam("id", $_GET['remove']);
    $removeItems->execute();

    $removeUser = $database->prepare("DELETE FROM movies_info WHERE ID = :id");
    $removeUser->bindParam("id", $_GET['remove']);
    if ($removeUser->execute()) {
        echo '<div class="alert alert-success mt-3" > تم حذف مستخدم بنجاح </div>';
        header("refresh:2; url=search.php");
        if (isset($_GET['edit'])) {
            session_start();
            $_SESSION['userId'] = $_GET['edit'];
            header("location:./editM.php");
        }
    }
}