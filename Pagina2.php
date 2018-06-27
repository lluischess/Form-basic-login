  <!-- Variable per el titol -->
  <?php $page_title = "Pagina2" ?>
    <?php include("top_menu.php"); ?>
    <?php include("header.php"); ?>
    <?php 
      // Programacion del rebut de les dades del formuari
    // Include la class
    include("clClient.php");
    $cliente = new cliente();
    $nom = $cognom = $codi = "";
    if (empty($_POST["Nom"])){
        $nom = "";
        $cliente->setnom($nom);
        }
        else{
           $cliente->setnom($_POST["Nom"]);
        }
    
    if (empty($_POST["Cognoms"])){
        $cognom = "";
        $cliente->setcognom($cognom);
        }
        else{
            $cliente->setcognom($_POST["Cognoms"]);
        }
    
    if (empty($_POST["Codi"])){
        $codi = "";
        $cliente->setcodi($codi);
        }
        else{
             $cliente->setcodi($_POST["Codi"]);
     }

     ?>
 <body>
     <div class="container">
  <h2 class="">Client: <?php echo  $cliente->getcodi();?></h2>
  <form action="Pagina1.php" method="post">
    <div class="form-group">
      <label for="Nom">Nom:</label>
      <input class="form-control" id="Nom2" name="Nom" value="<?php echo  $cliente->getnom();?>" readonly>
    </div>
    <div class="form-group">
      <label for="Cognoms">Cognoms:</label>
      <input class="form-control" id="Cognoms2" name="Cognoms" value="<?php echo  $cliente->getcognom();?>" readonly>
    </div>
    <div class="form-group">
      <label for="Codi">Codi client:</label>
      <input class="form-control" id="Codi2" name="Codi" value="<?php echo  $cliente->getcodi();?>" readonly>
    </div>
    </div>
    <center>
    <button type="submit" class="btn btn-default">Editar</button></center>
  </form>
  </div>
    <?php include("footer.php"); ?> 
 </body>


