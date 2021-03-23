<?php

require_once '../template/header.php';
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
$sql = "SELECT produit_id, produit.nom, prix, photo.image AS `image`, marque.nom AS marque
FROM produit
INNER JOIN marque ON produit.marque = marque.marque_id
INNER JOIN photo ON produit.produit_id = photo.produit
WHERE marque.marque_id = {$marque_id}";

$reponse = $bdd->query($sql);

?>

<div class="row col-12">
    <h2><?=MARQUE?></h2>
</div>

<div class="col-12 border d-flex flex-row flex-wrap">
<?php
while ($donnees = $reponse->fetch()):
?>
    <a class="col-3 border">
    <div>
        <img class="img-fluid" src="<?= htmlentities($donnees['image']) ?>">
        <p><?= htmlentities($donnees['nom'])?></p>
        <p><?=htmlentities($donnees['prix'])." €" ?></p>
        <p><?= htmlentities($donnees['marque']) ?></p>
    </div>
    </a>
    
<?php
endwhile;
?>
</div>

<?php

require_once '../template/footer.php';
