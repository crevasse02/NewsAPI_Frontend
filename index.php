<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>News Test Frontend</title>

    <nav class="navbar navbar-light bg-primary justify-content-between fixed-top mb-4">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php"><img
                    src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/000000/external-news-communication-and-media-flatart-icons-flat-flatarticons.png" />
                News Test API</a>
            <form class="d-flex" id="formId">
                <a class="navbar-brand text-white" href="history.php"><i class="fas fa-history"></i></a>
                <input id="searchInput" class="form-control me-2" placeholder="Search" aria-label="Search">
                <button id="searchBtn" class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </nav>
</head>

<body>
    <div class="container-fluid top-gap">
        <!-- //skeleton -->
        <div class="row mb-3 skeleton">
            <div class="col">
                <div class="card " aria-hidden="true">
                    <div src="..." class="card_image loading placeholder-glow" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title placeholder-glow">
                            <span class="placeholder col-6"></span>
                        </h5>
                        <p class="card-text placeholder-glow">
                            <span class="placeholder col-7"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-4"></span>
                            <span class="placeholder col-6"></span>
                            <span class="placeholder col-8"></span>
                        </p>
                        <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row mb-3">
                    <div class="col news1">
                        <div class="card " aria-hidden="true">
                            <div src="..." class="card_image loading placeholder-glow" alt="..."></div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col news1">
                        <div class="card " aria-hidden="true">
                            <div src="..." class="card_image loading placeholder-glow" alt="..."></div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col news1">
                        <div class="card " aria-hidden="true">
                            <div src="..." class="card_image loading placeholder-glow" alt="..."></div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col news1">
                        <div class="card " aria-hidden="true">
                            <div src="..." class="card_image loading placeholder-glow" alt="..."></div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //non-skeleton -->
        <form action="" method="post" name="form1" id="form1">
            <div class="news_row">
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>


</body>

</html>