<?php


function getAllMahasiswa($con)
{
    $query = "SELECT * FROM users";
    $result = mysqli_query($con, $query);
    return $result;
}

function getUser($con, $email)
{
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $query);
    return $result->fetch_assoc();
}

function addUser($con, $nama, $email, $password, $level)
{
    $query = "INSERT INTO users (nama, email, password,level) VALUES ('$nama', '$email', '$password',$level)";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Ditambah';
    } else {
        return 'Data Gagal Ditambah' . mysqli_error($con);
    }
}

function updateUser($con, $previousEmail, $nama, $email, $password, $level)
{
    $query = "UPDATE users SET nama='$nama', email='$email', password='$password', level = '$level' WHERE email='$previousEmail'";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($con);
    }
}

function deleteUser($con, $email)
{
    $query = "DELETE FROM users WHERE email='$email'";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($con);
    }
}

?>