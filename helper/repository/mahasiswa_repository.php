<?php


function getAllMahasiswa($con) {
    $query = "SELECT * FROM tbl_mahasiswa";
    $result = mysqli_query($con, $query);
    return $result;
}

function getMahasiswa($con, $id_user) {
    $query = "SELECT * FROM tbl_mahasiswa WHERE id_user='$id_user'";
    $result = mysqli_query($con, $query);
    return $result->fetch_assoc();
}

function addMahasiswa($con, $username, $password, $level, $nama, $email, $no_hp) {
    // menyimpan ke tabel login dulu 
    $query = "INSERT INTO login (username, password, level) VALUES ('$username', '$password',$level)";
    // mencari id_user
    $sql = "SELECT max(id_user) as id_user FROM login limit 1";
    $hasil = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($hasil);
    $id_user = $row['id_user'];
    $query2 = "INSERT INTO tbl_mahasiswa (id_user,nama,email,no_hp) VALUES ($id_user, $nama, $email, $no_hp)";
    if (mysqli_query($con, $query2)) {
        return 'Data Berhasil Ditambah';
    } else {
        return 'Data Gagal Ditambah' . mysqli_error($con);
    }
}

function updateUser($con, $previousEmail, $nama, $email, $password,$level) {
    $query = "UPDATE users SET nama='$nama', email='$email', password='$password', level = '$level' WHERE email='$previousEmail'";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($con);
    }
}

function deleteUser($con, $email) {
    $query = "DELETE FROM users WHERE email='$email'";
    if (mysqli_query($con, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($con);
    }
}

?>