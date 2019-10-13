<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./Public/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>Native</title>
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="?controller=Page&action=register" class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a href="?controller=Page&action=login" class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->

    <?php
        require_once './Http/Routes/Routes.php';
        $conn = new Routes();
        $conn->route();
    ?>

</body>

</html>