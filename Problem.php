<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Halifax Canoe and Kayak">
        <meta name="description" content="Information about upcoming adventures">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halifax Canoe and Kayak</title>
        <link rel="icon" type="image/png" href="CanoelogoBlue.png">
        <!-- jquery library reference -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    </head>

    <style>
        <?php include 'styles.css'; ?>
    </style>


    <body>
        <div id="divLink" >
            <a href="logout.php">Log out</a><br>
        </div>
        <?php
        
            $title=$_GET["title"];
            $fname=trim($_GET["fname"]);
            $lname=trim($_GET["lname"]);
            $role=trim($_GET["role"]);
            echo  '<h1 id="hRole">';
            echo 'Hello '.$title.'.&nbsp'.$fname.'&nbsp'.$lname;
            echo '</h1>';
            echo '<hr>';
            echo '<h2>Here are your options:</h2>';

            echo '<a href="isnt-working.php">';
            echo "My computer isn't working";
            echo '</a>';
            echo '<br><br>';

            if ($role=="Admin"){

                echo '<a href="new-account.php">';
                echo "Create New Account";
                echo '</a>';
      
            }
            elseif ($role=="Manager"){

                echo '<a href="lost-password.php">';
                echo "Reset My Password";
                echo '</a>';
     
            }
            elseif ($role=="CEO"){
                echo '<a href="need-help.php">';
                echo "Contact Technical Support";
                echo '</a>';
            }
            
            
        ?>
        </body>
</html>