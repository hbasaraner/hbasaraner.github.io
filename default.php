<html>
    <head>
        
    </head>
    <body>
        <h1>Başka sayfaya gönderme işlemi</h1>
        <form action="gelen.php" method="post">
            <table border="1" align="center">
                <tr><th colspan="2">Sınıf Listesi</th></tr>
                <?php 
                    for ($i=1;$i<=5;$i++)
                    {
                        echo "<tr><td>$.nci Öğrenci</td>
                                    <td><input type=text name=isim[]</td></tr>"
                    }
                ?>
            </table>
        </form>
    </body>
</html>