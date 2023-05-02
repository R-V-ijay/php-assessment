<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand fs-1 fw-bold text-uppercase text-white" href="#">Dictio<span
                        class="text-warning">n</span>ary</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="btn btn-primary" aria-current="page" href="./assets/php/login_page.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="ms-3 btn btn-warning" href="./assets/php/register_page.php">Register</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="searchArea">
        <div class="text-center">
            <h1 class="fs-1 text-center text-warning mb-5"> Search Word Here</h1>
            <input type="text" class="p-3 w-50 mb-4 form-control m-auto fs-3">
            <button class="w-25 btn btn-warning fw-bold p-2">Search</button>
        </div>
    </main>



    <script src="./assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>