<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>GesundKochen Rezepte Datenbank</title>
    </head>
    <body> 
        <?php
        //include DatabaseHelper.php file
        require_once('DatabaseHelper.php');

        //instantiate DatabaseHelper class
        $database = new DatabaseHelper();

        //Grab variables from POST request
        $RID = '';
        if(isset($_POST['RID'])){
            $RID = $_POST['RID'];
        }
        
        $RTITLE = '';
        if(isset($_POST['RTITLE'])){
            $RTITLE = $_POST['RTITLE'];
        }

        $RDESCRIPTION = '';
        if(isset($_POST['RDESCRIPTION'])){
            $RDESCRIPTION = $_POST['RDESCRIPTION'];
        }

        $RMONTH = '';

        if (isset($_POST['RMONTH'])) {
            $RMONTH = $_POST['RMONTH'];
        }


        // Insert method
        $success = $database->updaterecipe($RID, $RTITLE, $RDESCRIPTION, $RMONTH);

        ?>

        <?php

        if ($RID) {
                if ($success){
                echo "If existed, the recipe with the recipe ID $RID has successfully been changed!'";
            } 


            else{
                echo "Error couldn't change the recipe. Wrong $RID";}
        }


        else {echo "Error! Please enter a recipe ID"; }

        ?>

        <!-- link back to index page-->
        <br>
        <a href="index.php">
            go back
        </a>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>


