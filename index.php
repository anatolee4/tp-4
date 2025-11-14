<?php include "entete.php" ?>


<main>
    <form action="connexion.php" method="post">
        <label for="identifiant">identifiant :</label>
        <input type="text" id="identifiant" name="identifiant" required><br>

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br><br>

        <input type="submit" value="Se connecter">
    </form>

<?php  include "pieddepage.php"; ?>