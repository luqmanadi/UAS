<?php


function getAllMahasiswa($connection) {
    $query = "SELECT * FROM tbl_mahasiswa";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getMahasiswa($connection, $id_mhs) {
    $query = "SELECT * FROM tbl_mahasiswa INNER JOIN login on tbl_mahasiswa.id_user = login.id_user WHERE id_mhs = '$id_mhs'";
    $result = mysqli_query($connection, $query);
    return $result->fetch_assoc();
}

function addMahasiswa($connection, $username, $password, $level, $nama, $email, $no_hp) {
    // Query untuk memasukkan data ke tabel login
    $queryLogin = "INSERT INTO login (username, password, level) VALUES ('$username', '$password', '$level')";

    // Jalankan query untuk memasukkan data ke tabel login
    $resultLogin = mysqli_query($connection, $queryLogin);

    // Periksa apakah query berhasil dijalankan
    if ($resultLogin) {
        // Ambil ID yang baru saja digenerate
        $id_user = mysqli_insert_id($connection);

        // Query untuk memasukkan data ke tabel mahasiswa dengan menghubungkannya ke tabel login melalui foreign key
        $queryMahasiswa = "INSERT INTO tbl_mahasiswa (id_user, nama, email, no_hp) VALUES ($id_user, '$nama', '$email', '$no_hp')";

        // Jalankan query untuk memasukkan data ke tabel mahasiswa
        $resultMahasiswa = mysqli_query($connection, $queryMahasiswa);

        // Periksa apakah query berhasil dijalankan
        if ($resultMahasiswa) {
            return "Data Berhasil Ditambah";
        } else {
            return "Data Gagal Ditambah" . mysqli_error($connection);
        }
    } else {
        return "Terjadi kesalahan saat memasukkan data ke tabel login: " . mysqli_error($connection);
    }
}

function updateMahasiswa($connection, $username, $password, $nama, $email, $no_hp, $id_mhs) {
    $query = "UPDATE tbl_mahasiswa INNER JOIN login ON tbl_mahasiswa.id_user = login.id_user SET login.username = '$username', 
    login.password = '$password', tbl_mahasiswa.nama = '$nama', tbl_mahasiswa.email = '$email', tbl_mahasiswa.no_hp = '$no_hp'  WHERE tbl_mahasiswa.id_mhs = '$id_mhs'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($connection);
    }
}

function deleteMahasiswa($connection, $id_mhs) {
    $query = "DELETE login, tbl_mahasiswa FROM login INNER JOIN tbl_mahasiswa ON login.id_user = tbl_mahasiswa.id_user WHERE tbl_mahasiswa.id_mhs = '$id_mhs'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($connection);
    }
}


function hitungMahasiswa($connection)
{
    $mahasiswa = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_mahasiswa");
    $total_mahasiswa = mysqli_fetch_array($mahasiswa)[0];
    return $total_mahasiswa;
}

function getAkunMahasiswa($connection, $id_user)
{
    $query = "SELECT * FROM tbl_mahasiswa INNER JOIN login on tbl_mahasiswa.id_user = login.id_user WHERE login.id_user = '$id_user'";
    $result = mysqli_query($connection, $query);
    return $result->fetch_assoc();
}


?>