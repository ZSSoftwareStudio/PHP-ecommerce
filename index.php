<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .blog-footer {
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: center;
            color: white;
            background-color: brown;
            font-size: 15px;
        }

        .blog-footer a {
            color: white;
            font-size: 18px;
        }

        .blog-footer a:hover {
            color: rgb(18, 236, 236);
            font-size: 18px;
            text-decoration: none;
        }

        .blog-footer li {
            display: inline;
        }

        .bg-chocolate {
            background-color: #ee7752;
        }

        .col-sm-4 {
            background-color: brown;
        }

        .col-sm-4:hover {
            background-color: rgb(255, 77, 77);
        }
    </style>
    <title>Zarif's Organic Shop</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Zarif's Organic Shop</a>
        <form class="form-inline" action="search.php" method="post">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <br>
    <section class="page-section">
        <h1 class="text-center text-uppercase font-weight-bold">Welcome to Zarif's Organic Shop</h1>
        <br />
        <div class="container" style="min-height: 40rem; padding-bottom: 20px;">
            <div class="row" style="margin-top: 20px">
                <?php
                    include('Config.php');
                    $sql = "SELECT * FROM `products`";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)){
                        echo '
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem;margin-top: 30px;">
                                <img src="'. $row["link"] .'" class="card-img-top" alt="..." style="height: 14rem"/>
                                <div class="card-body">
                                    <h5 class="card-title">'.$row["title"].'</h5>
                                    <p class="card-text"> $'.$row["price"].'</p>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                            <br/><br/>
                        </div>
                        ';
                    }
                ?>

            </div>
        </div>
        <br><br><br>
        <div class="blog-footer bg-dark text-white">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <p>
                        <b>Powered By </b>
                        <br />
                        <br />
                        <i>
                            <li class="nav-link">
                                <a target="blank" href="https://php.net">
                                    PHP & MySQL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                                </a>
                            </li>
                            <li class="nav-link">
                                <a target="blank" href="https://getbootstrap.com">
                                    Bootstrap&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                                </a>
                            </li>
                        </i>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <b>Developed&nbsp;&nbsp;By </b>
                        <i>
                            <a target="blank" href="https://github.com/ZarifSoftware">
                                &nbsp;ZarifSoftware
                            </a>
                        </i>
                        <br />
                        <b>&nbsp; © <?php echo Date("Y")?> &nbsp;</b>
                        <i>
                            <a target="blank" href="https://github.com/ZarifSoftware">
                                ZarifSoftware
                            </a>
                        </i>
                    </p>
                </div>
                <div class="col-sm-4">
                    <p>
                        <b class="text-center">Owner</b>&nbsp;&nbsp; <br />
                        <i>
                            <a href="index.php">&nbsp;Zarif's Organic Shop</a>
                        </i>
                        <br />
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
