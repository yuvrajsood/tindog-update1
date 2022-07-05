<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="css/about.css">
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
                    <a class="navbar-brand" href="#"><img src="images/Untitled_design-removebg-preview.png" alt="" style="width: 100px;margin-top: -35px;"></a>
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
                    <img src="images/golden-retriever.jpg" alt="golden retriever" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/austrailianshepherd.jpg" alt="Austrailian shepherd" style="width:100%;">
                </div>

                <div class="item">
                    <img src="images/inushibha.jpg" alt="Inushibha" style="width:100%;">
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
        <h1 class="start" style="margin-left: 50px;">
            <span class="end1">Our</span><span class="middle1">Directo</span>
            <span class="middle2"><i class="fas fa-code"></i></span><span class="end2">r</span>
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <img src="images/YuvrajSood.jpeg" alt="yuvraj" width="100%">
                </div>
                <div class="col-sm-4">
                    <h2 style="font-weight: bold;font-size:45px;">Mr. Yuvraj Sood</h2>
                    <h4 style="margin-top: 50px;font-size:30px;">QUALIFICATIONS:-</h4>
                    <ul>
                        <li style="font-size: 25px;">Web Developer</li>
                        <li style="font-size: 25px;">Badminton</li>
                        <li style="font-size: 25px;">Table Tennis</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="container" style="margin-left: 370px;" id="contact">
            <h3>Contact Form</h3>
            <form action="thanks.php" method="POST" name="contact_form">
                <label for="first_name">First Name</label>
                <input name="first_name" type="text" required placeholder="John" />
                <br>
                <label for="last_name">Last Name</label>
                <input name="last_name" type="text" required placeholder="Doe" />
                <br>
                <label for="email">Email</label>
                <input name="email" type="email" required placeholder="you@domain.com" />
                <br>
                <label for="message">Message</label><br>
                <textarea name="message" cols="30" rows="10" placeholder="Enter your message here ..." required> </textarea>
                <div class="center">
                    <input type="reset" value="Reset" name="reset">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="index.html">Tindog.com</a>
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
</body>

</html>