<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./style/indexstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Register</title>
</head>
    <h1>Food Smart</h1>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>';
    }
    echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>
<body>
    <form method="post" action="register.php">
      <input type="text" name="username" class="username" placeholder="Username">
      <br><br>
      <input type="text" name="password" class="password" placeholder="Password">
      <br><br>
      <input type="text" name="password" class="password" placeholder="Conform password">
      <br><br>
      <input type="text" name="username" class="username" placeholder="Family Size(optional)">
      <br><br>
      <input type="text" name="password" class="password" placeholder="Email">
      <br><br>

        <div class="row">
            <button type="submit" class="btn btn-info">Submit</button><br><br>
            <a href="index.php" class="btn btn-info">Cancel</a>
        </div>
    </form>
</body>
</html>