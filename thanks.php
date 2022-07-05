<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tindog";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if(isset($_POST['submit']))
{
	 $first_name	 = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $message = $_POST['message'];
	 $sql = "INSERT INTO contact (first_name,last_name,email,message)
	 VALUES ('$first_name','$last_name','$email','$message')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</header>
<br>
<br>
<br>
	<img src="images/THANK.png" alt="thank" width="50%" style="margin-top: 100px;margin-left: 500px;">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="index.php">Tindog.com</a>
    </div>
    <!-- Copyright -->
    </footer>
</body>
</html>
