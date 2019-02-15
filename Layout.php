<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>LIGUE M2L</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>

  <body class="">
    <link href="../style.css" rel="stylesheet">
      <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="accueilController">LIGUE M2L</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">SPORT <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CLUB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=Preference">MES PREFERENCE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=Flux">ARTICLES RESSENTS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TRIER PAR</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">DATE</a>
                <a class="dropdown-item" href="#">CLUB</a>
                <a class="dropdown-item" href="#">Sport</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" >Search</button>
          </form>
          <?php if (isset($_SESSION['connect'])){ ?>
            <a href="?p=Logout" class="btn btn-outline-success my-2 my-sm-0">
              <span class="glyphicon glyphicon-log-out">Logout</span>
            </a>
          <?php } else { ?>
                    <a href="?p=Login" class="btn btn-outline-success my-2 my-sm-0">
                      <span class="glyphicon glyphicon-log-out">Login</span>
                    </a>
                  <?php } ?>
        </div>
      </nav>

        <?php
            echo $content;
        ?>
        <footer>
            copyright
        </footer>
    </body>
<html>
