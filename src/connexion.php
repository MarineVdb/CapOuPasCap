    <!-- Formulaire de connexion -->
    <form action='compte.php' method='post'class="container pl-md-5 col-12 col-md-12 text-center" >

        <p class="text-center mt-4">
            <h3>Connexion</h3>
            <?php if(!empty($erreurConnexion)) { ?>
                <div class='col-12 text-danger'> <?php echo $erreurConnexion; ?></div>
                <?php } ?>
        </p>

        <div class="mt-2">
            <label for ="email" class="col-md-3"> Email </label>
            <input type='text' class="col-md-4" name='email'/>
        </div>

        <div class="mt-2">
            <label for="mdp" class="col-md-3"> Mot de passe </label>
            <input type='password' class="col-md-4" name='mdp'/>
        </div>

        <p class="text-center mt-4">
        <input class="btn btn-secondary btn-lg bouton" type='submit' name ='connexion' value='Je me connecte'>
        </p>

    </form>
   

    


