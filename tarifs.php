<?php
$products = [
          'plastique' =>  ['name' => 'plastique', 'price' => '11'],
           'verre' => ['name' => 'verre', 'price' => '14'],
           'metal' => ['name' => 'metal', 'price' => '12'],
            '0.5' => ['name' => '0.5', 'price' => '1'],
            '1' => ['name' => '1', 'price' => '3'],
            '2' => ['name' => '2', 'price' => '5'],
        ];
$total= 0;
if ($_POST) {
    function getValueFromField($field_name)
    {
        $value = null;
        if (isset($_POST[$field_name]) && $_POST[$field_name]):
            $value = htmlspecialchars($_POST[$field_name]);
        endif;
        return $value;
    }
    function getRealPrice($price = 0, $size = 0)
    {
        return $plastique +  $size;
    }

    $price = getValueFromField('price');
    $plastique = getValueFromField('plastique');
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
        <div class="container">
        <div class="selector-gourd">
            <form action="" method="post">

                <div class="container-img d-flex">
                    <div class="form-group">
                        <input type="radio" id="plastique" name="img-select">
                        <label for="plastique">
                            <img src="http://placehold.it/200" alt="Gourde en plastique">
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="verre" name="img-select">
                        <label for="verre">
                            <img src="http://placehold.it/200" alt="Gourde en verre">
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="metal" name="img-select">
                        <label for="metal">
                            <img src="http://placehold.it/200" alt="Gourde en métal">
                        </label>
                    </div>
                </div>

                <div class="selector-size">
                    <label for="size">Taille</label>
                    <select name="size" id="size" required>

                        <option value="0.5" <?php echo isset($size) && $size === '0.5' ? 'selected' : null; ?>>0,5L
                        </option>

                        <option value="1" <?php echo isset($size) && $size === '1' ? 'selected' : null ?>>1L</option>

                        <option value="2" <?php echo isset($size) && $size === '2' ? 'selected' : null ?>>2L</option>

                    </select>
                    <button class="btn btn-know-more">Voir le prix</button>
                    <?php if (isset($price_ttc) && $price_ttc): ?>
                        <div class="result">
                            <output><?php echo $price_ttc; ?>€ TTC</output>
                        </div>
                    <?php endif; ?>
                </div>
        </div>
        </div>
    </section>

</main>
<?php require_once 'layouts/footer.php' ?>
