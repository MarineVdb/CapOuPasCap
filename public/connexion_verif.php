<!-- Vérification du formulaire de connexion -->
<?php 
    $erreurConnexion = "";

    //Si le formulaire a été validé : 
    if(isset($_POST['connexion'])){
        //Je récupère les données de mon formulaire 
        $mail = $_POST['email'];
        $password = $_POST['mdp'];
        //Si les champs ne sont pas vides :
        if(!empty($mail) && !empty($password)){
            //Je me connecte à la BDD 
            include '../src/connexionBdd.php';

            //Je decrypte le mot de passe 
            $password = hash('sha256', $password);
            //Je créé ma requête SQL : Je vais chercher la ligne avec le mail entré par l'utilisateur
            $sql = "SELECT email, mot_de_passe FROM utilisateur WHERE email='".$mail."' AND mot_de_passe='".$password."'" ;
            
            //J'envoie la requête à la BDD et je l'enregistre dans une variable
            $reponse = $bdd ->query($sql);
            
            //Si le mot de passe correspond à la ligne email, on accueille l'utilisateur
            if ($donnees = $reponse->fetch()){
                header('location:index.php');
                exit;
            } else {
                //Si le mot de passe ne correspond pas, on échoue la connexion
                $erreurConnexion = "Mail ou mot de passe invalide";
            }
        } else{
            $erreurConnexion = "Tous les champs doivent être complétés";
        } 
    }
?>
    