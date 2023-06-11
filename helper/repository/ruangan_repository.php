<?php


function getAllRuang($connection)
{
    $query = "SELECT * FROM tbl_ruangan";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getRuangan($connection, $id_ruangan)
{
    $query = "SELECT * FROM tbl_ruangan  WHERE id_ruangan ='$id_ruangan";
    $result = mysqli_query($connection, $query);
    return $result->fetch_assoc();
}

function addRuangan($connection, $id_ruangan, $status, $kapasitas, $kategori)
{ 
    $query = "INSERT INTO tbl_ruangan (id_ruangan, status, kapasitas, kategori) VALUES ('$id_ruangan', '$status','$kapasitas', '$kategori')";
    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Ditambah';
    } else {
        return 'Data Gagal Ditambah' . mysqli_error($connection);
    }
}

function updateRuangan($connection, $id_ruangan, $status, $kapasitas, $kategori)
{
    $query = "UPDATE tbl_ruangan SET status = '$status', kapasitas = '$kapasitas', kategori = '$kategori' WHERE id_ruangan = '$id_ruangan'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($connection);
    }
}

function deleteRuangan($connection, $id_ruangan)
{
    $query = "DELETE FROM tbl_ruangan WHERE id_ruangan = '$id_ruangan'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($connection);
    }
}

function hitungRuangan($connection)
{
    $ruangan = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_ruangan");
    $total_ruangan = mysqli_fetch_array($ruangan)[0];
    return $total_ruangan;
}
?>