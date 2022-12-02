<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?= $this->include('Views/layout/navbar'); ?>
    <h1>Selamat Sore</h1>
    <span>Kami menjual sparepart elektronik termantap yang bisa anda pakai</span> <br>
    <span>Selamat berbelanja!</span>
    
    <form action="http://localhost:8081/barang">
    <input type="submit" value="Lanjutkan"/>
</form>
</body>
</html>