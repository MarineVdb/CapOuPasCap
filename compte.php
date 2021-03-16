<?php include 'inscription_verif.php';
include 'connexion_verif.php';
include 'header.php';?> 


<!-- DESK -->
<div class="row col-12 d-none d-md-flex">
    <div class="container col-6">
        <?php include 'inscription.php';?> 
    </div>
    <div class="container col-6 d-flex align-items-center">
        <?php include 'connexion.php';?> 
    </div>
</div>


<!-- MOBILE (Accordéon)-->
<div class="bs-example d-md-none col-12">
<?php include('connexion.php');?>

    <div class="panel-group " id="accordion">

          <div class="panel panel-default">

            <div class="panel-heading d-flex justify-content-center bg-light">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="text-decoration:none; color:#303030">
              <h3 class=" text-center col-6 d-inline pb-1"> Inscription </h3>
              <span class="col-6"><i class="fas fa-chevron-down fa-2x pt-1" style="color:#303030"></i></span>
            </a>
              
            </div>

            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                  <?php include('inscription.php');?>
              </div>
            </div>
          </div>
        
    </div>

</div>

<?php include 'footer.php';?>