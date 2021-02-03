<?php $title = 'Avant-Gourde - Contact'; ?>
<?php require_once 'layouts/header.php' ?>
<?php
function getValueFromField($field_name){

$value = null;
if (isset($_POST[$field_name]) && $_POST[$field_name]):
$value = htmlspecialchars($_POST[$field_name]);
endif;

return $value;
}

$last_name=getValueFromField('last_name');
$email= getValueFromField('email');
?>
<main id="main">
    <section id="contact-top">
        <div class="container">
            <h2>Contactez-nous</h2>
        </div>
    </section>
    <section id="contact-form">
        <div class="form-container">
            <form method="post" action="">
                <div class="form-name">
            <label class="label-name" for="last_name">Nom</label>
            <input class="input-name" type="text" id="last_name"
                   name="last_name" minlength="2" maxlength="255" required>
                </div>
                <div class="form-email">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Votre email" name="email" minlength="2" maxlength="255" required>
                </div>
                <div class="form-phone">
                    <label for="phone">Téléphone</label>
                    <input type="text" id="phone" name="phone" placeholder="Votre numéro de téléphone" minlength="10" maxlength="30" required>
                </div>
                <div class="form-textarea">
                    <label for="exampleFormControlTextarea1">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-know-more" type="submit">Envoyer</button>
            </form>
        </div>
    </section>
</main>
