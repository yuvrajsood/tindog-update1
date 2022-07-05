<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dogs.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                    <a class="navbar-brand" href="#">Tindog</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" style="font-size: 17px;">HOME <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" style="font-size: 17px;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="dogs.php" style="font-size: 17px;">DOGS</a></li>
                                <li><a href="cats.php" style="font-size: 17px;">CATS</a></li>
                                <li><a href="parrots.php" style="font-size: 17px;">PARROTS</a></li>
                            </ul>
                        </li>
                        <li><a href="about.php" style="font-size: 17px;">ABOUT US</a></li>
                        <li><a href="#contact" style="font-size: 17px;">CONTACT US</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php" style="font-size: 17px;">SIGN UP</a></li>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/African-grey-parrots.jpg" alt="cat1" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/Australian_King_Parrot_male.jpg" alt="cat2" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/blue-and-yellow-macaw-1.jpg" alt="cat3" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        <br>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="animate-charcter">PARROTS</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/Peach-Faced-Lovebird.jpg" />
                            <p class="desc">Peach Faced Lovebird</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/Scarlet-Macaw-2.jpg" />
                            <p class="desc">Scarlet Macaw</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/Superb Parrot.jpg" />
                            <p class="desc">Superb Parrot</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/kea_parrot.jpg" />
                            <p class="desc">Kea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/Blue-crown.jpg" />
                            <p class="desc">Blue Crown</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/Eclectus.jpg" />
                            <p class="desc">Eclectus</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/Double Eyed Fig Parrot.jpg" />
                            <p class="desc">Double Eyed Fig Parrot</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="cardholder">
                        <div class="card">
                            <img src="images/Burrowing Parakeet.jpg" />
                            <p class="desc">Burrowing Parakeet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="index.html">Tindog.com</a>
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
</body>

</html>