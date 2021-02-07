<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="Charlotte Jeroma" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>GesundKochen Rezepte Datenbank</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">GesundKochen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rezepte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Unsere Philosophie</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Suche" aria-label="Suche">
        <button class="btn btn-outline-light" type="submit">Suche</button>
      </form>
    </div>
  </nav>
    </header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#a6a6a6"/></svg>
        <div class="overlay-image" style="background-image:url(./header1.png);"></div>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Für Deine Gesundheit.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Anmelden</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#a6a6a6"/></svg>
        <div class="overlay-image" style="background-image:url(./header6.png);"></div>
        <div class="container">
          <div class="carousel-caption">
            <h1>Für Deine Umwelt.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Erfahre mehr</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#a6a6a6"/></svg>
        <div class="overlay-image" style="background-image:url(./header3.png);"></div>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Mehr Zeit zum runterkommen.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Mehr Rezepte hier</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <div class="rounded-circle-img" style="background-image:url(./roundedcircle3.png);"></div>
        <h2>Hörst Du was?</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Lesen &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <div class="rounded-circle-img" style="background-image:url(./roundedcircle2.png);"></div>
        <h2>Ayurveda & Achtsamkeit</h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Lesen &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <div class="rounded-circle-img" style="background-image:url(./roundedcircle1.png);"></div>
        <h2>CO² Fußabdruck Deiner Küche</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Lesen &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <!-- ///////////////////////////////////////////// RECIPE ///////////////////////////////////////////// -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Rezept hinzufügen. <span class="text-muted">Welche Küche fügen wir heute hinzu?</span></h2>
        <p class="lead">In diesem Abschnitt kannst Du Rezepte hinzufügen. Hierzu gehört der Titel des Rezeptes, die Beschreibung und der Monat. Mit der zusätzlichen Klassifizierung "Monat", kann ein Rezept möglichst günstig und CO² neutral gekocht werden. Denn dann sind die Lebensmittel Deines Rezeptes in genau diesem Monat und in Deiner Region reif.</p>
      </div>
      <div class="col-md-5">
      <div class="featurette-image" style="background-image:url(./functions1.png);"></div>
      </div>
    </div>

    <?php
        // Include DatabaseHelper.php file
        require_once('DatabaseHelper.php');

        // Instantiate DatabaseHelper class
        $database = new DatabaseHelper();

        // Get parameter 'person_id', 'surname' and 'name' from GET Request
        // Btw. you can see the parameters in the URL if they are set
        $RID = '';
        if (isset($_GET['RID'])) {
            $RID = $_GET['RID'];
        }

        $RTITLE = '';
        if (isset($_GET['RTITLE'])) {
            $RTITLE = $_GET['RTITLE'];
        }

        $RDESCRIPTION = '';
        if (isset($_GET['RDESCRIPTION'])) {
            $RDESCRIPTION = $_GET['RDESCRIPTION'];
        }

        $RMONTH = '';
        if (isset($_GET['RMONTH'])) {
            $RMONTH = $_GET['RMONTH'];
        }

        //Fetch data from database
        $recipe_array = $database->SELECTFROMRECIPEWHERE($RID, $RTITLE, $RDESCRIPTION, $RMONTH);
        ?>


        <!-- ///////////////////////////////////////////// ADD RECIPE ///////////////////////////////////////////// -->

        <h2>Rezept hinzufügen </h2>
        <form method="post" action="addRecipe.php">
            <!-- Person ID is not needed, because its autogenerated by the database -->

            <!-- Name textbox -->
            <div>
                <label for="new_RTITLE">Rezept </label><br>
                <input id="new_RTITLE" name="RTITLE" type="text" class="form-control" maxlength="20">
            </div>
            <br>

            <!-- Surname textbox -->
            <div>
                <label for="new_RDESCRIPTION">Beschreibung </label><br>
                <textarea id="new_RDESCRIPTION" name="RDESCRIPTION" type="text" class="form-control" rows="3" value='<?php echo $RDESCRIPTION; ?>' maxlength="500"></textarea>
            </div>
            <br>

            <!-- month textbox -->
            <div>
                <label for="new_RMONTH">Monat </label><br>
                <input id="new_RMONTH" name="RMONTH" type="text" class="form-control" maxlength="255">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button class="btn btn-secondary" type="submit">
                    Hinzufügen
                </button>
            </div>
        </form>
        <br>

        <!-- ///////////////////////////////////////////// DELETE RECIPE ///////////////////////////////////////////// -->

        <h2>Rezept entfernen </h2>
        <form method="post" action="delRecipe.php">
            <!-- ID textbox -->
            <div>
                <label for="del_name">ID </label><br>
                <input id="del_name" name="RID" type="number" class="form-control" value='<?php echo $RID; ?>' min="0">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button class="btn btn-secondary" type="submit">
                    Entfernen
                </button>
            </div>
        </form>
        <br>


        <!-- ///////////////////////////////////////////// UPDATE RECIPE ///////////////////////////////////////////// -->

        <h2>Aktualisierung von Rezepten</h2>

        <form method="post" action="updaterecipe.php">

            <!-- ID textbox -->
            <div>
                <label for="RID">Rezept ID</label> <br>
                <input id="RID" name="RID" type="number" class="form-control" min="0">
            </div>
            <br>

            <!-- RTITLE textbox -->
            <div>
                <label for="RTITLE">Rezept</label><br>
                <input id="RTITLE" name="RTITLE" type="text" class="form-control" maxlength="20">
            </div>
            <br>

            <!-- RDESCRIPTION textbox -->
            <div>
                <label for="RDESCRIPTION">Beschreibung</label><br>
                <textarea id="RDESCRIPTION" name="RDESCRIPTION" type="text" class="form-control" rows="3" maxlength="500"></textarea>
            </div>
            <br>

            <!-- RMONTH textbox -->
            <div>
                <label for="RMONTH">Monat</label><br>
                <input id="RMONTH" name="RMONTH" type="text" class="form-control" maxlength="255">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button type="submit" class="btn btn-secondary">
                        Aktualisieren
                </button>
            </div>
            <br>
        </form>
        <br>
    <hr>

        <!-- ///////////////////////////////////////////// SEARCH RECIPE ///////////////////////////////////////////// -->

        <h2>Rezept Suche</h2>
        <form method="GET">
            <!-- ID textbox:-->
            <div>
                <label for="RID">ID</label>
                <input id="RID" name="RID" type="number" class="form-control" value='<?php echo $RID; ?>' min="0">
            </div>
            <br>

            <!-- RTITLE textbox:-->
            <div>
                <label for="RTITLE">Rezept</label>
                <input id="RTITLE" name="RTITLE" type="text"  class="form-control" value='<?php echo $RTITLE; ?>' maxlength="20">
            </div>
            <br>

            <!-- RDESCRIPTION textbox:-->
            <div>
                <label for="RDESCRIPTION">Beschreibung</label>
                <textarea id="RDESCRIPTION" name="RDESCRIPTION" type="text" class="form-control" rows="3" value='<?php echo $RDESCRIPTION; ?>' maxlength="500"></textarea>
            </div>
            <br>

            <!-- RDESCRIPTION textbox:-->
            <div>
                <label for="RMONTH">Monat</label>
                <input id="RMONTH" name="RMONTH" type="text" class="form-control" value='<?php echo $RMONTH; ?>' maxlength="255">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button id='submit' class="btn btn-secondary" type='submit'>
                    Suche
                </button>
            </div>
        </form>
        <br>

        <h2>Resultat der Rezeptsuche</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Rezept</th>
                <th>Beschreibung</th>
                <th>Monat</th>
            </tr>
            <?php foreach ($recipe_array as $recipe) : ?>
                <tr>
                    <td><?php echo $recipe['RID']; ?>  </td>
                    <td><?php echo $recipe['RTITLE']; ?>  </td>
                    <td><?php echo $recipe['RDESCRIPTION']; ?>  </td>
                    <td><?php echo $recipe['RMONTH']; ?>  </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>

    <hr class="featurette-divider">

    <!-- ///////////////////////////////////////////// INGREDIENTS ///////////////////////////////////////////// -->

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading">Zutaten. <span class="text-muted">Welche Zutat brauchst Du für Dein Rezept?</span></h2>
        <p class="lead">Welche brauchst Du für Dein Rezept? Bitte fügen den Namen der Zutat, den Typ (z.B. Getreide oder Milchprodukt) und die Art und Weise der Zubereitung (z.B. Zwiebel würfeln) der Zutat hinzu.</p>
      </div>
      <div class="col-md-6 order-md-1">
      <div class="featurette-image" style="background-image:url(./functions2.png);"></div>
      </div>
    </div>

    <?php
        // Include DatabaseHelper.php file
        require_once('DatabaseHelper.php');

        // Instantiate DatabaseHelper class
        $database = new DatabaseHelper();

        // Get parameter 'person_id', 'surname' and 'name' from GET Request
        // Btw. you can see the parameters in the URL if they are set
        $IINGREDIENTNAME = '';
        if (isset($_GET['IINGREDIENTNAME'])) {
            $IINGREDIENTNAME = $_GET['IINGREDIENTNAME'];
        }

        $IINGREDIENTTYPE = '';
        if (isset($_GET['IINGREDIENTTYPE'])) {
            $IINGREDIENTTYPE = $_GET['IINGREDIENTTYPE'];
        }

        $IPREP = '';
        if (isset($_GET['IPREP'])) {
            $IPREP = $_GET['IPREP'];
        }

        //Fetch data from database
        $ingredients_array = $database->SELECTFROMINGREDIENTSWHERE($IINGREDIENTNAME, $IINGREDIENTTYPE, $IPREP);
        ?>


        <!-- ///////////////////////////////////////////// SEARCH INGREDIENTS ///////////////////////////////////////////// -->

        <h2>Lebensmittelsuche</h2>
        <form method="GET">
            <!-- IINGREDIENTNAME textbox:-->
            <div>
                <label for="IINGREDIENTNAME">Name</label>
                <input id="IINGREDIENTNAME" name="IINGREDIENTNAME" type="text" class="form-control" value='<?php echo $IINGREDIENTNAME; ?>' maxlength="255">
            </div>
            <br>

            <!-- IINGREDIENTTYPE textbox:-->
            <div>
                <label for="IINGREDIENTTYPE">Typ</label>
                <input id="IINGREDIENTTYPE" name="IINGREDIENTTYPE" type="text"  class="form-control" value='<?php echo $IINGREDIENTTYPE; ?>' maxlength="255">
            </div>
            <br>

            <!-- IPREP textbox:-->
            <div>
                <label for="IPREP">Beschreibung</label>
                <textarea id="IPREP" name="IPREP" type="text" class="form-control" rows="3" value='<?php echo $IPREP; ?>' maxlength="500"></textarea>
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button id='submit' class="btn btn-secondary" type='submit'>
                    Suche
                </button>
            </div>
        </form>
        <br>

        <h2>Resultate der Lebensmittelsuche</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Typ</th>
                <th>Zubereitung</th>
            </tr>
            <?php foreach ($ingredients_array as $ingredients) : ?>
                <tr>
                    <td><?php echo $ingredients['IINGREDIENTNAME']; ?>  </td>
                    <td><?php echo $ingredients['IINGREDIENTTYPE']; ?>  </td>
                    <td><?php echo $ingredients['IPREP']; ?>  </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>

        <!-- ///////////////////////////////////////////// ADD INGREDIENTS /////////////////////////////////////////////
        <h2>Zutat hinzufügen </h2>
        <form method="post" action="addingredients.php">
            <!-- Person ID is not needed, because its autogenerated by the database

            <!-- Name textbox
            <div>
                <label for="new_IINGREDIENTNAME">Zutat </label><br>
                <input id="new_IINGREDIENTNAME" name="IINGREDIENTNAME" type="text" class="form-control" maxlength="255">
            </div>
            <br>

            <!-- Surname textbox
            <div>
                <label for="new_IINGREDIENTTYPE">Typus </label><br>
                <input id="new_IINGREDIENTTYPE" name="IINGREDIENTTYPE" type="text" class="form-control" maxlength="500">
            </div>
            <br>

            <!-- month textbox
            <div>
                <label for="new_IPREP">Zubereitungstipps </label><br>
                <textarea id="new_IPREP" name="IPREP" type="text" class="form-control" rows="3" value='<?php echo $IPREP; ?>' maxlength="500"></textarea>
            </div>
            <br>

            <!-- Submit button
            <div>
                <button class="btn btn-secondary" type="submit">
                    Hinzufügen
                </button>
            </div>
        </form>
        <br>
        -->

    <hr class="featurette-divider">


    <!-- ///////////////////////////////////////////// RECIPE HAS INGREDIENTS ///////////////////////////////////////////// -->

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Mengenangaben. <span class="text-muted">Wie viel brauchst Du von jeder Zutat?</span></h2>
        <p class="lead">Suche die Mengenangaben zu deinen ausgewählten Rezepten.</p>
      </div>
      <div class="col-md-5">
       <div class="featurette-image" style="background-image:url(./functions3.png);"></div>
      </div>
    </div>


        <?php
        // Include DatabaseHelper.php file
        require_once('DatabaseHelper.php');

        // Instantiate DatabaseHelper class
        $database = new DatabaseHelper();

        // Get parameter 'person_id', 'surname' and 'name' from GET Request
        // Btw. you can see the parameters in the URL if they are set
        $RID = '';
        if (isset($_GET['RID'])) {
            $RID = $_GET['RID'];
        }

        $IINGREDIENTNAME = '';
        if (isset($_GET['IINGREDIENTNAME'])) {
            $IINGREDIENTNAME = $_GET['IINGREDIENTNAME'];
        }

        $INGAMOUNT = '';
        if (isset($_GET['INGAMOUNT'])) {
            $INGAMOUNT = $_GET['INGAMOUNT'];
        }

        $INGUNIT = '';
        if (isset($_GET['INGUNIT'])) {
            $INGUNIT = $_GET['INGUNIT'];
        }

        //Fetch data from database
        $has_array = $database->selectFromHasWhere($RID, $IINGREDIENTNAME, $INGAMOUNT, $INGUNIT);
        ?>


        <!-- ///////////////////////////////////////////// ADD AMOUNT /////////////////////////////////////////////
        <h2>Mengenangaben hinzufügen </h2>
        <form method="post" action="addamount.php">
            <!-- Person ID is not needed, because its autogenerated by the database

            <!-- RID textbox
            <div>
                <label>Rezept ID</label><br>
                <select id="new_RID">
                    <option value='<?php echo $RID; ?>'>ID</option>
                </select>
            </div>
            <br>

            <!-- IINGREDIENTNAME textbox
            <div>
                <label for="new_IINGREDIENTNAME">Zutat</label>
                <input id="new_IINGREDIENTNAME" name="IINGREDIENTNAME" type="text" class="form-control" maxlength="255">
            </div>
            <br>

            <!-- Surname textbox
            <div>
                <label for="new_INGAMOUNT">Menge</label>
                <input id="new_INGAMOUNT" name="INGAMOUNT" type="number" class="form-control" min="0">
            </div>
            <br>

            <!-- month textbox
            <div>
                <label for="new_INGUNIT">Einheit</label>
                <input id="new_INGUNIT" name="INGUNIT" type="text" class="form-control" maxlength="10">
            </div>
            <br>

            <!-- Submit button
            <div>
                <button type="submit" class="btn btn-secondary">
                    Mengenangaben hinzufügen
                </button>
            </div>
        </form>
        <br>
        <hr>
        -->

        <!-- ///////////////////////////////////////////// SEARCH INGREDIENTS ///////////////////////////////////////////// -->

        <h2>Mengenangabensuche</h2>
        <form method="GET">
            <!-- IINGREDIENTNAME textbox:-->
            <div>
                <label for="RID">Rezept ID</label>
                <input id="RID" name="RID" type="number" class="form-control" value='<?php echo $RID; ?>' min="0">
            </div>
            <br>

            <!-- IINGREDIENTTYPE textbox:-->
            <div>
                <label for="IINGREDIENTNAME">Name</label>
                <input id="IINGREDIENTNAME" name="IINGREDIENTNAME" type="text"  class="form-control" value='<?php echo $IINGREDIENTNAME; ?>' maxlength="255">
            </div>
            <br>

            <!-- IPREP textbox:-->
            <div>
                <label for="INGAMOUNT">Mengenangabe</label>
                <input id="INGAMOUNT" name="INGAMOUNT" type="number" class="form-control" value='<?php echo $IPREP; ?>' min="0">
            </div>
            <br>

             <!-- IPREP textbox:-->
            <div>
                <label for="INGUNIT">Einheit</label>
                <input id="INGUNIT" name="INGUNIT" type="text" class="form-control" value='<?php echo $INGUNIT; ?>' maxlength="10">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button id='submit' class="btn btn-secondary" type='submit'>
                    Suche
                </button>
            </div>
        </form>
        <br>


        <!-- ///////////////////////////////////////////// RESULT OF AMOUNTS ///////////////////////////////////////////// -->
        <h2>Resultat der Mengenangaben:</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Zutat</th>
                <th>Mengenangabe</th>
                <th>Einheit</th>
            </tr>
            <?php foreach ($has_array as $has) : ?>
                <tr>
                    <td><?php echo $has['RID']; ?>  </td>
                    <td><?php echo $has['IINGREDIENTNAME']; ?>  </td>
                    <td><?php echo $has['INGAMOUNT']; ?>  </td>
                    <td><?php echo $has['INGUNIT']; ?>  </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>

    <hr class="featurette-divider">


    <!-- ///////////////////////////////////////////// AYURVEDIC INGREDIENTS ///////////////////////////////////////////// -->

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading">Ayurvedische Lebensmittel. <span class="text-muted">Welcher Konstitutionstyp verträgt Deine Zutaten am besten?</span></h2>
        <p class="lead">In der 5000 Jahre alten Indischen Medizin Ayurveda gibt es drei Konstitutionstypen (Pita, Kapha und Vata). Bitte gebe den Konstitutionstyp, das Kürzel Ayurv, sowie die Philosophie deiner ayurvedischen Zutaten an.</p>
      </div>
      <div class="col-md-6 order-md-1">
      <div class="featurette-image" style="background-image:url(./functions4.png);"></div>
      </div>
    </div>

    <?php
        // Include DatabaseHelper.php file
        require_once('DatabaseHelper.php');

        // Instantiate DatabaseHelper class
        $database = new DatabaseHelper();

        // Get parameter 'person_id', 'surname' and 'name' from GET Request
        // Btw. you can see the parameters in the URL if they are set
        $IINGREDIENTNAME = '';
        if (isset($_GET['IINGREDIENTNAME'])) {
            $IINGREDIENTNAME = $_GET['IINGREDIENTNAME'];
        }

        $AAYURVDIETACRONYM = '';
        if (isset($_GET['AAYURVDIETACRONYM'])) {
            $AAYURVDIETACRONYM = $_GET['AAYURVDIETACRONYM'];
        }

        $AAYURVPHILOSOPHY = '';
        if (isset($_GET['AAYURVPHILOSOPHY'])) {
            $AAYURVPHILOSOPHY = $_GET['AAYURVPHILOSOPHY'];
        }

        $ADOSHA = '';
        if (isset($_GET['ADOSHA'])) {
            $ADOSHA = $_GET['ADOSHA'];
        }

        //Fetch data from database
        $ayurv_array = $database->selectFromAyurvWhere($IINGREDIENTNAME, $AAYURVDIETACRONYM, $AAYURVPHILOSOPHY, $ADOSHA);
        ?>


        <!-- ///////////////////////////////////////////// SEARCH AYURVEDIC INGREDIENTS ///////////////////////////////////////////// -->

        <h2>Ayurvedische Lebensmittel</h2>
        <form method="GET">
            <!-- IINGREDIENTNAME textbox:-->
            <div>
                <label for="IINGREDIENTNAME">Name</label>
                <input id="IINGREDIENTNAME" name="IINGREDIENTNAME" type="text" class="form-control" value='<?php echo $IINGREDIENTNAME; ?>' maxlength="255">
            </div>
            <br>

            <!-- AAYURVDIETACRONYM textbox:-->
            <div>
                <label for="AAYURVDIETACRONYM">Kürzel</label>
                <input id="AAYURVDIETACRONYM" name="AAYURVDIETACRONYM" type="text"  class="form-control" value='<?php echo $AAYURVDIETACRONYM; ?>' maxlength="255">
            </div>
            <br>

                <!-- AAYURVPHILOSOPHY textbox:-->
            <div>
                <label for="AAYURVPHILOSOPHY">Philoshopie</label>
                <textarea id="AAYURVPHILOSOPHY" name="AAYURVPHILOSOPHY" type="text" rows="3"  class="form-control" value='<?php echo $AAYURVPHILOSOPHY; ?>' maxlength="500"></textarea>
            </div>
            <br>

             <!-- IINGREDIENTTYPE textbox:-->
            <div>
                <label for="ADOSHA">Konstitutionstyp</label>
                <input id="ADOSHA" name="ADOSHA" type="text"  class="form-control" value='<?php echo $ADOSHA; ?>' maxlength="255">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button id='submit' class="btn btn-secondary" type='submit'>
                    Suche
                </button>
            </div>
        </form>
        <br>

        <h2>Resultate ayurvedische Lebensmittel</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Kürzel</th>
                <th>Philoshopie</th>
                <th>Konstitutionstyp</th>
            </tr>
            <?php foreach ($ayurv_array as $ayurvingredients) : ?>
                <tr>
                    <td><?php echo $ayurvingredients['IINGREDIENTNAME']; ?>  </td>
                    <td><?php echo $ayurvingredients['AAYURVDIETACRONYM']; ?>  </td>
                    <td><?php echo $ayurvingredients['AAYURVPHILOSOPHY']; ?>  </td>
                    <td><?php echo $ayurvingredients['ADOSHA']; ?>  </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>

        <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="./bootstrap.bundle.min.js"></script>
</html>
