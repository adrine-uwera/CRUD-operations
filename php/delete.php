<?php
    if (isset($_GET['id'])) {
        include '../db_connect.php';
        function validate($data) {
            $data= trim($data);
            $data = stripslashes($data);
            $data =htmlspecialchars($data);
            return $data;
        }

        $id = validate($_GET['id']);

        $sql = "DELETE FROM users WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result){
            header("Location: ../read.php?success=Successfully deleted");
        } else {
            header("Location: ../read.php?error=unknown error occured&$userdata");
        }

    } else{
        header("Location: ../read.php");
    }
?>