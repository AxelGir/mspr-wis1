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
                                            src="https://picsum.photos/400?random=2"
                                            alt="Random Image 2"></span></a>
                            <h2>Gourde en plastique</h2>
                            <a href="./details-plastique.php" class="read-more">en savoir plus</a>
                        </div>

                        <div class="col"><a href="./details-verre.php" class="img-wrapper"><span class="img"><img
                                            src="https://picsum.photos/400?random=3"
                                            alt="Random Image 3"></span></a>
                            <h2>Gourde en verre</h2>
                            <a href="./details-verre.php" class="read-more">en savoir plus</a>
                        </div>

                        <div class="col"><a href="./details-metal.php" class="img-wrapper"><span class="img"><img
                                            src="https://picsum.photos/400?random=4"
                                            alt="Random Image 4"></span></a>
                            <h2>Gourde en métal</h2>
                            <a href="./details-metal.php" class="read-more">en savoir plus</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a class="menu-item" href="./tarifs.php">Tarifs</a>
            </li>
            <li>
                <a class="menu-item" href="#">A propos</a>
            </li>
            <li>
                <a class="menu-item" href="#">Contact</a>
            </li>
        </ul>
    </nav>
</header>