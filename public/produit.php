<?php require_once '../header.php';?> 

<?php 
if(isset($_GET) && isset($_GET['id'])){
    $id = intval($_GET['id']);
    require_once '../src/connexionBdd.php';
    $sql = "SELECT produit_id, produit.nom, produit.`description`, prix, dimension_largeur, dimension_longueur,dimension_hauteur,poids, marque.nom AS marque, categorie.nom AS categorie, photo.image 
            FROM produit 
            INNER JOIN photo ON produit.produit_id = photo.produit 
            INNER JOIN marque ON produit.marque = marque.marque_id
            INNER JOIN categorie ON produit.categorie = categorie.categorie_id
            WHERE produit_id='".$id."'" ;
    //J'envoie la requête à la BDD et je l'enregistre dans une variable
    $reponse = $bdd ->query($sql);
        //Si on trouve un ID, on récupère les données et on les affiche
        if ($donnees = $reponse->fetch()){
            $image=$donnees['image'];
            $nom=$donnees['nom'];
            $marque=$donnees['marque'];
            $prix=number_format($donnees['prix'],2);
            $longueur=$donnees['dimension_longueur'];
            $largeur=$donnees['dimension_largeur'];
            $hauteur=$donnees['dimension_hauteur'];
            $poids=$donnees['poids'];
            $categorie=$donnees['categorie'];
            ?>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:white;">
                    <li class="breadcrumb-item"><a href="index.php" class="text-secondary" style="font-weight:bold;">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-secondary" style="font-weight:bold;"><?=$categorie?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$nom?></li>
                </ol>
            </nav>
            

            <div class="row col-12">
                <!-- Image du produit -->
                <div class="col-12 col-md-6">
                        <img src="<?= $image ?>" alt="Photo du produit" class="img-fluid">
                </div>
                
                <!-- Description du produit -->
                <div class="col-12 col-md-6 pt-5">
                    <h2> <?=$nom." - ".$marque?></h2>
                  
                    <p>
                        <label for="quantite">Quantité</label>
                        <input type="number" min="0" name="quantite">
                    </p>
                    <p><h2> <?=$prix." €"?> </h2></p>

                    <p class="text-center">
                        <input type="button" name="ajouter" value="Ajouter au panier" class="btn btn-secondary btn-lg bouton">
                    </p>

                    <p>
                        <nav>
                            <div class="nav nav-tabs col-12" id="nav-tab" role="tablist">
                                <button class="nav-link active col-4" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                                <button class="nav-link col-4" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Détails</button>
                                <button class="nav-link col-4" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Livraison</button>
                            </div>
                        </nav>
                        <div class="tab-content col-12" id="nav-tabContent" style="min-height:120px;">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?=$donnees['description']?></div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <ul>
                                        <li>Longueur : <?= $longueur.' cm'; ?> </li>
                                        <li>Largeur : <?= $largeur.' cm'; ?> </li>
                                        <li>Hauteur : <?= $hauteur.' cm'; ?> </li>
                                        <li>Poids : <?= $poids.' kg'; ?> </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Le produit est à venir retirer en magasin</div>
                        </div>
                    </p>

                    <div class="text-center mt-5">
                        <p style="font-family:'Sue Ellen Francisco', cursive; font-size:2rem;">Partagez-moi</p> 
                        <!-- URL de partage à modifier -->
                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fab fa-facebook-square fa-3x" style="color:#303030"></i></a>
                        <a href="//pinterest.com/pin/create/link/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest"><i class="fab fa-pinterest-square fa-3x" style="color:#303030"></i></a>
                        <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" rel="noopener"><i class="fab fa-instagram-square fa-3x" style="color:#303030"></i></a>
                    </div>

                </div>

            </div>
        <?php    
        } else {
            //L'id produit n'existe pas ?>
            <div class="container-fluid text-center text-danger pt-5"> 
                <h1>ERREUR 404</h1>
                <p>Ce produit n'existe pas</p>
            </div>
        <?php }
} else {
    //L'URL est incorrect?>
    <div class="container-fluid text-center text-danger pt-5"> 
        <h1>ERREUR 404</h1>
        <p>La page que vous cherchez n'a pas été trouvée </p>
    </div>
    
<?php } ?>


<?php require_once '../footer.php';?> 