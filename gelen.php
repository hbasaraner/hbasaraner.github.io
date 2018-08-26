<html>
    <head>
        <title>Deneme</title>
    </head>
    <body>
        <h1>Ahan da değişkenler</h1>
        <?php 
            extract($_POST)
            echo "Adınız ".$ad."<br>";
            echo "Şifreniz = ".$pwd."<br>";
            echo "Hidden = ".$cokgizli;
        ?>
    </body>
</html>
