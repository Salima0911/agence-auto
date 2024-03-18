<?php

require_once(__DIR__ . "/../partials/head.php");
?>

<h1>create vehicule</h1>

<form action="" method = "POST">
<div>
    <label for="marque">Marque</label>
    <input type="text" name='marque'>
  </div>
  <div>
    <label for="modele">Modele</label>
    <input type="text" name='modele'>
  </div>

  <div>
    <label for="annee">Année</label>
    <input type="number" name='annee'>
  </div>

  <button type= "submit">Create</button>
</form>

<?php 
require_once(__DIR__ . "/../partials/footer.php");
?>