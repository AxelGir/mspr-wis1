<?php
if ($_POST) {
    function getValueFromField($field_name)
    {
        $value = null;
        if (isset($_POST[$field_name]) && $_POST[$field_name]):
            $value = htmlspecialchars($_POST[$field_name]);
        endif;
        return $value;
    }
    function getRealPrice($price = 0, $tva = 0.2)
    {
        return $price + ($price * $tva);
    }
    $price = getValueFromField('price');
    $size = getValueFromField('size');
    $price_ttc = getRealPrice($price, $size);
}

?>
<?php $title = 'Avant-Gourde - Tarifs'; ?>
<?php require_once 'layouts/header.php' ?>
<main id="main">
    <section id="tarifs-top">
        <div class="container">
        <h2 class="home-title">- Nos tarifs -</h2>
            <p>Selectionnez un modèle et une taille</p>
        </div>
    </section>
    <section id="tarifs-selector">
        <div class="selector-gourd">
            <form action="" method="post">
            <div class="container-img">
                <img src="http://placehold.it/200" alt="Gourde en plastique">
                <input type="radio" id="plastique" name="img-select" checked>
                <img src="http://placehold.it/200" alt="Gourde en verre">
                <input type="radio" id="verre" name="img-select" checked>
                <img src="http://placehold.it/200" alt="Gourde en métal">
                <input type="radio" id="metal" name="img-select" checked>
            </div>
            <div class="selector-size">
                <label for="size">Taille</label>
                    <select name="size" id="size" required>
                        <?php if (isset($size) && $size === '0.5'): ?>
                        <option value="0.5" selected>0,5L</option>
                        <?php else: ?>
                        <option value="0.5">0.5L</option>
                        <?php if (isset($size) && $size === '1'): ?>
                        <option value="1" selected>1L</option>
                        <?php else: ?>
                        <option value="1">1L</option>
                        <?php if (isset($size) && $size === '2'): ?>
                        <option value="2" selected>2L</option>
                        <?php else: ?>
                        <option value="2">2L</option>
                        <?php endif; ?>
                    </select>
                    <button class="btn btn-know-more">Générer ma commande</button>
            </div>
        </div>
    </section>

</main>
<?php require_once 'layouts/footer.php' ?>
<?php endif; ?>
<?php endif; ?>
