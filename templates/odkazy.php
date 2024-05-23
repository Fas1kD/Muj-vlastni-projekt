
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
        <a href="nemcicky.php">Okolní obce</a>
        <br>
        <br>
        <a href="podstranka2.php">Cesta do Medlova</a>
        <br>
        <br>
        <a href="podstranka3.php">Staránka3</a>
        <br>
        <br>
        <a href="data/documents/zpracovani.html">Zpracování údajů</a>
        <br>
        <br>
        <a href="data/documents/form.html">Kontakty na nás</a>

        <br>

        <button class="button-24" role="button" onclick="myFunction()">Jaký je dnes den</button>

        
        <script>
            function myFunction() {
        confirm(Date());
}
</script>





    </body>



</html>
