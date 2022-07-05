<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">

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
                            <ul class="dropdown-menu" style="font-size: 17px;">
                                <li><a href="dogs.php">DOGS</a></li>
                                <li><a href="cats.php">CATS</a></li>
                                <li><a href="parrots.php">PARROTS</a></li>
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


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/golden-retriever.jpg" alt="golden-retriever" width="100%;">
                </div>
                <div class="item">
                    <img src="images/cat.jpg" alt="..." width="100%">
                </div>
                <div class="item">
                    <img src="images/parrot.jpg" alt="..." width="100%;">
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>
    <br>
    <hr>
    <form method="post" action="signedup.php">
        <div class="formContainer">
            <h1 style="text-align: center;">Sign Up Form</h1>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <label for="repeatPassword"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="repeatPassword" required>
            <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom: 15px"> Remember me
        </label>
            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>
                <p>
                    <div>
                        <button type="button" name="reset" class="cancel">Cancel</button>
                        <button type="submit" name="submit" class="signup">Sign Up</button>
                    </div>
        </div>
    </form>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);margin-top:-20px;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="index.html">Tindog.com</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>