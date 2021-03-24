<!-- Vérification du formulaire de connexion -->
<?php 
    $erreurConnexion = "";

    //Si le formulaire a été validé : 
    if(isset($_POST['connexion'])){
        //Je me connecte à la BDD 
        include '../src/connexionBdd.php';
        //Je récupère les données de mon formulaire 
        $mail = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['mdp']) ? $_POST['mdp'] : '';
        
        $sql = "SELECT email, mot_de_passe FROM utilisateur WHERE email='".$mail."'";
        $reponse = $bdd ->query($sql);
        $user = $reponse->fetch();
        // récup du user depuis la BDD par rapport à son email ou login
            if (!empty($user)) {
                // utilisateur trouvé
            if (password_verify($password, $user['mot_de_passe'])) {
                // mot de passe ok
                header('location:index.php');
                exit;
            } else {
                // mot de passe pas ok
                $erreurConnexion = "Mot de passe invalide";
                var_dump($user);
                var_dump($password);
                var_dump($mail);
            }
            } else{
                $erreurConnexion = "Mail invalide";
            }
     }
                

    