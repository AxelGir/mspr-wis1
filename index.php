<?php $title = 'Avant-Gourde - Accueil'; ?>

<?php require_once 'layouts/header.php' ?>

    <main id="main">
        <section id="home-fs" style="background-image: url(images/gourde-stylee.jpg)">
            <div class="container">

                <h1>AVANT-GOURDE</h1>

                <div class="images-wrapper">
                    <img src="images/bottle.svg" alt="gourde-qui-verse"/>
                </div>

                <div class="home-icon">
                    <img src="images/water-drop.svg" alt="goutte-qui-tombe"/>
                </div>

            </div>
        </section>

        <section id="home-concept">
            <div class="container">
                <h2 class="home-title">- Notre concept -</h2>
                <p>Concernant l'origine de <b>Avant-Gourde</b>, on pourrait la résumer à une rencontre des plus communes
                    entre Dewi et Axel. En école post-bac, une idée nous est venue (parce que nous avions ce
                    problème de ne jamais pouvoir conserver notre boisson favorite à bonne température !) de créer
                    des gourdes capables de conserver notre boisson à la température de
                    notre choix. [...]</p>
                <a class="btn" href="./concept.php">En savoir plus...</a>
            </div>
        </section>

        <section id="home-gourdes">
            <div class="container">
                <h2 class="home-title">- On vous présente nos gourdes -</h2>
                <div class="cards-wrapper">
                    <div class="card">
                        <img src="images/gourde-card-1.png"
                             alt="gourde-en-plastique">
                        <h3>Notre gourde en plastique</h3>
                        <a class="btn" href="./details-plastique.php">En savoir plus</a>
                    </div>
                    <div class="card">
                        <img src="images/gourde-card-3.png"
                             alt="gourde-en-verre">
                        <h3>Notre gourde en verre</h3>
                        <a class="btn" href="./details-verre.php">En savoir plus</a>
                    </div>
                    <div class="card">
                        <img src="images/gourde-card-2.png"
                             alt="gourde-en-metal">
                        <h3>Notre gourde en métal</h3>
                        <a class="btn" href="./details-metal.php">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-tarifs">
            <div class="container">
                <h2 class="home-title">- Nos différents tarifs -</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/metal-paysage3-coupee.jpg" class="d-block w-100" alt="illustration-gourde">
                    </div>
                    <div class="carousel-item">
                        <img src="images/metal-paysage2-coupee.jpg." class="d-block w-100" alt="illustration-gourde">
                    </div>
                    <div class="carousel-item">
                        <img src="images/verre-paysage2.jpg" class="d-block w-100" alt="illustration-gourde">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </a>
            </div>

            <div class="container">
                <div class="btn-wrapper">
                    <a class="btn btn-tarifs" href="./tarifs.php">Voir nos tarifs -></a>
                </div>
            </div>
        </section>

        <section id="home-about">
            <div class="container">
                <h2 class="home-title">- A propos de nous -</h2>
                <p>Nous avons décidé de faire équipe assez rapidement, ce choix était pour nous une évidence étant donné
                    que nous sommes très complémentaires et qu'on sait travailler ensemble. Nous nous sommes partagé les
                    tâches à réaliser et on a finalement pu proposer une production qui correspondait à nos
                    attentes.</p>
                <a class="btn btn-know-more" href="./about.php">En savoir plus...</a>
            </div>
        </section>

        <section id="home-contact">
            <div class="container">
                <h2 class="home-title">- Contactez-nous -</h2>
                <span class="question">Une question sur nos produits ou tout simplement une demande particulière ?</span>
                <div class="btn-wrapper">
                    <a class="btn" href="./contact.php">Nous contacter !</a>
                </div>
            </div>
        </section>

    </main>

<?php require_once 'layouts/footer.php' ?>