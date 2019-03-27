<?php 
    $photoHeader = "left--background-face";
    include 'data/data.php';
    include 'inc/header.tpl.php'; 
    include 'inc/fonctions.php'; 
?>


<?php
    if (!empty($_POST)){
        $formulaireValid = verifBasicForm($_POST);
    }
?>

<?php

?>
        <main class="right">
            <h2 class="right__title">Contact</h2>
            <?php  
                if (!empty($_POST)){
                    $message = $formulaireValid ? "Votre message a bien été envoyé" : "Merci de corriger vos informations";
                    echo "<h3>$message</h3>";
                }
            ?>

            <form action="contact.php" class="contact-form" method="post">
                <div class="contact-form__row">
                    <div>
                        <input type="radio" name="gender" id="genderMme" value="madame">
                        <label for="genderMme">Mme</label> /
                        <input type="radio" name="gender" id="genderM" value="monsieur">
                        <label for="genderM">M.</label>
                    </div>
                    <input class="contact-form__item" type="text" name="firstname" value="" placeholder="Prénom">
                    <input class="contact-form__item" type="text" name="lastname" value="" placeholder="Nom">
                </div>
                <div class="contact-form__row">
                    <input class="contact-form__item" type="email" name="email" value="" placeholder="Adresse e-mail">
                </div>
                <div class="contact-form__row contact-form__row--bottom">
                    <label class="contact-form__label" for="source">
                        J'ai connu ce site grâce à
                    </label>
                    <select class="contact-form__item" name="source" id="source">
                        <option value="">choisir</option>
                        <option value="fb">Facebook</option>
                        <option value="twitter">Twitter</option>
                        <option value="google">Google</option>
                        <option value="bouche-a-oreilles">Bouche à oreilles</option>
                        <option value="jpp">JT de 13h de Jean-Pierre Pernault</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="contact-form__row">
                    <label class="contact-form__label" for="messageTextarea">Pour laisser un commentaire libre à propos
                        d'O'clock,
                        c'est par ici :</label>
                </div>
                <div class="contact-form__row contact-form__row--bottom">
                    <textarea class="contact-form__item contact-form__item--textarea" name="message" id="messageTextarea"
                        placeholder="Votre message"></textarea>
                </div>

                <div class="contact-form__row contact-form__row--bottom">
                    <input class="contact-form__item contact-form__item--checkbox" type="checkbox" name="infos-ok" id="infos-ok-label">
                    <label class="contact-form__label" for="infos-ok-label">Je certifie la véracité de ces
                        informations.</label>
                </div>
                <div class="contact-form__row contact-form__row--bottom">
                    <label for="fileUpload">Ajouter un fichier :</label>&nbsp;
                    <input type="file" name="file" id="fileUpload">
                </div>
                <button type="submit" class="contact-form__submit">Envoyer</button>
            </form>
        </main>
        <?php include 'inc/footer.tpl.php'; ?>