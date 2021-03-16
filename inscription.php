<?php  
    $erreur = "";

    //On vérifie si le formulaire a été validé 
    if (isset($_POST['inscription'])){

        //On récupère les variables 
        $nomUpper = htmlspecialchars($_POST['nom']);
        $nom = strtolower($nomUpper);
        $prenomUpper = htmlspecialchars($_POST['prenom']);
        $prenom = strtolower($prenomUpper);
        $emailUpper = htmlspecialchars($_POST['email']);
        $email = strtolower($emailUpper);
        $mdp = htmlspecialchars($_POST['mdp']);
        $tel = htmlspecialchars($_POST['tel']);
        $adresse1 = htmlspecialchars($_POST['adresse1']);
        $adresse2 = htmlspecialchars($_POST['adresse2']);
        $localite = htmlspecialchars($_POST['localite']);
        $code_postal = htmlspecialchars($_POST['code_postal']);


            //On vérifie si les champs ne sont pas vides 
        if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($mdp)){

            //Si les champs ne sont pas vides, on se connecte à la BDD
            include ('bdd/connexionBdd.php');

            //On vérifie si le mail est existant dans la BDD
            //J'écris ma requête (PDO)
            $requeteMail = $bdd->prepare("SELECT email FROM utilisateur WHERE email='".$email."'");
            //J'éxecute ma requête
            $requeteMail->execute();
            //J'enregistre le nombre de ligne qui ressortent de la requête dans une variable countRow
            $countRow = $requeteMail->rowCount();
            //Si l'adresse mail ressort dans une ligne, alors l'adresse est déjà utilisée 
            if($countRow != 0){
                echo "Cette adresse email est déjà utilisée";
            } else {
                //On crypte le mot de passe
                $mdp = hash('sha256', $mdp);
                
                //On écrit les données dans la BDD 
                $sql = $bdd->prepare("INSERT INTO utilisateur(nom, prenom, email, `role`,  mot_de_passe, tel, adresse1, adresse2, localite, code_postal) VALUES (:nom, :prenom, :email, 'utilisateur', :mdp, :tel, :adresse1, :adresse2, :localite, :code_postal)"); 
                $sql->bindParam("nom", $nom);
                $sql->bindParam("prenom", $prenom);
                $sql->bindParam("email", $email); 
                $sql->bindParam("mdp", $mdp); 
                $sql->bindParam("tel", $tel); 
                $sql->bindParam("adresse1", $adresse1);
                $sql->bindParam("adresse2", $adresse2);
                $sql->bindParam("localite", $localite);
                $sql->bindParam("code_postal", $code_postal);
                $sql->execute();    

                //On autorise l'utilisateur à accéder au dashboard
                header("Location:index.php");
                exit();
            }
        
        //Si des champs sont vides, on ne valide pas l'inscription
        } else {
            $erreur = "Veuillez remplir les champs suivants : <br />";
            $erreur .= (empty($nom)) ? "- Nom<br />" : ""; 
            $erreur .= (empty($prenom)) ? "- Prénom<br />" : ""; 
            $erreur .= (empty($email)) ? "- Email<br />" : ""; 
            $erreur .= (empty($mdp)) ? "- Mot de passe<br />" : ""; 
        }
    }
    
    // Insertion de l'affichage du header
    include('header.php');
    
    ?>   
    <div class="container-fluid">
        <h3 class="mt-4 d-block">Créez votre compte</h3>
    </div>  
    
        
    <?php if(!empty($erreur)) { ?>
        <div class="row">
            <div class='col-12 bg-warning'> 
                <?php echo $erreur; ?>
            </div>
        </div>
        <?php } ?>
    <div class="row">
        <form action='inscription.php' method='post' class="container border d-block">
            <p>Nom  <input type='text' name='nom'/></p>
            <p>Prénom  <input type='text' name='prenom'/></p>
            <p>Email  <input type='text' name='email'/></p>
            <p>Mot de passe <input type='password' name='mdp'/></p>
            <p>Téléphone  <input type='number' name='tel'/></p>
            <p>Adresse 1  <input type='text' name='adresse1'/></p>
            <p>Adresse 2  <input type='text' name='adresse2'/></p>
            <p>Ville  <input type='text' name='localite'/></p>
            <p>Code Postal  <input type='text' name='code_postal'/></p>
            <p><input class="simple button" type='submit' name = 'inscription' value='Inscription'></p>
        </form>
    </div>
    <div class="row">
        <p><a href="connexion.php">J'ai déjà un compte</a></p>
    </div> 
    
</div>  
<?php include('footer.php');?>