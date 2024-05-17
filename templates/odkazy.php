
<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href=".css/styles.css">
        <meta charset="UTF - 8">
    </head>

    <body>
        <?php include '.php/mezery.php';?>

        <a href="index.php">Úvodní stránka</a>
        <br>
        <br>
        <a href="nemcicky.php">Fotbal</a>
        <br>
        <br>
        <a href="podstranka3.php">Staránka3</a>
        <br>
        <br>
        <a href="podstranka2.php">Cesta do Medlova</a>
        <br>
        <br>
        <a href="data/documents/zpracovani.html">Zpracovani udaju</a>
        <br>
        <br>
        
        <button class="button-24" role="button" onclick="myFunction()">Jaký je dnes den</button>

        <br>
        <br>

        <?php include '.php/mezery.php';?>

        <br>
        <br>
        
        <script>
            function myFunction() {
        confirm(Date());
}
</script>





    </body>



</html>
