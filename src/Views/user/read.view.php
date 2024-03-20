<?php
$title = 'voir user';
require_once(__DIR__ . "/../partials/head.php");

echo 
"<table>


<tbody>
<tr>";

echo "<td>" . $user->getId() . "</td>";
echo "<td>" . $user->getName() . "</td>";
echo "<td>" . $user->getEmail() . "</td>";

echo "</tr>
</tbody>
</table>";

require_once(__DIR__ . "/../partials/footer.php");
