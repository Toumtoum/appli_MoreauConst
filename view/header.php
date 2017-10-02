<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="../css/main.css"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body>
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">MOREAU CONST.</a>
          <!--NAVIGATION FOR DESKTOP-->
          <ul class="right hide-on-med-and-down">
            <li><a href="../controller/loginC.php">LOGIN</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">MENU<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
          <!--NAVIGATION FOR MOBILE AND TABLET-->
          <a href="#" data-activates="dropdown2" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>

      </nav>
      <!--CONTENT OF THE DROPDOWN MENU FOR DESKTOP-->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="../controller/homepageC.php">HOME PAGE</a></li>
        <li><a href="#!">PROJECTS</a></li>
      </ul>
      <!--CONTENT OF THE DROPDOWN MENU FOR TABLET AND MOBILE-->
      <ul id="dropdown2" class="side-nav">
        <li><a href="../controller/loginC.php">LOGIN</a></li>
        <li><a href="../controller/homepageC.php">HOME PAGE</a></li>
        <li><a href="#!">PROJECTS</a></li>
      </ul>
