<!DOCTYPE html>
<html>
<head>
    <title>Learning MVC</title>
    <link rel="stylesheet" type="text/css" href="<?=BASE?>assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 align="center">Belajar MVC PART 1: Lists Data</h1>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Warna Kesukaan</td>
                <td>Aksi</td>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <td><?php echo $row['wk']; ?></td>
                <td><a href="<?php echo $row['id']; ?>" role="btn" class="btn btn-sm">Delete</a>
            </tr>
            <?php } ?>
        </table>
    </div>
    <script type="text/javascript" src="<?=BASE?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=BASE?>assets/js/bootstrap.min.js"></script>
</body>
</html>
