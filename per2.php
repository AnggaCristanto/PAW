<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-attachment: red;
        }
    </style>
</body>
<body>
    <div id="atas">
        <?php
            for ($i=0; $i<100 ; $i++) {
                echo "<br> selamat anda berhasil",$i;           
            }
        ?>
        
    </div>
    <script>
        document.getElementById("top").style.backgroundColor = green;
    </script>
</body>
</html>