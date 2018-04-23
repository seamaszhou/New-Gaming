<!DOCTYPE html>
<html>

<head>
    <?php include 'php_files/head.php'; ?>
</head>

<body>
<?php include 'php_files/nav.php'; ?>
    <div class="login-card">
        <div>
            <h2 class="text-center">Escola Oficina</h2>
        </div><img class="img-fluid profile-img-card" src="assets/img/avatar_2x.png">
        <p class="profile-name-card"> </p>
        <form class="form-signin" action="login.php" method="post"><input class="form-control" type="email" required="" placeholder="Email address" autofocus="" id="inputEmail" name="email"><input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
            <button
                class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login">Login </button>
        </form><a href="#passwordRecuperar.html" class="forgot-password">Need an account?</a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/Filterable-Gallery-with-Lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>
