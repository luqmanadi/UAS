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

function getPeminjaman($connection, $id_peminjaman)
{
    $resultMhs = mysqli_query($connection, "SELECT p.waktu, p.tanggal, p.keperluan, r.id_ruangan, m.nama, p.id_peminjaman FROM tbl_peminjaman p INNER JOIN login l on p.id_user = l.id_user INNER JOIN tbl_ruangan r on r.id_ruangan = p.id_ruangan INNER JOIN tbl_mahasiswa m on m.id_user = l.id_user WHERE p.id_peminjaman ='$id_peminjaman'");
    $resultDsn = mysqli_query($connection, "SELECT p.waktu, p.tanggal, p.keperluan, r.id_ruangan, d.nama, p.id_peminjaman FROM tbl_peminjaman p INNER JOIN login l on p.id_user = l.id_user INNER JOIN tbl_ruangan r on r.id_ruangan = p.id_ruangan INNER JOIN tbl_dosen d on d.id_user = l.id_user WHERE p.id_peminjaman ='$id_peminjaman'");
    $resultOrmw = mysqli_query($connection, "SELECT p.waktu, p.tanggal, p.keperluan, r.id_ruangan, o.nama, p.id_peminjaman FROM tbl_peminjaman p INNER JOIN login l on p.id_user = l.id_user INNER JOIN tbl_ruangan r on r.id_ruangan = p.id_ruangan INNER JOIN tbl_ormawa o on o.id_user = l.id_user WHERE p.id_peminjaman ='$id_peminjaman'");
    if ($resultMhs->num_rows > 0) {
        return $resultMhs->fetch_assoc();
    }

    if ($resultDsn->num_rows > 0) {
        return $resultDsn->fetch_assoc();
    }
    
    if ($resultOrmw->num_rows > 0) {
        return $resultOrmw->fetch_assoc();
    }

    return "Tidak Ada Data";
} 


function peminjamanDiterima($connection,$id_peminjaman)
{
    $query = "UPDATE tbl_peminjaman INNER JOIN tbl_ruangan on tbl_peminjaman.id_ruangan = tbl_ruangan.id_ruangan SET isapprove = '1', status = 'TERISI' WHERE tbl_peminjaman.id_peminjaman = '$id_peminjaman'";
    $result = mysqli_query($connection, $query);
    return $result;

}

function peminjamanDitolak($connection, $id_peminjaman)
{
    $query = "UPDATE tbl_peminjaman INNER JOIN tbl_ruangan on tbl_peminjaman.id_ruangan = tbl_ruangan.id_ruangan SET isapprove = '2' WHERE tbl_peminjaman.id_peminjaman = '$id_peminjaman'";
    $result = mysqli_query($connection, $query);
    return $result;

}


function pengajuanPeminjaman($connection, $id_user, $id_ruangan, $waktu, $tanggal, $keperluan)
{
    $query = "INSERT INTO tbl_peminjaman(id_user, id_ruangan, waktu, tanggal, keperluan, isapprove) VALUES ($id_user, '$id_ruangan', '$waktu', '$tanggal', '$keperluan', 0)";
    $result = mysqli_query($connection, $query);
    return $result;
}



function pengembalianPeminjaman($connection, $id_peminjaman)
{
    $query = "UPDATE tbl_peminjaman INNER JOIN tbl_ruangan on tbl_peminjaman.id_ruangan = tbl_ruangan.id_ruangan SET isapprove = '3', status = 'KOSONG' WHERE tbl_peminjaman.id_peminjaman = '$id_peminjaman'";
    $result = mysqli_query($connection,$query);
    return $result;
}

function hitungPeminjamanAkun($connection, $id_user)
{
    $peminjaman = mysqli_query($connection, "SELECT COUNT(*) FROM tbl_peminjaman WHERE id_user = '$id_user'");
    $total_peminjaman = mysqli_fetch_array($peminjaman)[0];
    return $total_peminjaman;
}


function deletePeminjaman($connection, $id_peminjaman)
{
    $query = "DELETE FROM tbl_peminjaman WHERE id_peminjaman = '$id_peminjaman'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($connection);
    }
}


?>