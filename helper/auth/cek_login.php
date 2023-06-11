<?php
session_start();

require '../connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");

    $data = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = $data['level'];
        if ($_SESSION['level'] == 1) {
            header('Location: ../../admin/dashboard/index.php');
        } elseif ($_SESSION['level'] == 2) {
            header('Location: ../../user/dashboard.php');
        }
    } else {
        header('Location: ../../login.php?loginFail=1');
    }
}

exit;