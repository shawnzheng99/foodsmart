<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style/indexstyle.css">
	<title>Food Smart</title>
</head>
<body>
    <img src="./pic/background.jpg" class="background">
    <div id="whole">
    <h1>Food Smart</h1>
    <div class="container">
        <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR'])>0 ) {
        echo '<ul class="err">';
        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
        echo '<li>',$msg,'</li>';
        }
        echo '</ul>';
        unset($_SESSION['ERRMSG_ARR']);
        }
        ?>
    <form method="post" action=login.php>
        <input type="text" name="username" class="username" placeholder="Username">
        <br><br>
        <input type="text" name="password" class="password" placeholder="Password">
        <br><br>
    <div class="row">
        <button type="submit" class="btn btn-info">Sign in</button><br><br>
        <p class="or">Or<br><br>
            <a href="register_form.php" class="btn btn-info">Register</a>
    </div>
    </form>

    </div>
</div>
    
  
    