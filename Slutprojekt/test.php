<?php
error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED); 
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SAS</title>
        <link rel="icon" href="sas_logo.png" type="image/png">
        <h1><a href="index.php">SAS</a></h1>
        <link href="sas_css.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, intial scale.1.0,maximum-slace=1"/>
        
        <ul>
            <li><a class="active" href="index.php">Hem</a></li>
            <li><a href="#news">Nyheter</a></li>
            <li><a href="Kontakt.php">Kontakt</a></li>
            <li><a href="om.php">Om</a></li>
        </ul>
    </head>
    <body>
        <div id="#storbox">
            <header>
                <h3>Header</h3>
            </header>
            <nav>
                <h3>NAV</h3>
          
           
                            <?php 
           if ($_POST['submitbtn']) {
                $from = ($_POST['from']);
                $to = ($_POST['TO']);
                $PASSENGER = ($_POST['PASSENGER']);
                $toDate = ($_POST['toDate']);
                $fromDate = ($_POST['fromDate']);
                header('Location: index.php');
            }

        ?>
                -->
            </nav>
            <article>
                <h3>ARTICLE</h3>
            </article>
            <aside>
                <h3>ASIDE</h3>
            </aside>
            <footer>
                <h3>FOOTER</h3>
            </footer>

            
       
        </div>
    </body>
</html>
