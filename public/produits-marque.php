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

$sql_marque ="SELECT nom 
FROM marque
WHERE marque_id = {$marque_id}";


$reponse = $bdd->query($sql);
$reponse_marque  = $bdd->query($sql_marque);

?>

<div class="row col-12">
   <?php $donnees_marque = $reponse_marque->fetch();?>
   <h1 class="ml-5 mt-2"><?=$donnees_marque['nom']?></h1>
</div>

<div class="col-12 d-flex flex-row flex-wrap justify-content-around">
<?php
while ($donnees = $reponse->fetch()):
?>
    <a class="col-5 col-md-2 m-1 m-md-3 mb-md-2 border" style="text-decoration:none;" href="produit.php?id=<?= htmlentities($donnees['produit_id']) ?>">
    <div>
        <img class="img-fluid" src="<?= htmlentities($donnees['image']) ?>">
        <p class="text-secondary"><b><?= htmlentities($donnees['nom'])." - ".htmlentities($donnees['marque'])?></b></p>
        <p class="text-secondary"><h4 style="color:#303030"><?=number_format(htmlentities($donnees['prix']),2)." €" ?></h4></p>
    </div>
    </a>
    
<?php
endwhile;
?>
</div>

<?php

require_once '../template/footer.php';


