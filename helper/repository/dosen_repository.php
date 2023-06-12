<?php


function getAllDosen($connection)
{
    $query = "SELECT * FROM tbl_dosen INNER JOIN login on tbl_dosen.id_user = login.id_user";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getDosen($connection, $user_dosen)
{
    $query = "SELECT * FROM login INNER JOIN tbl_dosen on login.id_user = tbl_dosen.id_user WHERE username ='$user_dosen'";
    $result = mysqli_query($connection, $query);
    return $result->fetch_assoc();
}

function addDosen($connection, $username, $password, $level, $nama, $email, $no_hp)
{
    // Query untuk memasukkan data ke tabel login
    $queryLogin = "INSERT INTO login (username, password, level) VALUES ('$username', '$password', '$level')";

    // Jalankan query untuk memasukkan data ke tabel login
    $resultLogin = mysqli_query($connection, $queryLogin);

    // Periksa apakah query berhasil dijalankan
    if ($resultLogin) {
        // Ambil ID yang baru saja digenerate
        $id_user = mysqli_insert_id($connection);

        // Query untuk memasukkan data ke tabel dosen dengan menghubungkannya ke tabel login melalui foreign key
        $queryDosen = "INSERT INTO tbl_dosen (id_user, nama, email, no_hp) VALUES ($id_user, '$nama', '$email', '$no_hp')";

        // Jalankan query untuk memasukkan data ke tabel dosen
        $resultDosen = mysqli_query($connection, $queryDosen);

        // Periksa apakah query berhasil dijalankan
        if ($resultDosen) {
            return "Data Berhasil Ditambah";
        } else {
            return "Data Gagal Ditambah " . mysqli_error($connection);
        }
    } else {
        return "Terjadi kesalahan saat memasukkan data ke tabel login: " . mysqli_error($connection);
    }
}

function updateDosen($connection, $username, $password, $nama, $email, $no_hp, $user_dosen)
{
    $query = "UPDATE tbl_dosen INNER JOIN login ON tbl_dosen.id_user = login.id_user SET login.username = '$username', 
    login.password = '$password', tbl_dosen.nama = '$nama', tbl_dosen.email = '$email', tbl_dosen.no_hp = '$no_hp'  WHERE login.username = '$user_dosen'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($connection);
    }
}

function deleteDosen($connection, $user_dosen)
{
    $query = "DELETE login, tbl_dosen FROM login INNER JOIN tbl_dosen ON login.id_user = tbl_dosen.id_user WHERE login.username = '$user_dosen'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($connection);
    }
}


function hitungDosen($connection){
    $dosen = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_dosen");
    $total_dosen = mysqli_fetch_array($dosen)[0];
    return $total_dosen;
}


?>

