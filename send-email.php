
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
        <?php
            $emailType=$_SESSION["emailType"];
            if ($emailType=='newAccount'){
                echo "New Account Created";
            }
            elseif ($emailType=='lostPassword'){
                echo "Your Password has been changed";
            }

        ?>
    </body>
</html>