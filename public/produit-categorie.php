<?php

require_once '../template/header.php';
require_once '../src/connexionBdd.php';

// id de la categorie
if (!isset($_GET['categorie_id'])) {
    $categorie_id = 0;
} else {
    $categorie_id = (int) $_GET['categorie_id'];
}


// liste des produits par categorie
$sql = "SELECT produit_id, produit.nom, prix, photo.image AS `image`, categorie.nom AS categorie
FROM produit
INNER JOIN categorie ON produit.categorie = categorie.categorie_id
INNER JOIN photo ON produit.produit_id = photo.produit
WHERE categorie.categorie_id = {$categorie_id}";

$sql_categorie ="SELECT nom 
FROM categorie
WHERE categorie_id = {$categorie_id}";


$reponse = $bdd->query($sql);
$reponse_categorie  = $bdd->query($sql_categorie);

?>

<div class="row col-12">
   <?php $donnees_categorie = $reponse_categorie->fetch();?>
   <h1 class="ml-5 mt-2"><?=$donnees_categorie['nom']?></h1>
</div>

<div class="col-12 d-flex flex-row flex-wrap justify-content-around">
<?php
while ($donnees = $reponse->fetch()):
?>
    <a class="col-5 col-md-2 m-1 m-md-3 mb-md-2 border" style="text-decoration:none;" href="produit.php?id=<?= htmlentities($donnees['produit_id']) ?>">
    <div>
        <img class="img-fluid" src="<?= htmlentities($donnees['image']) ?>">
        <p class="text-secondary"><b><?= htmlentities($donnees['nom'])." - ".htmlentities($donnees['categorie'])?></b></p>
        <p class="text-secondary"><h4 style="color:#303030"><?=htmlentities($donnees['prix'])." €" ?></h4></p>
    </div>
    </a>
    
<?php
endwhile;
?>
</div>

<?php

require_once '../template/footer.php';
