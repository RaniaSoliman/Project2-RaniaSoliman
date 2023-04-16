
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
    
    </head>

    <style>
        <?php include 'styles.css'; ?>
    </style>


    <body>
        <div id="divLink" >
            <a href="logout.php">Log out</a><br>
        </div>
        <div id="divText">
            <h1>Welcome To Your IT Support System</h1>

            <form method="get" action="problem.php">
            <select name="title" id="title" default="Mr">
                    <option value="Mr">Mr.</option>
                    <option value="Mrs">Mrs.</option>
                </select>    
            <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control">
                <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control">
                <select name="role" id="role" class="form-select" default="Admin">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                </select>
            <input type="submit" name="submit" class="btn-primary" >
        </form>
        </div>

    </body>
</html>