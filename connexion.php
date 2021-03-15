<?php include 'header.php';?> 

<div class="container-fluid">

    <div class="large-12 cell">
        <p>Veuillez vous connecter</p>
    </div>

    <form action='connexion.php' method='post'>
            <label> Mail : </label>
            <input type='text' name='email' placeholder="xxxxx@gmail.com"/>
            <label> Mot de passe :  </label>
            <p><input type='password' name='mdp'/></p>
            <input class="simple button" type='submit' name ='connexion' value='Connexion'>
            <p><a href="inscription.php">Je créé mon compte</a></p>
    </form>

    <?php 
        //Si le formulaire a été validé : 
        if(isset($_POST['connexion'])){
            //Je récupère les données de mon formulaire 
            $mail = $_POST['email'];
            $password = $_POST['mdp'];
            //Si les champs ne sont pas vides :
            if(!empty($mail) && !empty($password)){
                //Je me connecte à la BDD 
                include 'bdd/connexionBdd.php';

                //Je decrypte le mot de passe 
                $password = hash('sha256', $password);
                //Je créé ma requête SQL : Je vais chercher la ligne avec le mail entré par l'utilisateur
                $sql = "SELECT id_individu,pseudo, mail, mot_de_passe FROM individus WHERE mail='".$mail."' AND mot_de_passe='".$password."'" ;
                
                //J'envoie la requête à la BDD et je l'enregistre dans une variable
                $reponse = $bdd ->query($sql);
                
                //Si le mot de passe correspond à la ligne email, on accueille l'utilisateur
                if ($donnees = $reponse->fetch()){
                    header('location: index.php');
                    exit;
                } else {
                    //Si le mot de passe ne correspond pas, on échoue la connexion
                    echo "Mail ou mot de passe invalide";
                }
            } else{
                echo "Tous les champs doivent être complétés";
            } 

        //Si un des champs est vide, on demande à l'utilisateur de tout compléter 
        }
    ?>
    
</div>

<?php include 'footer.php';?>