<?php
include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Secret Diary</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
       <style>
           .navbar-brand{
               font-size: 1.8em;
           }
           
           #topContainer{
               background-image:url("background.jpg");
                background-repeat: no-repeat;
               width: 100%;
               background-size: cover; /*makes the image appear full on the screen*/
           }
           
           #toprow{
               margin-top:100px;
               text-align:center;
               
           }
           
           #toprow h1{
               font-size: 300%;
           }
           
           .bold{
               font-weight: bold;
           }
           
           .marginTop{
               margin-top: 30px; 
           }
           
           .center {
               text-align: center;
           }
           
           .title{
               margin-top: 100px;
               font-size: 300%;
           }
           
           #footer {
               background-color: #B0D1FB;
               padding-top: 70px;
               width: 100%;
           }
           
           .marginBottom{
               margin-bottom: 30px;
           }
           
           .appstoreimage{
               width:250px;
           }
      </style>
      
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
      
      <div class="navbar navbar-inverse navbar-fixed-top">
      
          <div class="container">
          
              <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
            
                  <a class= "navbar-brand">Secret Diary</a>
              </div>
              
              <div class ="collapse navbar-collapse">
        
            
              <form class="navbar-form navbar-right" method="post">
                  
             <div class = "form-group">
            <input type="email" name="loginemail" class = "form-control" id="email" placeholder = "Email" value="<?php echo addslashes($_POST['loginemail']); ?>" />
              </div>
              
              <div class = "form-group">
              <input type="password" class = "form-control" placeholder = "Password"  name="loginpassword" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
              </div>
              <input type = "submit" name="submit" class = "btn btn-success" value="Log In" />
           
            </form>
              </div>
              
          </div>
      </div>
      
      <div class="container contentContainer" id="topContainer" >
      
          <div class="row">
              <div class="col-md-6 col-md-offset-3" id="toprow">
              
                  <h1 class="marginTop">Secret Diary</h1>
                  <p class="lead">Your own private diary with you where ever you go.</p>
                  
                  <?php
                  
                  if($error){
                      
                      echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                  }
                  
                  if($message){
                      
                      echo '<div class="alert alert-success">'.addslashes($message).'</div>';
                  }
                  ?>
                  
                  <p class="bold marginTop">Interested ? Sign Up below!  </p>
                  <form class="marginTop" method ="post">
                  
                    <div class="form-group">
                     <label for="email">Email address</label> 
                      <input type="email" name ="email" class="form-control" placeholder="Email here" value="<? echo addslashes($_POST['email']); ?>"/>
                  </div>
                
                <div class="form-group">
                     <label for="password">Password</label> 
                      <input type="password" name ="password" class="form-control" placeholder="password" value="<? echo addslashes($_POST['password']); ?>"/>
                  </div>
                      
                      <button type="submit" name ="submit" value="Sign Up"  class="btn btn-success btn-lg marginTop">Submit</button>
                  
                  </form>
              </div>
          
          </div>
      </div>
      
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script>
        $(".contentContainer").css("min-height", $(window).height())
      
      </script>
  </body>
</html>

