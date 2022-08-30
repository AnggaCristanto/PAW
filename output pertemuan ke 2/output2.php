<?php
$saya="teman nya angga"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output2</title>
</head>
<body>
    <script>
        var nama=prompt("namaku adalah :");
    </script>
        <h1>Selamat datang <?php echo "$saya";?> </h1>
        <p><?php echo "ini adalah output pertemuan ke 2";?></p>
        <h3>1. Tipe Data PHP:Integer</h3>
        <p>integer = bilangan bulat positif atau negatif</p>
        <br><br>
        contoh perkalian variabel <br> a=2 dengan <br> b =3
        <?php
            $a=2;
            $b=3;
            var_dump($a*$b);
        ?>
        <h3>2. Tipe Data PHP:String</h3>
        <p>String = tipe data berisi text, kalimat,atau kumpulan karakter</p><br>
        <p>halo nama saya angga cristanto saya berasal dari ngawi.</p>
        <h3>3. Tipe Data PHP:Float</h3>
        <p>Float adalah angka dengan titik desimal, atau angka yang menggunakan tanda baca koma.</p>
        <p>contoh perkalian dengan float</p>
        <?php
            $x = 0.5;
            $y = 20.0;
            $z = $x * $y;
            echo "hasil perkalian adalah $z"
        ?>
</body>
</html>