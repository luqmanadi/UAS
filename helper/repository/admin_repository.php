<?php



function getAdmin($connection, $id_user)
{
    $query = "SELECT * FROM login  WHERE id_user ='$id_user'";
    $result = mysqli_query($connection, $query);
    return $result->fetch_assoc();
}

function addAdmin($connection, $username, $password, $level)
{
    $query = "INSERT INTO login (username, password, level) VALUES ('$username', '$password','$level'";
    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Ditambah';
    } else {
        return 'Data Gagal Ditambah' . mysqli_error($connection);
    }
}

function updateAdmin($connection, $username, $password, $id_user)
{
    $query = "UPDATE login SET username = '$username', password = '$password' WHERE id_user = '$id_user'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Diubah';
    } else {
        return 'Data Gagal Diubah' . mysqli_error($connection);
    }
}

function deleteAdmin($connection, $id_user)
{
    $query = "DELETE FROM login WHERE id_user = '$id_user'";

    if (mysqli_query($connection, $query)) {
        return 'Data Berhasil Dihapus';
    } else {
        return 'Data Gagal Dihapus' . mysqli_error($connection);
    }
}

function hitungAdmin($connection, $level)
{
    $admin = mysqli_query($connection, "SELECT COUNT(*) FROM login WHERE level = '$level'");
    $total_admin = mysqli_fetch_array($admin)[0];
    return $total_admin;
}
?>