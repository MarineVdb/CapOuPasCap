<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cap Ou Pas Cap</title>
        <!-- Lien pour utiliser Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Lien vers  FontAwesome qui permet d'intégrer des icones du site (balises <i>) -->
        <script src="https://kit.fontawesome.com/d097384257.js" crossorigin="anonymous"></script>
        <!-- Lien vers  style.css pour surcharger Bootstrap -->
        <link rel="stylesheet" href="resources/style.css">
         <!-- Lien vers font Sen -->
         <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
         <!-- Lien vers font fantaisie -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sen&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
    </head>


<body class="border">
    <header class="container-fluid">
            <div class="row d-flex align-items-center justify-content-around">

                <!--Logo -->
                <div class="col-6 col-md-3">
                    <img class="img-fluid" src="resources/img/logo.jpg" alt="Logo" id="logo">
                </div>

                <!--Icones utilisateur et panier -->
                <div class="col-6 col-md-2 order-md-3 d-flex p-0 text-center">
                    <figure class= "mt-3 ml-4 ml-lg-0 mr-2 mr-lg-0">
                    <a href="https://goo.gl/maps/21fXbepTs7dPLHo27" target="_blank"><i class="fas fa-map-marker-alt fa-2x" style="color:#006f86"></i></a>
                    <figcaption class="figure-caption d-none d-lg-inline">Magasin</figcaption> 
                    </figure>
                    <figure class="mt-3 mr-2 mr-lg-0">
                    <i class="far fa-user fa-2x" style="color:#006f86"></i> 
                    <figcaption class="figure-caption d-none d-lg-inline">Compte</figcaption> 
                    </figure>
                    <figure class="mt-3">
                    <i class="fas fa-shopping-cart fa-2x" style="color:#006f86"></i> 
                    <figcaption class="figure-caption d-none d-lg-inline-block">Panier (0)</figcaption> 
                    </figure>
                </div>
                
                <!--Barre de recherche -->
                <div class=" input-group rounded col-11 col-md-5 order-md-2 mt-2 mb-2 mb-lg-0 d-flex">
                    <input class=" d-none d-md-block form-control mr-sm-2 rounded" id="searchBar" type="search" placeholder="Que recherchez-vous ?" aria-label="Search">
                    <button class=" d-none d-md-inline input-group-text border-0" id="search-addon"> <i class="fas fa-search"></i></button>
                </div>  
            </div> 
    </header>
          
       

        

    

    