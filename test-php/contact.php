<?php require "./partials/header.php"?>
<form class="flex column contact-form" action="">
    <label for="email">Email</label>
    <input placeholder="votre@email.fr" type="email" name="email" id="">
    <label for="sujet">Sujet</label>
    <select name="pets" id="pet-select">
        <option value="">Choisissez le sujet</option>
        <option value="dog">Site vitrine</option>
        <option value="cat">Site marchand</option>
        <option value="hamster">Stratégie SEO</option>
        <option value="parrot">Module wordpress</option>
        <option value="spider">Site Wordpress</option>
    </select>
    <label for="explication">Décrivez-moi votre projet !</label>
    <area type="text" shape="" coords="" href="" alt="" name="explication">
</form>
<?php require "./partials/footer.php" ?>