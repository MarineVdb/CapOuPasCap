<?php

require_once '../src/connexionBdd.php';

// liste des marques
$sql = 'SELECT * FROM marque';
$reponse = $bdd->query($sql);
?>

<div class="container-fluid p-0">

    <nav class="navbar navbar-expand-lg navbar-light bg-white mt-2 mt-lg-0 border">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Barre de recherche uniquement sur mobile-->
        <div class="d-md-none navbar-brand input-group rounded col-8 col-md-5 order-md-2 mt-2 mb-2 mb-lg-0 d-flex">
                <input class="form-control  rounded" type="search" placeholder="Que recherchez vous ?" aria-label="Search">
                <button class="input-group-text border-0" id="search-addon"> <i class="fas fa-search"></i></button>
        </div>  
        

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-fill mb-2 w-100">
            
            <!-- Marques -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Marques
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <?php
                while ($donnees = $reponse->fetch()):
                ?>
                    <a class="dropdown-item" href="produits-marque.php?marque_id=<?= htmlentities($donnees['marque_id']) ?>" data-description="<?= htmlentities($donnees['description']) ?>" ><?= htmlentities($donnees['nom']) ?></a>
                <?php
                endwhile;
                ?>
                </div>
            </li>

            <!-- Catégorie 1 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php 
                    //On récupère le nom de la catégorie 1 dans la BDD 
                    $categorie_1 = $bdd->query("SELECT * FROM `categorie` WHERE `categorie_id` = 1");
                    $donnees_categorie_1 = $categorie_1->fetch();
                    echo htmlentities($donnees_categorie_1['nom'])
                    ?> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                    $sous_categorie1 = $bdd->query('SELECT * FROM `categorie` WHERE `categorie`=1');
                    while ($donnees_sous_categorie1 = $sous_categorie1->fetch()):
                    ?>
                        <a class="dropdown-item" href="produit-categorie.php?categorie_id=<?= htmlentities($donnees_sous_categorie1['categorie_id']) ?>"><?= $donnees_sous_categorie1['nom']?></a>
                    <?php
                    endwhile;
                    ?>
                </div>
            </li>

            <!-- Catégorie 2 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php 
                    $categorie_2 = $bdd->query("SELECT * FROM `categorie` WHERE `categorie_id` = 2");
                    $donnees_categorie_2 = $categorie_2->fetch();
                    echo htmlentities($donnees_categorie_2['nom'])
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                    $sous_categorie2 = $bdd->query('SELECT * FROM `categorie` WHERE `categorie`=2');
                    while ($donnees_sous_categorie2 = $sous_categorie2->fetch()):
                    ?>
                        <a class="dropdown-item" href="produit-categorie.php?categorie_id=<?= htmlentities($donnees_sous_categorie2['categorie_id']) ?>"><?= $donnees_sous_categorie2['nom']?></a>
                    <?php
                    endwhile;
                    ?>
                </div>
            </li>


            <!-- Catégorie 3 -->
            <li class="nav-item">
                <?php 
                $categorie_3 = $bdd->query("SELECT * FROM `categorie` WHERE `categorie_id` = 3");
                $donnees_categorie_3 = $categorie_3->fetch();
                ?>
                <a class="nav-link" href="produit-categorie.php?categorie_id=3" aria-haspopup="true" aria-expanded="false">
                    <?php 
                    echo htmlentities($donnees_categorie_3['nom'])
                    ?>
                </a>
            </li>

            <!-- Catégorie 4 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php 
                    $categorie_4 = $bdd->query("SELECT * FROM `categorie` WHERE `categorie_id` = 4");
                    $donnees_categorie_4 = $categorie_4->fetch();
                    echo htmlentities($donnees_categorie_4['nom'])
                    ?>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                    $sous_categorie4 = $bdd->query('SELECT * FROM `categorie` WHERE `categorie`=4');
                    while ($donnees_sous_categorie4 = $sous_categorie4->fetch()):
                    ?>
                        <a class="dropdown-item" href="produit-categorie.php?categorie_id=<?= htmlentities($donnees_sous_categorie4['categorie_id']) ?>"><?= $donnees_sous_categorie4['nom']?></a>
                    <?php
                    endwhile;
                    ?>

                </div>
            </li>

            <!-- Catégorie 5 -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php 
                    $categorie_5 = $bdd->query("SELECT * FROM `categorie` WHERE `categorie_id` = 5");
                    $donnees_categorie_5 = $categorie_5->fetch();
                    echo htmlentities($donnees_categorie_5['nom'])
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php
                    $sous_categorie5 = $bdd->query('SELECT * FROM `categorie` WHERE `categorie`=5');
                    while ($donnees_sous_categorie5 = $sous_categorie5->fetch()):
                    ?>
                        <a class="dropdown-item" href="produit-categorie.php?categorie_id=<?= htmlentities($donnees_sous_categorie5['categorie_id']) ?>"><?= $donnees_sous_categorie5['nom']?></a>
                    <?php
                    endwhile;
                    ?>
                </div>
            </li>

            <!-- Catégorie 6-->
            <li class="nav-item">
                    <?php
                    $categorie_6 = $bdd->query("SELECT * FROM `categorie` WHERE `categorie_id` = 6");
                    $donnees_categorie_6 = $categorie_6->fetch();
                    ?>
                <a class="nav-link" href="produit-categorie.php?categorie_id=6">
                    <?php echo htmlentities($donnees_categorie_6['nom'])?>
                </a>
            </li>

            </ul>
        </div>
    </nav>
</div>


