<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tindog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 17px;" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
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
    <h2 style="text-align: center;font-weight:bold;" class="category">CATEGORIES</h2>
    <h2 style="text-align: center;font-weight:bold;" class="category">DOGS</h2>
    <div class="canvas-wrapper" style="background: linear-gradient(#e66465, #9198e5);">
        <a href="dogs.html" class="canvas">
            <div class="canvas_border">
                <svg>

                </svg>
            </div>
            <div class="canvas_img-wrapper">
                <img class="canvas_img" src="images/golden-retriever-doggallery1.jpg" alt="">
            </div>
            <div class="canvas_copy canvas_copy--left">
                <strong class="canvas_copy_title">Golden</strong>
                <strong class="canvas_copy_title">Retriever</strong>
                <span class="canvas_copy_details">golden-retriever</span>
            </div>
        </a>
    </div>
    <hr>
    <h2 style="text-align: center;font-weight:bold;" class="category">CATS</h2>
    <div class="canvas-wrapper" style="background: linear-gradient(#e66465, #9198e5);">
        <a href="cats.html" class="canvas">
            <div class="canvas_border">
                <svg>

                </svg>
            </div>
            <div class="canvas_img-wrapper">
                <img class="canvas_img" src="images/british-shorthair-2.jpg" alt="">
            </div>
            <div class="canvas_copy canvas_copy--left">
                <strong class="canvas_copy_title">British</strong>
                <strong class="canvas_copy_title">Shorthair</strong>
                <span class="canvas_copy_details">british-shorthair</span>
            </div>
        </a>
    </div>
    <h2 style="text-align: center;font-weight:bold;" class="category">PARROTS</h2>
    <div class="canvas-wrapper" style="background: linear-gradient(#e66465, #9198e5);">
        <a href="parrots.html" class="canvas">
            <div class="canvas_border">
                <svg>

                </svg>
            </div>
            <div class="canvas_img-wrapper">
                <img class="canvas_img" src="images/Australian_King_Parrot_male.jpg" alt="">
            </div>
            <div class="canvas_copy canvas_copy--left">
                <strong class="canvas_copy_title">King</strong>
                <strong class="canvas_copy_title"> Parrots</strong>
                <span class="canvas_copy_details">King Parrot</span>
            </div>
        </a>
    </div>
    <hr>

    <div class="container" style="margin-left: 350px;" id="contact">
        <h3>Contact Form</h3>
        <form action="thanks.php" method="POST" name="contact_form">
            <label for="first_name">First Name</label>
            <input name="first_name" type="text" required placeholder="First Name" />
            <br>
            <label for="last_name">Last Name</label>
            <input name="last_name" type="text" required placeholder="Last Name" />
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
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);margin-top:-48px;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="index.html">Tindog.com</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- SB Forms JS -->

</body>

</html>