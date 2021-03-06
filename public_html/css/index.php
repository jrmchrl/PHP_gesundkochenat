<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="Charlotte Jeroma" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>GesundKochen Rezepte Datenbank</title>
    </head>
    <body>
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
        $recipe_array = $database->selectFromRecipeWhere($RID, $RTITLE, $RDESCRIPTION, $RMONTH);
        ?>
        
        <br>
        <h1>GesundKochen Rezepte Datenbank</h1>

        <!-- Add Recipe -->
        <h2>Rezept hinzufügen: </h2>
        <form method="post" action="addRecipe.php">
            <!-- Person ID is not needed, because its autogenerated by the database -->

            <!-- Name textbox -->
            <div>
                <label for="new_RTITLE">Rezept:</label>
                <input id="new_RTITLE" name="RTITLE" type="text" maxlength="20">
            </div>
            <br>

            <!-- Surname textbox -->
            <div>
                <label for="new_RDESCRIPTION">Beschreibung:</label>
                <input id="new_RDESCRIPTION" name="RDESCRIPTION" type="text" maxlength="500">
            </div>
            <br>
            
            <!-- month textbox -->
            <div>
                <label for="new_RMONTH">Monat:</label>
                <input id="new_RMONTH" name="RMONTH" type="text" maxlength="255">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button type="submit">
                    Rezept hinzufügen
                </button>
            </div>
        </form>
        <br>
        <hr>

        <!-- Delete Recipe -->
        <h2>Rezept entfernen: (not implemented) </h2>
        <form method="post" action="delRecipe.php">
            <!-- ID textbox -->
            <div>
                <label for="del_name">ID:</label>
                <input id="del_name" name="RID" type="number" min="0">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button type="submit">
                    Rezept entfernen
                </button>
            </div>
        </form>
        <br>
        <hr>

        <!-- Search form -->
        <h2>Rezept Suche:</h2>
        <form method="get">
            <!-- ID textbox:-->
            <div>
                <label for="RID">ID:</label>
                <input id="RID" name="RID" type="number" value='<?php echo $RID; ?>' min="0">
            </div>
            <br>

            <!-- RTITLE textbox:-->
            <div>
                <label for="RTITLE">Rezept:</label>
                <input id="RTITLE" name="RTITLE" type="text"  class="form-control input-md" value='<?php echo $RTITLE; ?>' maxlength="20">
            </div>
            <br>

            <!-- RDESCRIPTION textbox:-->
            <div>
                <label for="RDESCRIPTION">Beschreibung:</label>
                <input id="RDESCRIPTION" name="RDESCRIPTION" type="text" value='<?php echo $RDESCRIPTION; ?>' maxlength="500">
            </div>
            <br>
            
            <!-- RDESCRIPTION textbox:-->
            <div>
                <label for="RMONTH">Monat:</label>
                <input id="RMONTH" name="RMONTH" type="text" value='<?php echo $RMONTH; ?>' maxlength="255">
            </div>
            <br>
         
            <!-- Submit button -->
            <div>
                <button id='submit' type='submit'>
                    Suche
                </button>
            </div>
        </form>
        <br>
        <hr>
        
        <!-- Search result -->
        <h2>Resultat der Rezeptsuche:</h2>
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

        <!-- ///////////////////////////////////////////// RECIPE HAS INGREDIENTS ///////////////////////////////////////////// -->
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
        
        <!-- Add Amount -->
        <h2>Mengenangaben hinzufügen: </h2>
        <form method="post" action="addamount.php">
            <!-- Person ID is not needed, because its autogenerated by the database -->
            
            <!-- RID textbox -->
            <div>
                <label>Rezept ID:</label>
                <select id="new_RID">
                    <option value='<?php echo $RID; ?>'>ID</option>
                </select>                    
            </div>
            <br>
            
            <!-- IINGREDIENTNAME textbox -->
            <div>
                <label for="new_IINGREDIENTNAME">Zutat:</label>
                <input id="new_IINGREDIENTNAME" name="IINGREDIENTNAME" type="text" maxlength="255">
            </div>
            <br>
            


            <!-- Surname textbox -->
            <div>
                <label for="new_INGAMOUNT">Menge:</label>
                <input id="new_INGAMOUNT" name="INGAMOUNT" type="number" min="0">
            </div>
            <br>
            
            <!-- month textbox -->
            <div>
                <label for="new_INGUNIT">Einheit:</label>
                <input id="new_INGUNIT" name="INGUNIT" type="text" maxlength="10">
            </div>
            <br>

            <!-- Submit button -->
            <div>
                <button type="submit">
                    Mengenangaben hinzufügen
                </button>
            </div>
        </form>
        <br>
        <hr>
        
        
        <!-- Add has result -->
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
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>