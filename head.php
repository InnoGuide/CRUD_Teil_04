<?php
   include_once $_SERVER["DOCUMENT_ROOT"].'/app/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/font-awesome/css/font-awesome.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>
<body class="bg-primary">
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="index.php">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="site_user.php">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="site_product.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="site_beides.php">Beides</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">


