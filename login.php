<?php

include './connection.php';
if (isset($_POST['btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username = '$username' and password = '".sha1($password)."'";
    if ($query = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_array($query)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['admin_id'] = $row['admin_id'];
                header("location: dashboard.php");
                exit();
            }
        } else {
            $_SESSION['msg'] = ' <div class="alert alert-danger">wrong username/password</div>';
            header("location: index.php");
            exit();
        }
    } else {
        echo mysqli_error($link);
    }
} else {
    header("location: index.php");
}
