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
                <a class="btn btn-know-more" href="/concept.php">En savoir plus...</a>
            </div>
        </section>

        <section id="home-gourdes">
            <div class="container">
                <h2 class="home-title">- On vous présente nos gourdes -</h2>
                <div class="cards-wrapper">
                    <div class="card">
                        <img src="images/plastique-portrait1.jpg"
                             alt="gourde-en-plastique">
                        <h3>Nos gourdes en plastique</h3>
                        <a class="btn btn-know-more" href="/details-plastique.php">En savoir plus</a>
                    </div>
                    <div class="card">
                        <img src="images/verre-portrait1.jpg"
                             alt="gourde-en-verre">
                        <h3>Nos gourdes en verre</h3>
                        <a class="btn btn-know-more" href="/details-verre.php">En savoir plus</a>
                    </div>
                    <div class="card">
                        <img src="images/metal-portrait3.jpg"
                             alt="gourde-en-metal">
                        <h3>Nos gourdes en métal</h3>
                        <a class="btn btn-know-more" href="/details-metal.php">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-tarifs">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/Maestria.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/maestria-2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/neww%20%20mae.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>

            <div>
                <a class="btn-tarifs" href="/tarifs.php">Voir nos tarifs -></a>
            </div>
        </section>

        <section id="home-about">
            <div class="container">
                <h2 class="home-title">- Des détails sur nous -</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur cum debitis delectus,
                    dolores earum, explicabo facilis fuga fugiat illo impedit in laboriosam laborum laudantium minus
                    mollitia numquam odit possimus quae, rem saepe sunt tempora ullam! Accusantium, dignissimos
                    ducimus
                    ipsam molestias odit quae veniam? A asperiores consequuntur inventore maiores provident!</p>
                <a class="btn btn-know-more" href="#">En savoir plus...</a>
            </div>
        </section>

        <section id="home-contact">
            <div class="container">
                <h2>- Notre contact -</h2>
                <span>Une question sur nos produits ou tout simplement une demande particulière ?</span>
                <a class="jsp-encore" href="./contact.php">Nous contacter !</a>
            </div>
        </section>
    </main>

<?php require_once 'layouts/footer.php' ?>