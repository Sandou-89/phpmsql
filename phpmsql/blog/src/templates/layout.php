<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ready</title>

    <!-- Feuilles de style externes -->
    <link rel="stylesheet" href="css/normalize-3.0.3.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Feuilles de style de l'application -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <!-- En-tête commune de l'application -->
<nav class="navbar navbar-light bg-danger">
  <a class="navbar-brand mb-0 h1 pro text-light" href="index.php">Ready</a>
  <a class="navbar-brand mb-0 h1 text-light" href="admin.php">Administration</a>
</nav>

    <main>
        <!-- Chargement du template PHTML spécifié par le programme PHP -->
        <?php include 'templates/'.$template.'.php' ?>
    </main>

    <!-- Pied de page commun de l'application -->
  <footer class="py-5 bg-transparent">
    <div class="container">
      <p class="m-0 text-center text-black">Copyright &copy; Ready 2020</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>