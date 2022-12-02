<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    
</head>
<body>
    <?= $this->include('Views/layout/navbar'); ?>
    <h1>Ini Barang</h1>
    <?php
    $barang = array("Arduino", "Komputer", "Proyektor");
    $tabelku = array(
        array("1", $barang[0], "Genuino", 19, 1),
        array("2", $barang[1], "Samsung", 20, 1),
        array("3", $barang[2], "Canon", 2, 0)
    );
    ?>
    <table class="table">
        <thead>                  
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Gambar Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Merk</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $tabelku[0][0]; ?></th>
                <td><img src="/images/arduino.jpg" alt="Arduino" width="100" height="100"></td>
                <td><?php echo $tabelku[0][1]; ?></td>
                <td><?php echo $tabelku[0][2]; ?></td>
                <td><?php echo $tabelku[0][3]; ?></td>
                <td><?php echo $tabelku[0][4]; ?></td>
                <td><form action="http://localhost:8081/device">
                    <input type="submit" value="Arduino"/>
                </td>
            </tr>
            <tr>
                <th scope="row"><?php echo $tabelku[1][0]; ?></th>
                <td><img src="/images/komputer.jpg" alt="pcgemink" width="200" height="100"></td>
                <td><?php echo $tabelku[1][1]; ?></td>
                <td><?php echo $tabelku[1][2]; ?></td>
                <td><?php echo $tabelku[1][3]; ?></td>
                <td><?php echo $tabelku[1][4]; ?></td>
                <td><button>PC</button></td>
            </tr>
            <tr>
                <th scope="row"><?php echo $tabelku[2][0]; ?></th>
                <td><img src="/images/proyektor.png" alt="Arduino" width="100" height="100"></td>
                <td><?php echo $tabelku[2][1]; ?></td>
                <td><?php echo $tabelku[2][2]; ?></td>
                <td><?php echo $tabelku[2][3]; ?></td>
                <td><?php echo $tabelku[2][4]; ?></td>
                <td><button>Proyektor</button></td>
            </tr>
        </tbody>
    </table>
    <?php 
        
    ?>
</html>

