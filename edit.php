<?php

    include_once("connection.php");

    if(isset($_POST['Update'])){
        $id =$_POST['id'];

        $nama =$_POST['nama'];
        $merk =$_POST['merk'];
        $jlh =$_POST['jlh'];

        include_once('connection.php');

        $res = mysqli_query($mysqli,
        "UPDATE data_barang SET nama='$nama',merk='$merk',jlh='$jlh'WHERE id='$id'");

        header('Localtion: index.php');
    }

    //ambil data user
    
    $query = mysqli_query($mysqli,"SELECT * FROM data_barang WHERE id='$id'");

    while($user_data = mysqli_fetch_array($query)){
        $nama = $user_data['nama'];
        $jlh = $user_data['jlh'];
        $merk = $user_data['merk'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body style="margin: 10% 40% ;">
    <a href="index.php">Back</a>

    <form action="edit.php" method="POST" name="editBarang">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $nama ?>"></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td><input type="text" name="merk"value="<?= $merk ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jlh"value="<?= $jlh ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?= $id ?>"></td>
                <td><input type="submit" name="Update" value="update"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>