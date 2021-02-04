<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php if (!isset($title)):
                echo 'Page sans titre';
            else:
                echo $title;
            endif; ?>
        </title>

    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body>


<header class="header">
    <a href="./" class="logo">
        <img src="images/logo%20Avant-gourde.png" alt="logo Avant-gourde">
    </a>
    <div class="menu-btn">
        <div class="menu-btn_hamburger"></div>
    </div>
    <nav>
        <ul class="menu-items">
            <li class="lien">
                <a class="menu-item" href="./">Accueil</a>
            </li>
            <li class="lien">
                <a class="menu-item" href="./concept.php">Concept</a>
            </li>
            <li>
                <a class="menu-item expand-btn" href="#">Nos gourdes</a>
                <div class="mega-menu blog">
                    <div class="content">
                        <div class="col"><a href="./details-plastique.php" class="img-wrapper"><span class="img"><img
                                            src="images/plastique-square.jpg"</span></a>
                            <h2>Gourde en plastique</h2>
                            <a href="./details-plastique.php" class="read-more">En savoir plus...</a>
                        </div>

                        <div class="col"><a href="./details-verre.php" class="img-wrapper"><span class="img"><img
                                            src="images/verre-square.jpg"</span></a>
                            <h2>Gourde en verre</h2>
                            <a href="./details-verre.php" class="read-more">En savoir plus...</a>
                        </div>

                        <div class="col"><a href="./details-metal.php" class="img-wrapper"><span class="img"><img
                                            src="images/metal-portrait3.jpg"</span></a>
                            <h2>Gourde en métal</h2>
                            <a href="./details-metal.php" class="read-more">En savoir plus...</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a class="menu-item" href="./tarifs.php">Tarifs</a>
            </li>
            <li>
                <a class="menu-item" href="./about.php">A propos</a>
            </li>
            <li>
                <a class="menu-item" href="./contact.php">Contact</a>
            </li>
        </ul>
    </nav>
</header>