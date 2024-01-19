<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="{{ asset('css/custom.css') }}">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>""</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <img src="img/logo.png" alt="Icon" class="logo-image">
            <a class="navbar-brand me-auto" href="#">DOWNSHIFT SUPPLY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">DOWNSHIFT SUPPLY</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="cart-link nav-link mx-lg-2" href="#">Shopping Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="profile-link nav-link mx-lg-2" href="#">User Profile</a>
                        </li>

                    </ul>
                </div>
            </div>
            <a class="nav-link mx-lg-2" href="#">
                <img src="img/cart.png" alt="Icon" class="cart-image">
            </a>
            <div class="nav-item dropdown">
                <a class="nav-link mx-lg-2" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="img/profile.jpg" alt="Icon" class="profile-image">
                </a>
            </div>
    </nav>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>