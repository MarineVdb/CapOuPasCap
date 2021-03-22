<?php require_once 'inscription_verif.php';
require_once 'connexion_verif.php';
require_once '../header.php';?> 


<!-- DESK -->
<div class="row col-12 d-none d-md-flex">
    <div class="container col-6">
        <?php require 'inscription.php';?> 
    </div>
    <div class="container col-6 d-flex align-items-center">
        <?php require 'connexion.php';?> 
    </div>
</div>


<!-- MOBILE (Accordéon)-->
<div class="bs-example d-md-none col-12">
<?php require 'connexion.php' ;?>

    <div class="panel-group " id="accordion">

          <div class="panel panel-default">

            <div class="panel-heading d-flex justify-content-center bg-light" onclick='chevron()'>
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="text-decoration:none; color:#303030"  >
                <h3 class=" text-center col-6 d-inline pb-1"> Inscription </h3>
                <span class="col-6" id="chevron"><i class="fas fa-chevron-down fa-2x pt-1" style="color:#303030"></i></span>
              </a>
              
            </div>

            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                  <?php require 'inscription.php';?>
              </div>
            </div>
          </div>
        
    </div>

</div>

<?php require_once '../footer.php';?>