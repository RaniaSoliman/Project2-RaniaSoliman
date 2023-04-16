<?php 
	session_start();
?>


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
            $_SESSION["emailType"] = "newAccount";
        ?>

        <div id="divLink" >
            <a href="logout.php">Log out</a><br>
        </div>
        <div>
            <h2 id="hRole">Create a New Account</h2>
            <form method="post" action="send-email.php">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" id="email" placeholder="abcd@gmail.com" class="form-control">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <input type="submit" name="submit" class="btn-primary" >
            
            </form>
        </div>

    </body>
</html>