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

        //Grab variable id from POST request
        $RID = '';
        if(isset($_POST['RID'])){
            $RID = $_POST['RID'];
        }

        // Delete method
        $error_code = $database->deleteRecipe( $RID);

        // Check result
        if ($error_code == 1){
            echo "Recipe with ID: '{$RID}' successfully deleted!'";
        }
        else{
            echo "Error can't delete Recipe with ID: '{$RID}'. Errorcode: {$error_code}";
        }
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