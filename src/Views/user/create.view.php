<?php
$title = 'creer user';
require_once(__DIR__ . "/../partials/head.php");
?>

<h1>create user</h1>


<form action="" method="POST">
    <div>
        <label for="name">Nom</label>
        <input type="text" name='name'>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name='email'>
    </div>
    <div>
        <label for="password">Mot de Passe</label>
        <input type="text" name='password'>
    </div>
    <button type="submit">Creer</button>
</form>


<?php require_once(__DIR__ . "/../partials/footer.php") ?>