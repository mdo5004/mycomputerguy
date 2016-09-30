<?php

    $error = ""; $successMessage = "";
    
    if ($_POST) {
        
        if (!$_POST["name"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "info@mycomputerguy-rochester.com";
            
            $subject = 'I need My Computer Guy!';
            
//            $content = $_POST['needHelpWith']." ".$_POST['bestTime']." ".$_POST['phone'];
            $content = "This is the content";
            
            $headers = "From: michaeldavidoconnell@gmail.com";
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>
<!DOCTYPE html>

<html lang="en">
  
    <head>
    <!-- Required meta tags always come first -->
    
       <meta charset="utf-8">
    
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
  
        <title>My Computer Guy - Personalized computer help for senior citizens</title>
        <style>
            
            body{
                background-color:white;
                color: #6B759F;
                font-family: "American Typewriter", "Courier New", serif;
            }
            #header {
                background-color: rgba(107, 117, 159, 0.42);
/*                margin-top: 78px;*/
                
                text-align: center;
            }
            .navbar{
                font-size: 200%;
                background-color: #6B759F;
            }
            #description{
                text-align: center;
            }
            #carousel-example-generic{
                margin-bottom: 20px;
            }
                            
            .jumbotron{
                text-align: center;
            }
            #logo {
                
                margin: 20px 0px 20px 0px;
                
            }
            #description{
                margin-top: 40px;
                margin-bottom: 40px;
                
            }
/*
            #error {
                position: fixed;
                top:5px;
            }
*/
            
            
            #right-main-bar blockquote{
                font-size: 13px;
            }
            
            #social-bar {
                margin-top:100px;
            }
            
            #imdb-link {
                text-align: center;
                color:#E3B71E;
            }
            #facebook-link {
                color:#3B5998;
                text-align: center;
            }
            #twitter-link {
                color:#00ACED;
                text-align: center;
            }
        
            #footer-2{
                padding: 10px;
            }
            #footer{
                margin-top: 20px;
                background-color: gainsboro;
                min-height: 60px;
                
            }
            #footer-text {
                position: relative;
                vertical-align: middle;
                padding: 20px 10px 10px 10px;
                margin:0 auto;
                
            }
            
            #plansContainer{
                background-color: #ECEEEF;
            }
            #plansContainer h1 {
                text-align: center;
                padding: 20px;
            }
            #pricingInfoButton{
                margin-bottom: 10px;
            }
            
        </style>
    </head>
  
    <body>
<!--
        <nav class="navbar navbar-fixed-top navbar-dark ">
            <div class="container ">
                <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    &#9776;
                  </button>
                  <div class="collapse navbar-toggleable-sm" id="exCollapsingNavbar">
                    <ul class="nav navbar-nav pull-md-right ">
                        <li class="nav-item active">
                            <a class="nav-link" href="ryanomusic.html">home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">about</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
