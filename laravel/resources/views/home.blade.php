<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="dist/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar sticky-top navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand">IOT Gateway</a>
            <form class="d-flex">
                <!-- <div class="dropdown-menu">
                    <a class="btn btn-info dropdown-item" href="login">Login</a>
                </div> -->

                <!-- <div class="dropdown show">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="btn btn-info dropdown-item" href="login">Admin Login</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->

                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-duotone fa-user"></i> <b>Login</b>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                    <a class="btn btn-info dropdown-item" href="login">Admin Login</a>
                    <a class="btn btn-info dropdown-item" href="">User Login</a>
                    </div>
                </div>

                

            </form>
        </div>
    </nav>
    <div class="main-div">
        <img class="background-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/221808/sky.jpg" alt="" style="height:100vh;">
        <p>Wellcome<br>Lorem ipsum dolor sit.</p>
    </div>

    <div class="about">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Animi nemo itaque optio ab, at assumenda quam id, magni voluptate placeat earum,
            obcaecati minima distinctio veritatis deleniti aliquam corporis vel doloribus molestias culpa quibusdam corrupti?</p>
    </div>

    <div class="containe overflow-hidden">
        <img class="bg-2" src="https://png.pngtree.com/background/20210710/original/pngtree-blue-technology-background-material-picture-image_967134.jpg" alt="">
        <div class="d-flex justify-content-evenly">
            <div class="flex-shrink-0">
                <div class="border bg-light"><img src="https://wallpaperaccess.com/full/1966480.jpg" alt=""></div>
            </div>
            <div class="flex-shrink-0">
                <div class="border bg-light"><img src="https://wallpaperaccess.com/full/2086790.jpg" alt=""></div>
            </div>
        </div>
    </div>

    <div class="about">
        <h1>Our Service</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Animi nemo itaque optio ab, at assumenda quam id, magni voluptate placeat earum,
            obcaecati minima distinctio veritatis deleniti aliquam corporis vel doloribus molestias culpa quibusdam corrupti?</p>
    </div>

    <footer>
        <div class="footer">
            <div class="c-about">
                <h3>Connect</h3>
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> DG Block, Newtown, West Bengal
                </p>
            </div>

            <div class="c-about">
                <h3>Social</h3>
                <div class="social">
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-twitter-square"></i>
                    <i class="fa fa-linkedin-square"></i>
                    <i class="fa fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="footer-menu">

                <a href="">Home</a>
                <a href="">F.A.Q</a>
                <a href="">Cookies Policy</a>
                <a href="">Terms Of Service</a>
                <a href="">Support</a>

            </div>
            <p>Copyright SubhadiMandal&copy; 2023</p>
        </div>

    </footer>
</body>

</html>