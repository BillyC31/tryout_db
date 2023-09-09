<?php

include_once("connection.php");

$res = mysqli_query($mysqli,'SELECT *FROM data_barang');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body style="margin: 10% 40% ;">
    
<a href="add.php" >Add</a>
    <table border="2px" style="border-radius: 5px; border-color: aquamarine;">
        <tr>
            <th>Nama</th>
            <th>Merk</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($res)){
        ?>
        <tr>
            <td><?php echo $user_data['nama']; ?></td>
            <td><?php echo $user_data['merk']; ?></td>
            <td><?php echo $user_data['jlh']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $user_data['id'];?>">Edit</a>                
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    

</body>
</html>