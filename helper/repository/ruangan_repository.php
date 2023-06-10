
<?php

function isTambahRuangan(){
    $nama_ruangan = $_POST['nama_ruangan'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($file_tmp, 'master/ruangan/Fotoruangan/' . $foto);

    mysqli_query($conn, "INSERT into ruangan values ('','$nama_ruangan','$deskripsi','$foto','free')");
    echo "<script>alert ('Data Berhasil Disimpan') </script>";
    echo "<meta http-equiv='refresh' content=0; URL=?view=dataruangan>";
}

function isUpdateRuangan(){
    $id = $_POST['id'];
    $nama_ruangan = $_POST['nama_ruangan'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($file_tmp, 'master/ruangan/Fotoruangan/' . $foto);

    mysqli_query($conn, "UPDATE ruangan set id='$id', nama_ruangan='$nama_ruangan', deskripsi='$deskripsi', foto='$foto', status='free' where id='$id'");
    echo "<script>alert ('Data Berhasil Diubah') </script>";
    echo "<meta http-equiv='refresh' content=0; URL=?view=dataruangan>";
}

function isDeleteRuangan(){
    $id = $_POST['id'];
    mysqli_query($conn, "DELETE from ruangan where id='$id'");
    echo "<script>alert ('Data Berhasil Dihapus') </script>";
    echo "<meta http-equiv='refresh' content=0; URL=?view=dataruangan>";
}


