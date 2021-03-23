<?php

require_once '../header.php';
require_once '../src/connexionBdd.php';

// id de la marque
if (!isset($_GET['marque_id'])) {
    $marque_id = 0;
} else {
    $marque_id = (int) $_GET['marque_id'];
}

// même chose avec l'opérateur ternaire
// $marque_id = !isset($_GET['marque_id']) ? 0 : (int) $_GET['marque_id'];

// liste des produits par marque
$sql = "SELECT *
FROM produit
INNER JOIN marque ON produit.marque = marque.marque_id
WHERE marque.marque_id = {$marque_id}";

$reponse = $bdd->query($sql);

?>

<div>
<?php
while ($donnees = $reponse->fetch()):
?>
    <?= htmlentities($donnees['produit_id']) ?><br>
    <?= htmlentities($donnees['nom']) ?>
<?php
endwhile;
?>
</div>

<?php

require_once '../footer.php';
