<!DOCTYPE html>
<html lang ="cs">
    <head>
        <link rel="stylesheet" href=".css/styles.css">
        <meta charset="UTF - 8">
        <link rel="icon" type="image/x-icon" href="data/img/logo-medlov1.png">
        <title>Fotbal</title>
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

                <?php include'.php/mezery.php';?>
                <?php include'.php/mezery.php';?>



                

            </div>


            <div class="head">
                <?php include 'templates/header.php';?>
            </div>

            

            <?php include '.php/mezery.php';?>

            <div class ="textnastrance">
                

                <div class="text1"> 
                    <h3>FOTBAL</h3>
                    <p>V Medlově se hraje fotbal v několika věkových kategoriích, začátek je v přípravce, postupuje se do žáků a skupina s největší fanouškovskou komunitou jsou muži.</p>
                    <img class="img2" src="data/img/fotbal.png" alt="fotbalek" width="700" height="500">
                    <p>https://www.instagram.com/fanclub_sk_medlov_muzi/</p>
                </div>

                <div class="text1">
                    <h4>Tabulka</h4>
                    <p>I když není Medlov úplně v čele tabulky tak to nevadí, fotbal je zábava a to je to hlavní</p>
                    <img class="img2" src="data/img/tabulka.png" alt="tabulka" width="650" height="500">
                    <p>https://www.fotbal.cz/souteze/turnaje/hlavni/73967766-3504-4e7a-91ae-d98d315f793c</p>
                    <br>
                </div>

                <?php include'.php/mezery.php';?>

                <script src="js/main.js"></script>
                <body onload="checkCookie()"></body>



                </div>

                <div class="foot">
                    <?php include 'templates/footer.php';?>
                </div>
    </body>



</html>




</html>
