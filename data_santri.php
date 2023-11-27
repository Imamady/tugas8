<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>data santri</h2>
    <table border="1">
    <tr>
        <td>no</td>
        <td>nama santri</td>
        <td>alamat</td>  
        <td>agama</td>
        <td>asal sekolah</td>
        <td>aksi</td>
    </tr>
    <?php
        $no = 1;
        $query = mysqli_query($konek, "SELECT * FROM santri");
        while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no ++; ?></td>
                <td><?php echo $data ['nama_santri']; ?></td>
                <td><?php echo $data ['alamat_santri']; ?></td>
                <td><?php echo $data ['agama_santri']; ?></td>
                <td><?php echo $data ['asal_sekolah']; ?></td>
                <td>
                    <a href="">edit</a>
                    <a href="">hapus</a>
                </td>
            </tr>

            <?php
            }
            ?>
     </table>
</body>
</html>