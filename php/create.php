<?php
    if (isset($_POST['create'])){
        include "../db_connect.php";
        function validate($data) {
            $data= trim($data);
            $data = stripslashes($data);
            $data =htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);

        $userdata = "name".$name." & email=".$email;

        if (empty($name)){
            header("Location: ../index.php?error=Name is required&$userdata");
        } else if (empty($email)) {
            header("Location: ../index.php?error=Email is required&$userdata");
        }else{
            $sql = "INSERT INTO users(name, email) VALUES('$name','$email')";
            $result = mysqli_query($conn, $sql);
            if ($result){
                header("Location: ../read.php?success=Successfully created");
            } else {
                header("Location: ../index.php?error=unknown error occured&$userdata");
            }
        }

    }
?>