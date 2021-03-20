    <!--Formulaire d'inscription -->
    <div class="d-none d-md-flex justify-content-center">
        <h3 class="mt-4">Créez votre compte</h3>
    </div> 
    
        
    <?php if(!empty($erreur)) { ?>
        <div class="row">
            <div class='col-12 text-danger'> 
                <?php echo $erreur; ?>
            </div>
        </div>
    <?php } ?>
        
    
        <form action='compte.php' method='post' class="container col-12 col-md-12 pl-md-5" style="border-right: 1px solid #ddd;">
            <div class="mt-2">
                <label for="nom" class="col-md-3">Nom *</label>
                <input type='text' name='nom' class="col-md-3"/>
            </div>
            <div class="mt-2">
                <label for="prenom" class="col-md-3" >Prénom *</label>  
                <input type='text'  class="col-md-3" name='prenom'/>
            </div>
            <div class="mt-2">
                <label for="email" class="col-md-3">Email *</label> 
                <input type='text' name='email' class="col-md-4"/>
            </div>
            <div class="mt-2" >
                <label for="mdp" class="col-md-3">Mot de passe *</label>
                <input type='password' name='mdp' class="col-md-4"/>
            </div>
            <div class="mt-2">
                <label for="tel" class="col-md-3">Téléphone</label>  
                <input type='texte' name='tel' class="col-md-3"/>
            </div>
            <div class="mt-2">
                <label for="adresse1" class="col-md-3">Adresse 1</label>  
                <input type='text' name='adresse1' class="col-md-6"/>
            </div>
            <div class="mt-2">
                <label for="adresse2" class="col-md-3">Adresse 2</label>  
                <input type='text' name='adresse2' class="col-md-6"/>
            </div>
            <div class="mt-2">
                <label for="localite" class="col-md-3">Ville</label>  
                <input type='text' name='localite' class="col-md-3"/>
            </div>
            <div class="mt-2">
                <label for="code_postal" class="col-md-3">Code Postal</label>  
                <input type='text' name='code_postal' class="col-md-2"/>
            </div>
            <p class="text-center mt-4">
                <input  class="btn btn-secondary btn-lg bouton" type='submit' name ='inscription' value='Je créé mon compte'> 
            </p>
            <p> * Champs obligatoires </p>
        </form> 
