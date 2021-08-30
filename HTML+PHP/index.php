<?php 
    $con=mysqli_connect('localhost','root', '' ,'registration') or die(mysqli_error($con));
    $name = $_POST['name'];
    $mailID = $_POST['mailID'];
    $btn = $_POST['btn'];

    $sqlinsert="INSERT INTO details (name, mailID, btn) VALUES ('$name', '$mailID', '$btn')";
    
    if(!mysqli_query($con,$sqlinsert))
    {
        die('error');
    }
    //$newrec="1 rec added";
?>

<html>
<head>
    <title>REGISTER</title>
    <!-- Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg">                                                          <!--HEADER-->
        <div class="header">
            <a href="#AboutInnerve">
                <img src="logo.png" class="logo" color="white">              <!--HEADER: LOGO-->
            </a>
            <nav>
                <div class="header-link">
                    <a href="#about"><mark>ABOUT INNERVE</mark></a>         <!--HEADER: NAV: ABOUT INNERVE-->
                </div>                                                  
                <div class="header-link">
                    <a href="#events"><mark>EVENTS</mark></a>               <!--HEADER: NAV: EVENTS-->
                </div>
            </nav>

           <h1><center>COMING SOON: INNERVE'21</center></h1>                <!--HEADER: TITLE-->

        </div>
    </div>
    
    <h1><center>.....</center></h1>

    <div class="container">                                         <!--REGISTRATION FORM-->
        <div class="col-xs-4">
                <div class="panel panel-primary" id="mypanel">
                    <div class="panel-heading" >
                         <h4>REGISTRATION FORM</h4>
                    </div>

                    <div class="panel-body">
                        <form method="post" action="index.php" >
                            <div class="form-group">
                                <label for="name">FULL NAME</label><br>                <!--NAME INPUT-->
                                <input type="name" class="form-control" name="name" placeholder="Enter your name">
                            </div>

                            <div class="form-group">
                                <label for="mailID">MAIL ID</label>                   <!--MAIL ID INPUT-->
                                <input type="email" class="form-control" name="mailID" placeholder="xyz@gmail.com">
                            </div>

                            <div class="form-group">
                                <label for="btn">ARE YOU IGDTUW'S STUDENT</label><br>       <!--UNIV STUDENT CHECK-->
                                        <input type="radio" name="btn" value="Y" checked>YES<br>
                                        <input type="radio" name="btn" value="N">NO 
                            </div>
    
                            <div>
                                <button class="btn btn-primary">SUBMIT</button>             <!--SUBMTI BUTTON-->
                            </div>   
                       </form>
                    </div>
                </div>  
        </div>
    </div>

    <div class="container">                             <!--CHATBOT-->
        <img class="robo image" src="robot1.png">
        <div class="overlay">
            <div class="text">CHATBOT!</div>
        </div>
    </div>
 
    <footer>                                            <!--FOOTER-->
        <div class="container">
            <center>
                <p>Created By Innerve IGDTUW © 2021 All rights reserved | Contact Us: +91 99999 99999</p>
            </center>
        </div>
    </footer>

</body>
</html>
