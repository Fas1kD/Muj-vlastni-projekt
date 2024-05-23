<!DOCTYPE html>
<!--FOTBAL-->
<html lang ="cs">
    <head>
        <link rel="stylesheet" href=".css/styles.css">
        <meta charset="UTF - 8">
        <title>Okolni obce</title>
    </head>

    <body style="background-color: white;">

            <div class = "odkz">
                <?php include 'templates/odkazy.php';?>
            </div>

            <div class ="reklama_umisteni">
                <div class = "reklama2">
                    <a href="podstranka.php">
                        <img src="data/img/gooning.png" alt="reklama jedna">
                    </a>
                </div>

                <div class ="reklama2">
                    <img src ="data/img/krizek.png" alt="prazdno1">
                </div>

                <div class ="reklama3">
                    <img src ="data/img/krizek.png" alt="prazdno2">
                </div>

               

                

            </div>


            <div class="head">
                <?php include 'templates/header.php';?>
            </div>

            

            <?php include '.php/mezery.php';?>

            <div class ="textnastrance">
                

                <div class="text1"> 
                    <h3>OKOLNÍ OBCE</h3>
                    <p>V okolí Medlova se nachází několik obcí (měst i vesnic).</p>
                    <p>Brno leží od Medlova přibližně 20 kilometrů</p>
                    <img class="img3" src="data/img/poloha2.png" alt="polohaMedlova">
                </div>

                <div class="text1">
                    <h4>Okolní Města</h4>
                    <p>Mezi města obklopující Medlov patří nedaleké Židlchovice, Pohořelice a ve vzdálenosti asi desíti kilometrů leží Rajhrad.</p>

                    <p>Odkazy na oficiální stránky obcí:</p>

                    <a href="https://www.zidlochovice.cz/">
                        <img class="img1" src="data/img/images.jpg" height="270"width="270">
                        
                    </a>
                    <a href="https://www.rajhrad.cz/">
                        <img class="img1" src="data/img/rajhrad1.jpg" height="235" width="190">
                    </a>

                    <a href="https://www.pohorelice.cz/">
                        <img class="img1" src="data/img/poho.jpg" height="235" width="210">
                    </a>

                    <br>
                    <br>
                    <br>
                    <br>
                </div>




                </div>

                <div class="foot">
                    <?php include 'templates/footer.php';?>
                </div>

                <script>
                    console.log('hola');
                </script>
    </body>



</html>




</html>
