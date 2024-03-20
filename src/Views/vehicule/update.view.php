<?php
$title = 'modifier vehicule';
require_once(__DIR__ . "/../partials/head.php");
?>


<h1>modifier vehicule</h1>


<?php
$title = 'creer vehicule';
require_once(__DIR__ . "/../partials/head.php");
?>

<h1>Create vehicule</h1>


<form action="" method="POST">
    <div>
        <label for="marque">Marque</label>
        <input type="text" name='marque' value ="<?php echo $vehicule->getMarque() ?>">
    </div>
    <div>
        <label for="modele">Modele</label>
        <input type="text" name='modele' value ="<?php echo $vehicule->getModele() ?>">
    </div>
    <div>
        <label for="annee">Année</label>
        <input type="number" name='annee'value ="<?php echo $vehicule->getAnnee() ?>">
    </div>
    <button type="submit">Modifier</button>
    <button type="submit">Modifier</button>
</form>


<?php require_once(__DIR__ . "/../partials/footer.php") ?>