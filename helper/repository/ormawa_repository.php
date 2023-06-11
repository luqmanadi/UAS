<?php


function getAllOrmawa($connection)
{
    $query = "SELECT * FROM tbl_ormawa";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getOrmawa($connection, $id_user)
{
    $query = "SELECT * FROM tbl_ormawa INNER JOIN login on tbl_ormawa.id_user = login.id_user WHERE id_user = '$id_user'";
    $result = mysqli_query($connection, $query);
    return $result->fetch_assoc();
}

function addOrmawa($connection, $username, $password, $level, $nama, $email, $no_hp)
{
    // Query untuk memasukkan data ke tabel login
    $queryLogin = "INSERT INTO login (username, password, level) VALUES ('$username', '$password', '$level')";

    // Jalankan query untuk memasukkan data ke tabel login
    $resultLogin = mysqli_query($connection, $queryLogin);

    // Periksa apakah query berhasil dijalankan
    if ($resultLogin) {
        // Ambil ID yang baru saja digenerate
        $id_user = mysqli_insert_id($connection);

        // Query untuk memasukkan data ke tabel ormawa dengan menghubungkannya ke tabel login melalui foreign key
        $queryOrmawa = "INSERT INTO tbl_ormawa (id_user, nama, email, no_hp) VALUES ($id_user, '$nama', '$email', '$no_hp')";

        // Jalankan query untuk memasukkan data ke tabel ormawa
        $resultOrmawa = mysqli_query($connection, $queryOrmawa);

        // Periksa apakah query berhasil dijalankan
        if ($resultOrmawa) {
            echo "Data Berhasil Ditambah";
        } else {
            echo "Data Gagal Ditambah" . mysqli_error($connection);
        }
    } else {
        echo "Terjadi kesalahan saat memasukkan data ke tabel login: " . mysqli_error($connection);
    }
}

function updateOrmawa($connection, $username, $password, $nama, $email, $no_hp, $id_user)
{
    $query = "UPDATE tbl_ormawa INNER JOIN login ON tbl_ormawa.id_user = login.id_user SET login.username = '$username', 
    login.password = '$password', tbl_ormawa.nama = '$nama', tbl_ormawa.email = '$email', tbl_ormawa.no_hp = '$no_hp'  WHERE login.id_user = '$id_user'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($connection);
    }
}

function deleteOrmawa($connection, $id_user)
{
    $query = "DELETE login, tbl_ormawa FROM login INNER JOIN tbl_ormawa ON login.id_user = tbl_ormawa.id_user WHERE login.id_user = '$id_user'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($connection);
    }
}

?>