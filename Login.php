<!-- Variable per el titol -->
  <?php $page_title = "Login" ?>
    <?php include("top_menu.php"); ?>
    <?php include("header.php"); ?>

<!-- Formulario del login -->
<body>
<div class="container">
  <h2>Login</h2>
  <form action="Index.php" method="post">
    <div class="form-group">
      <label for="email">User:</label>
      <input class="form-control" id="user" placeholder="Enter user" name="user">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Entrar</button>
  </form>
</div>
    <?php include("footer.php"); ?> 
 </body>