<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="login" method="post" class="login active" autocomplete="off">
            @csrf
            <?php
            if ($message == "") {
            } else {
                echo '<script type="text/javascript">';
                echo 'swal({
              title: '.$message.',
              text: "Try again!",
              icon: "error",
              button: "Try Again",
            });';  //not showing an alert box.
                echo '</script>';
            }
            ?>
            <h2 class="title"><b>IOT</b>-Gateway</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" id="email" name="user_email" placeholder="Email address">
                    <i class='bx bx-envelope'></i>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" pattern=".{8,}" id="password" name="password" placeholder="Your password">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <span class="help-text">At least 8 characters</span>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
            </div>
            <button type="submit" class="btn-submit" name="LoginButton">Login</button>
            <a href="#">Forgot password?</a>
            <!-- <p>I don't have an account. <a href="register">Register</a></p> -->
        </form>

    </div>

</body>

</html>