<?php

function hitungPeminjaman($connection)
{
    $peminjaman = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_peminjaman");
    $total_peminjaman = mysqli_fetch_array($peminjaman)[0];
    return $total_peminjaman;
}

function getAllPeminjaman($connection)
{
    $query = "SELECT * FROM tbl_peminjaman";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getPeminjaman($connection, $id_user)
{
    $query = "SELECT * FROM tbl_peminjaman INNER JOIN login on tbl_peminjaman.id_user = login.id_user WHERE id_user ='$id_user'";
    $result = mysqli_query($connection, $query);
    return $result->fetch_assoc();
}


?>