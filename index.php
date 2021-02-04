<?php $title = 'Avant-Gourde - Accueil'; ?>

<?php require_once 'layouts/header.php' ?>

    <main id="main">
        <section id="home-fs">
            <div class="first-scene">
                <img src="images/gourde-stylee.jpg" alt="gourde de fond">
            </div>
        </section>

        <section id="home-concept">
            <div class="container">
                <h2 class="home-title">- Notre concept -</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur cum debitis delectus,
                    dolores earum, explicabo facilis fuga fugiat illo impedit in laboriosam laborum laudantium minus
                    mollitia numquam odit possimus quae, rem saepe sunt tempora ullam! Accusantium, dignissimos
                    ducimus
                    ipsam molestias odit quae veniam? A asperiores consequuntur inventore maiores provident [...]</p>
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
                        <h3>Nos gourdes en plastique</h3>
                        <a class="btn" href="./details-plastique.php">En savoir plus</a>
                    </div>
                    <div class="card">
                        <img src="images/gourde-card-3.png"
                             alt="gourde-en-verre">
                        <h3>Nos gourdes en verre</h3>
                        <a class="btn" href="./details-verre.php">En savoir plus</a>
                    </div>
                    <div class="card">
                        <img src="images/gourde-card-2.png"
                             alt="gourde-en-metal">
                        <h3>Nos gourdes en métal</h3>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur cum debitis delectus,
                    dolores earum, explicabo facilis fuga fugiat illo impedit in laboriosam laborum laudantium minus
                    mollitia numquam odit possimus quae, rem saepe sunt tempora ullam! Accusantium, dignissimos
                    ducimus
                    ipsam molestias odit quae veniam? A asperiores consequuntur inventore maiores provident!</p>
                <a class="btn btn-know-more" href="./about.php">En savoir plus...</a>
            </div>
        </section>

        <section id="home-contact">
            <div class="container">
                <h2 class="home-title">- Notre contact -</h2>
                <span class="question">Une question sur nos produits ou tout simplement une demande particulière ?</span>
                <div class="btn-wrapper">
                    <a class="btn" href="./contact.php">Nous contacter !</a>
                </div>
            </div>
        </section>

    </main>

<?php require_once 'layouts/footer.php' ?>