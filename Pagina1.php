    <!-- Variable per el titol -->
    <?php include("top_menu.php"); ?>
    <?php $page_title = "Pagina1" ?>
    <?php include("header.php"); ?>
    <?php 
      // Programacion del formulari

    $nom = $cognom = $codi = "";
    $nom = isset($_POST["Nom"]) ? $_POST["Nom"]:"";
    $cognom = isset($_POST["Cognoms"]) ? $_POST["Cognoms"]:"";
    $codi = isset($_POST["Codi"]) ? $_POST["Codi"]:"";
     ?>
 <body> 
  <!-- Pagina 1 -->
    <div class="container">
  <h2>Client</h2>
  <form action="Pagina2.php" method="post">
    <div class="form-group">
      <label for="Nom">Nom:</label>
      <input class="form-control" id="Nom" placeholder="Entrar Nom" name="Nom" value="<?php echo $nom;?>">
    </div>
    <div class="form-group">
      <label for="Cognoms">Cognoms:</label>
      <input class="form-control" id="Cognoms" placeholder="Entrar Cognoms" name="Cognoms" value="<?php echo $cognom;?>">
    </div>
    <div class="form-group">
      <label for="Codi">Codi client:</label>
      <input class="form-control" id="Codi" placeholder="Entrar Codi client" name="Codi" value="<?php echo $codi;?>">
    </div>
    </div>
    <center>
    <button type="submit" class="btn btn-default">Entrar</button></center>
  </form>
  </div>
    <?php include("footer.php"); ?> 
 </body>


