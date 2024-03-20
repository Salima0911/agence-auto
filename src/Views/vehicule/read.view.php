<?php
$title = 'voir vehicule';
require_once(__DIR__ . "/../partials/head.php");

echo 
"<table>
<tbody>
<tr>";
echo "<tr>";
echo "<td>" . $vehicule->getId() . "</td>";
echo "<td>" . $vehicule->getMarque() . "</td>";
echo "<td>" . $vehicule->getModele() . "</td>";
echo "<td>" . $vehicule->getAnnee() . "</td>";
echo "</tr>;
</tbody>
</table>";

require_once(__DIR__ . "/../partials/footer.php");
