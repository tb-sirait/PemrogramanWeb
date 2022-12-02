<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device</title>
    <?php
    $barang = array("Arduino", "Komputer", "Proyektor");
    $tabelku = array(
        array("1", $barang[0], "Genuino", 19, 1),
        array("2", $barang[1], "Samsung", 20, 1),
        array("3", $barang[2], "Canon", 2, 0)
    );
    ?>
    <link rel="stylesheet" href="app\Views\design.css">
</head>
<body>
    <?= $this->include('Views/layout/navbar'); ?>
    <h1>Ini Device</h1>
    <div class="flex-container", style="border = 1;">
        <div class="item">
            <img src="\images\arduino.jpg" alt="Arduino" width = "200" height="200"> <br>
            <span>Nama Barang: <?php echo $tabelku[0][1]; ?></span> <br>
            <span>Jumlah Barang: <?php echo $tabelku[0][3]; ?></span> <br>
            <span>Status: <?php echo $tabelku[0][4]; ?></span>
        </div>
    </div>
</body>
</html>