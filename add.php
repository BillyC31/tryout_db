<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body style="margin: 10% 40% ;">
    <a href="index.php">Back</a>

    <form action="add.php" method="POST" name="addItem">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td><input type="text" name="merk"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jlh"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST['Submit'])){
            $nama =$_POST['nama'];
            $merk =$_POST['merk'];
            $jlh =$_POST['jlh'];

            include_once('connection.php');

            $res = mysqli_query($mysqli,
            "INSERT INTO data_barang (nama,merk,jlh) VALUES('$nama','$merk','$jlh')");

            echo "Berhasil Menambah Barang, <a href='index.php'>Lihat Barang</a>";
        }
    ?>
</body>
</html>