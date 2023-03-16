<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../src/css/loginView.css">
    <title>Gestion de visite</title>

</head>

<!-- particles.js container -->
<body id="particles-js"></body>

<div class="animated bounceInDown">
    <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form name="Login" class="box" onsubmit="return checkStuff()" action="../controller/user_controller.php" method="post">
            <h4>Gestion de<span> Visite</span></h4>
            <h5>Sign in to your account.</h5>

            <input type="text" name="login" placeholder="login" autocomplete="on">

            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="password" placeholder="Passsword" autocomplete="off">

            <input type="submit" value="Sign in" class="btn1" name="cnx"">
        </form>
    </div>

</div>

<!-- partial -->
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
<script  src="../../src/js/loginView.js"></script>

</html>