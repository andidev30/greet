<?php include "config.php"; ?>
<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>12 RPl 1 - Andi</title>
</head>
<body>
    
    <div id="konten">
        <h2><?= $selamat ?></h2>
        <h3><?= $tes['0'] ?>:<?= $tes['1'] ?>:<?= $tes['2'] ?><sup><?= $tes['3'] ?></sup></h3>

        <?php if( isset($_GET['absen']) ) { ?>
            <?php 
                $no_absen = $_GET['absen'];
                if($no_absen > 0 && $no_absen <= 34){ 
            ?>
                <h1><?= $data[$no_absen] ?></h1>
            <?php }else { ?>
                <h1>Family RPL 1</h1>
            <?php } ?>
        <?php }else { ?>
            <h1>Family RPL 1</h1>
        <?php } ?>
    </div>
    
    <div id="footer">
        <h5>Created by <a href="https://andi.dherpl.site" target="_BLANK">Andi</a></h5>
    </div>

</body>
</html>