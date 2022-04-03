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
                <a class="navbar-brand text-white" href="index.php"><i class="fas fa-house"></i></a>
        </div>
    </nav>
</head>

<body>
<div class="container-fluid top-gap">
    <div class="h1 text-center pb-4">Riwayat Berita</div>
        <!-- //skeleton -->
        <div class="row mb-3 skeleton">
            <?php  
                include_once("config.php");
                // Fetch all users data from database
                $result = mysqli_query($mysqli, "SELECT * FROM history_news ORDER BY id DESC");
                while($user_data = mysqli_fetch_array($result)) {        
                    echo "<div class='col'>";
                    echo "<div class='card' aria-hidden='true'>";
                        echo "<div class='card hoverable'>";
                            echo "<img class='card-img-top' src='".$user_data['image']."' alt='Card image cap'>";
                        echo "<div class='card-body'>
                                <h4 class='card-title'>".$user_data['title']."</h4>
                                <a href='".$user_data['url']."' class='btn btn-primary mt-auto'>Read More</a>
                            </div>
                            </div>
                        </div>
                    </div>";     
                }
            ?>
        </div>
    </div>
</body>