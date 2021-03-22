<?php require_once '../header.php';?> 

<div class="container-fluid" >
    <!-- Grande animation commerciale sur Desktop -->
    <div class="row mt-4 animation justify-content-end d-none d-md-flex">
        <h1 class="mr-5 mt-5" style="color:white">Laissez place aux rêves !</h1>
    </div> 

    <!-- Grande animation commerciale sur mobile -->
    <div class="row mt-4 animation-mobile justify-content-end d-flex d-md-none">
        <h1 class="mr-5 mt-2 pl-2" style="color:#303030">Laissez place aux rêves !</h1>
    </div>

    <!-- Petites animations commerciales -->
    <div class="row h-75 mt-4 mb-3 pattern d-flex justify-content-around">

            <figure class= "p-2 col-6 col-md-2  text-center">
                <img class="p-2 img-responsive col-12 col-md-10" src="img/izipizi.jpg" alt="Sophie la giraffe">
                <a href="index.php"><figcaption class="figure-caption d-block bg-white text-left caption">> Protégez bébé du soleil</figcaption> </a>
            </figure>

            <figure class= "p-2 col-6 col-md-2 text-center">
                <img class="p-2 img-responsive col-12 col-md-10" src="img/liberty.png" alt="Sophie la giraffe">
                <a href="index.php"><figcaption class="figure-caption d-block bg-white text-left caption">> La folie du liberty</figcaption></a> 
            </figure>

            <figure class= "p-2 col-6 col-md-2 text-center">
                <img class="p-2 img-responsive col-12 col-md-10" src="img/poupee.jpg" alt="Sophie la giraffe">
                <a href="index.php"><figcaption class="figure-caption d-sblock bg-white text-left caption">> Des poupées pour tout le monde</figcaption></a> 
            </figure>

            <figure class= "p-2 col-6 col-md-2 text-center">
                <img class="p-2 img-responsive col-12 col-md-10" src="img/bebe.jpg" alt="Sophie la giraffe">
                <a href="index.php"><figcaption class="figure-caption d-block bg-white text-left caption">> Préparez l'arrivée de bébé</figcaption></a>
            </figure>
    </div> 


    <!--Nos jolies Marques-->
    <h3 class="mt-4 text-center text-uppercase"> Nos jolies marques </h3>
    <div class="row d-flex justify-content-around mb-3">
            <a class="col-6 col-md-1" href="index.php"><img src="img/sophie.png" alt="Sophie la giraffe"></a>
            <a class="col-6 col-md-1" href="index.php"><img src="img/buggy.png" alt="Mountaine Buggy"></a>
            <a class="col-6 col-md-1" href="index.php"><img src="img/biberon.png" alt="Le biberon français"></a>
            <a class="col-6 col-md-1" href="index.php"><img src="img/kidsme.png" alt="KidsMe"></a>
            <a class="col-6 col-md-1" href="index.php"><img src="img/moulin.png" alt="Moulin Roty"></a>
            <a class="col-6 col-md-1" href="index.php"><img src="img/red.png" alt="Red Castle"></a>
            <a class="col-6 col-md-1" href="index.php"><img src="img/naty.png" alt="Naty"></a>
            <a class="col-6 col-md-1" href="index.php"><img src="img/doudou.png" alt="Doudou"></a>

    </div>
    
    <div class="row justify-content-center mt-4 mb-2">
    <a class="btn btn-secondary btn-lg bouton" href="#" role="button">Voir toutes nos marques</a>
    </div>


</div>

<?php require_once '../footer.php';?>