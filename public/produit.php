<?php require_once '../header.php';?> 


<?php 
if(isset($_GET) && isset($_GET['id'])){
    $id = intval($_GET['id']);
    require_once '../src/connexionBdd.php';
    $sql = "SELECT produit_id, nom, `description`, prix FROM produit WHERE produit_id='".$id."'" ;
    //J'envoie la requête à la BDD et je l'enregistre dans une variable
    $reponse = $bdd ->query($sql);
    //Si on trouve un ID, on affiche le nom
        if ($donnees = $reponse->fetch()){
            //echo 'Ce produit existe';
            echo $donnees['produit_id'];
            echo $donnees['nom'];
            echo $donnees['description'];

        } else {
            echo 'ce produit n\'existe pas';
        }
} else {
    echo 'erreur 404';
}



?>

<?php require_once '../footer.php';?> 