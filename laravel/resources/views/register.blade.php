<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/login.css">
</head>

<body>
    <div class="container">
        <form action="register" method="post" class="register active" autocomplete="off">
        @csrf
            <?php
            if ($message == "") {
            } else {
                echo '<script type="text/javascript">';
                echo 'swal({
              title: "Error",
              text: ' . $message . ',
              icon: "error",
              button: "Try Again",
            });';  //not showing an alert box.
                echo '</script>';
            }
            ?>
            <h2 class="title">Register your account</h2>
            <div class="form-group">
                <label for="name">Full Name</label>
                <div class="input-group">
                    <input type="text" id="fullName" name="fullName" placeholder="Full Name">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Email address">
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
                <label for="confirm-pass">Confirm password</label>
                <div class="input-group">
                    <input type="password" id="confirm-pass" placeholder="Enter password again">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <span class="help-text">Confirm password must be same with password</span>
            </div>
            <button type="submit" class="btn-submit" name="RegisterButton">Register</button>
            <p>I already have an account. <a href="login">Login</a></p>
        </form>
    </div>

    <script src="dist/js/register.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>