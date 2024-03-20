<?php
$title = 'ajouter user';
require_once(__DIR__ . "/../partials/head.php");
?>

<h1>Create user</h1>


<form action="" method="POST">
    <div>
        <label for="name">Nom</label>
        <input type="text" name='name' value ="<?php echo $user->getName() ?>">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name='email' value ="<?php echo $user->getEmail() ?>">
    </div>
    <div>
        <label for="password">Mot de Passe</label>
        <input type="password" name='password'value ="<?php echo $user->getPassword() ?>">
    </div>
    <button type="submit">Modifier</button>
    
</form>


<?php require_once(__DIR__ . "/../partials/footer.php") ?>