-->
        
        
                
                    
        
        
        <div id="header" class="container-fluid">
            
            
                <div class="col-lg-12 col-centered">
                <img id="logo" class="img-rounded img-responsive" alt="My Computer Guy" src="logo1_blue.png" width="90%">
              </div>
            
        </div>
              
        <div id = "subheader" class = "container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-lg-10 centered">
                    <h1 id="description">Personalized technology help for senior citizens in Rochester, NY</h1>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row">
                
                <div class="col-md-10 offset-md-1">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                          <img src="shutterstock_184856234.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img src="shutterstock_391989016.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img src="shutterstock_159868715.jpg" alt="Third slide">
                        </div>
                      </div>
                      </div>
                </div>
                
            </div>
            </div>
        
        
        
            <div class="container-fluid">
                <div class="jumbotron">
                    <h2 class="display-4">Tired of calling your children for computer help? </h2>
                    <h2 class="display-5">Call us instead.</h2>
                    <hr class="m-y-2">
                    <p class="lead">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" role="button">I need My Computer Guy!</button>
                    </p>
                </div>
            </div>
       
        
        
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-camera-retro fa-lg"></i> Photos </h4>
                        <p class="card-text">Have photos you want to view and share? Would you like to learn how to make the most of your photos?</p> <p>We can help.</p>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Photos help</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-facebook fa-lg"></i> Social Media</h4>
                        <p class="card-text">Would you like to connect with your friends and family but don't know where to begin? Or do you already have a Facebook account, but don't know what to do next?</p>
                        <p>We can help.</p>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Accounts help</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-envelope fa-lg"></i> Email</h4>
                        <p class="card-text">Having trouble getting your emails? Getting lots of spam? Want to learn how to make email simpler? </p>
                        <p>We can help.</p>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Email help</button>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                <div class="card">
                    
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-print fa-lg"></i> Printers, etc. </h4>
                        <p class="card-text">Need help connecting to that printer? Can't connect to the internet?</p> <p>We can help.</p>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Hardware help</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-mobile fa-lg"></i> Smart Phones</h4>
                        <p class="card-text">Smart phone got you confused? Need to update but don't aren't sure if you should? Just need to learn the basics?</p>
                        <p>We can help.</p>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Smart phone help</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title"><i class="fa fa-television fa-lg"></i> Cable TV</h4>
                        <p class="card-text">Having trouble with your cable setup? Can't find your favorite channels? Or just need to get everything plugged in correctly?</p>
                        <p>We can help.</p>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Cable TV help</button>
                    </div>
                </div>
            </div> 
            
            </div>
        </div>
        
        <div id="plansContainer" class="container">
            <h1>Plans and Pricing</h1>
            <div class="row">
                <div class = "col-md-4 offset-md-1">
                <h3>Pay-as-you-go</h3>
                    <p>For just $20/session, have an hour sit-down with your Computer Guy whenever you need help.</p>
                    <p>They will help you with tech questions, help you set up a printer, make a photo album...</p>
                    <p><em>YOU NAME IT!</em></p>
                    
                </div>
            
                <div class = "col-md-4  offset-md-2">
                <h3>Subscription service</h3>
                    <p>For $100/month, have weekly sessions with your Computer Guy, on your schedule.</p>
                    <p>Plus, you get your Computer Guy's <b>personal email address</b> for on-demand help, whenever you need it.</p>
                    <p><em>Great value!</em></p>
                </div>
                <div class="row">
                    <div id="pricingInfoButton" class="col-md-4 offset-md-4">
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" role="button">Request pricing information</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div id="error"><? echo $error.$successMessage; ?></div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">I need My Computer Guy!</h4>
                    </div>
                    <div class="modal-body">
                        
                        <form method="post">
                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Last name, first name" name="name">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your info with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone1">Phone number</label>
                                <input type="phone" class="form-control" id="exampleInputPhone1" aria-describedby="phoneHelp" placeholder="Enter phone" name="phone">
                                
                            </div>
                            <div class="form-group">
                                <label for="bestTimeToReach">When can we reach you?</label>
                                <textarea class="form-control" id="bestTimeToReach" rows="3" name="bestTime"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="whatsTheIssue">What do you need help with?</label>
                                <textarea class="form-control" id="whatsTheIssue" rows="6" name="needHelpWith"></textarea>
                            </div>
                            
                        

                    
                    <div class="modal-footer">
                        <button type="submit" id="submit" data-toggle="modal" data-target="modal" class="btn btn-primary">Request Information</button>
                        <small>Please allow one to two business days for a response. </small>
                        
                    </div>
                        </form>
                        </div>
                    <div id="footer-2">
                        <h2>Or try the old-fashioned way!</h2>
                        <p>Call us at 585 310 4GUY<br>or email us at info@mycomputerguy-rochester.com</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div id="footer" class="container-fluid">
            
            <p id="footer-text">&copy; Michael David O'Connell, Rochester NY. All rights reserved.</p>
            
        
        </div>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
  
        <script type="text/javascript">
        
        $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#exampleInputEmail1").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#exampleInputName1").val() == "") {
                  
                  error += "The name field is required.<br>"
                  
              }
              
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
        
        
        </script>
    </body>
</html>