<head>
  <?php 
  session_start();
    if(isset($_POST['user'])){
        $_SESSION['user']=$_POST['user'];
    }
?>
  <!-- Aqui creem el menu en el head -->
     <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/dam/Formulari2/Index.php">Practica 107</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/dam/Formulari2/Index.php">Index</a></li>
      <li><a href="http://localhost/dam/Formulari2/Pagina1.php">Pagina1</a></li>
      <li><a href="http://localhost/dam/Formulari2/Pagina2.php">Pagina2</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
      <li>
        <?php
            if (!empty($_SESSION['user']) && ($_SESSION['user']<>'')){

              echo "<li> <a href='#'>". $_SESSION['user']. "</a></li>";

              }else{

              echo "<a>User is not log in </a>";
             
            }

            if (empty($_SESSION['user'])){
              echo "<li> <a href='http://localhost/dam/Formulari2/Login.php'>Login</a></li>";
               

            }
            else{
              echo "<li> <a href='http://localhost/dam/Formulari2/Logout.php'> Log out</a></li>";
            }
          ?>
    </ul>
  </div>
</nav>
 </head>