<?php
$title = 'vehicule';
require_once(__DIR__ . "/../partials/head.php");
?>


<h1>vehicule</h1>


<table>
    <thead>
        <tr>
            <th>id</th>
            <th>marque</th>
            <th>modele</th>
            <th>annee</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($vehicules as $vehicule) {

            echo "<tr>";
            echo "<td>" . $vehicule->getId() . "</td>";
            echo "<td>" . $vehicule->getMarque() . "</td>";
            echo "<td>" . $vehicule->getModele() . "</td>";
            echo "<td>" . $vehicule->getAnnee() . "</td>";
            echo '<td><a href="/vehicule/read?id=' . $vehicule->getId() . '" >voir</a></td>';
            echo '<td><a href="/vehicule/update?id=' . $vehicule->getId() .  '" >modifier(update)</a></td>';                
            ?> 
            <td>
       
           <form action="/vehicule/delete" method="POST">
        <input type="hidden"name='id'  value ="<?php echo $vehicule->getId()?>">
        <button type="submit">Supprimer</button>
        </td>
        </tr>
</form>
<?php   }?>

    


    </tbody>





</table>




<?php require_once(__DIR__ . "/../partials/footer.php") ?>