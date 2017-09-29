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

        <!-- LOG IN AREA -->
        <div class="row log">
          <h5>LOG IN</h5><hr>
            <form action="../controller/loginC.php" method="post" class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Name" id="name" type="text" name="name" class="validate">
                  <label for="first_name">NAME</label>
                </div>
                <div class="input-field col s12">
                  <input placeholder="Password" id="password" type="password" name="pass" class="validate">
                  <label for="last_name">PASSWORD</label>
                </div>
              </div>
              <input class="waves-effect waves-light btn" type="submit" value="LOG IN">
            </form>
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>

    </body>
</html>
