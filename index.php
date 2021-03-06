
<html>
    <title>
        RC visuals
    </title>
    <link rel="icon" href="images/rc.jpg" type="image/icon type">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js" ></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/style.css" > 
    <style>
    h5.te{
        text-align: justify;
    }
    </style>
<body>
    <header>
    <nav class="navbar navbar-dark  navbar-expand-sm ">
    <div class="container pr-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php">
            <img src="images/rc visual.png"  class="img-fluid float-left row-3" height="120px" width="100px">  
        </a>           
        <div class="collapse navbar-collapse" id="Navbar">     
            <ul class="navbar-nav mr-auto pl-md-4">
                <li class="nav-item  active pl-md-2"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg "></span> Home</a></li>
                <li class="nav-item pl-md-3"><a class="nav-link" href="html files/Storys.php"><span class="fa fa-book fa-lg"></span> Storys</a></li>
                <li class="nav-item pl-md-3"><a class="nav-link" href="html files/Feedback.html"><span class="fa fa-list fa-lg"></span> Feedback</a></li>
                <li class="nav-item pl-md-3"><a class="nav-link" href="html files/about.html"><span class="fa fa-address-card fa-lg"></span> About me</a></li>
            </ul>    
        </div>
    <button class="btn btn-warning btn-lg " data-toggle="modal" data-target="#login"><span class="fa fa-sign-in fa-lg"></span>Login</button>

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Sign in</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form class="m-4" method="POST" action="login/loggedin.php">
                    <div class="form-group row offset-md-2">
                        <label for="name" class="col-xs-2  col-form-label"><h5>Username:</h5></label>
                        <div class="">
                          <input type="text" name="username"  class="form-control border-dark  " placeholder="enter username" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row offset-md-2">
                        <label for="story" class="col-xs-2 offset-xs-1 col-form-label"><h5>Password:</h5></label>
                        <div class="col-xs-9">
                          <input type="password" name="password"  class="form-control border-dark " placeholder="enter password" id="staticEmail" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary " value="Login">
                    </div>
                </form>
            </div>
            
        </div>
        </div>
    </div>
    </div>
    </nav>                
    </header>

    <div class="container">
        <div class="row  pt-3">
            <h3 class="pl-4">Recently added storys</h3>
        </div>
    </div>
        <div class="container">
        <?php
        include "login/config.php";
        $update = "SELECT * FROM (
            SELECT * FROM script ORDER BY id DESC LIMIT 3
          ) as r ORDER BY id";
        
        $agri = $con->query($update);
        if ($agri->num_rows > 0){
        while ($row = $agri->fetch_assoc() ) {
            echo '<div class=" col-12 card border-dark" >
                  <div class="card-body">
                    
                    <h5 class="card-title te">script name:- '.$row['script'].'</h5>
                    <h5 class="card-text te" name="test">genre:- '.$row['genre'].'</h5>
                    
                    <h5 class="offset-md-10  card-text">Date:- '.$row['date'].'</h5>
                    <a href="login/dataview.php?id='.$row["id"].'" class="btn btn-primary">Click here</a>
                    </form>
                </div>
                  </div>
                   <div class="m-4"></div>';
        }
        }
        ?>
        </div>


        
    
    
    
    
        
    
    
    <footer class="footer">
        <br>
            <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-dark"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="html files/Storys.php" class="text-dark"><span class="fa fa-book">  Storys</span></a></li>
                        <li><a href="html files/Feedback.html" class="text-dark"><span class="fa fa-list">  Feedback</span></a></li>
                        <li><a href="html files/about.html" class="text-dark"><span class="fa fa-address-card"> About me</span></a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Contact Me</h5>
                    <address> 
                        <a href="mailto:confusion@food.net">confusion@food.net</a>
                    </address>
                    <h5 >Developer</h5>
                    <h6>ravi</h6>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <h5 class="offset-4">Social links</h5>
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-instagram" href="http://www.instagram.com/in/"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        
            <div class="row justify-content-center">             
                <div class="col-auto pt-2">
                    <h6>© Copyright Sai kiran</h6>
                </div>
            </div>
        </div>
        
    </footer>
</body>
<script>
  function submit() {
  var newdat = document.getElementByName("test");

  document.getElementById("myform").submit();
}  
</script>
</html>
