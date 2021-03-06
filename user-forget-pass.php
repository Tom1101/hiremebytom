<?php
session_start();
if (isset($_SESSION['id_user']) && isset($_SESSION['username'])) {
    header('location:homepage.php');
};
if(isset($_GET['error'])){
    echo '<div class="alert alert-warning" role="alert"><strong>Warning!</strong> Please check your email. </div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Forget password</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/thejobs.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700'
          rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="icon" href="assets/img/favicon.ico">
</head>

<body class="login-page">


<main>

    <div class="login-block">
        <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
        <h1>Request password reset</h1>

        <form method="POST" action="user-password-reset.php">

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="ti-email"></i></span>
                    <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Request reset link</button>
        </form>
    </div>

    <div class="login-links">
        <p class="text-center"><a href="user-login.php">Back to login</a></p>
    </div>

</main>


<!-- Scripts -->
<script src="assets/js/app.min.js"></script>
<script src="assets/js/thejobs.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
