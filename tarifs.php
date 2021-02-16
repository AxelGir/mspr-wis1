<?php
$products = [
    'plastique_gourd' =>  ['name' => 'plastique_gourd', 'price' => '11'],
    'verre_gourd' => ['name' => 'verre_gourd', 'price' => '14'],
    'metal_gourd' => ['name' => 'metal_gourd', 'price' => '12'],
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

    $price = getValueFromField('price');
    $gourdes_price = getValueFromField('img-select');
    $size = getValueFromField('size');
    $price_ttc = $gourdes_price + $size;
}
?>
<?php $title = 'Avant-Gourde - Tarifs'; ?>
<?php require_once 'layouts/header.php' ?>
<main id="main">
    <section id="tarifs-top">
        <div class="container">
            <h2 class="home-title">- Nos tarifs -</h2>
            <h3>Selectionnez un modèle et une taille</h3>
        </div>
    </section>
    <section id="tarifs-selector">
        <div class="container">
            <div class="selector-gourd">
                <form action="" method="post">
                    <div class="container-img d-flex">
                        <div class="form-group">
                            <input type="radio" id="plastique" name="img-select" value="11">
                            <label for="plastique">
                                <img src="images/gourde-card-1.png" alt="Gourde en plastique">
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="radio" id="verre" name="img-select" value="14">
                            <label for="verre">
                                <img src="images/gourde-card-3.png" alt="Gourde en verre">
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="radio" id="metal" name="img-select"
                            value="12">
                            <label for="metal">
                                <img src="images/gourde-card-2.png" alt="Gourde en métal">
                            </label>
                        </div>
                    </div>

                    <div class="selector-size">
                        <div class="submit-size">
                        <label for="size">Taille</label>
                        <select name="size" id="size" required>

                            <option value="1" <?php echo isset($size) && $size === '1' ? 'selected' : null; ?>>0,5L
                            </option>

                            <option value="2" <?php echo isset($size) && $size === '2' ? 'selected' : null ?>>1L</option>

                            <option value="3" <?php echo isset($size) && $size === '3' ? 'selected' : null ?>>2L</option>

                        </select>
                        <button class="btn btn-know-more">Voir le prix</button>
                        </div>
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
