<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `form2` where id=$id";
        $conn->query($sql);
    }
    header('location:/crud_operation/index.php');
    exit;
?>