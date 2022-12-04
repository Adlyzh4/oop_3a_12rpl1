<?php 
$datamurid = [
    [12345, "ahmad diaz", "diaz@gmail"],
    [123456, "jeka", "sorlaw@gmail"]
]







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
    <h1>Data Siswa SMK FATAHILLAH</h1>

    <?php foreach($datamurid as $siswa) : ?>
    <ul>
        <li>NIS :<?php echo $siswa[0] ?></li>
        <li>NAMA :<?php echo $siswa[1] ?></li>
        <li>EMAIL :<?php echo $siswa[2] ?></li>
    </ul>
    <?php endforeach ?>










</body>
</html>