<!DOCTYPE html>
<html>
<head>
  <title>Adimin panel</title>
         <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Advanced CMS</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Main</a></li>
        <li><a href="/news/news.php">News</a></li>
      </ul>    
              <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="">Sign in/Sign up</a></li>
      </ul>  
    </div>
  </div>
</nav>
<div class="container">
 <div class="row">
<center>
<form action="" method="post"> 
<p>Login</p> 
<input type="text" name="user_name1" value=""> 
<p>Password</p> 
<input type="password" name="user_pass1" value=""><br /><br /> 
<input class="btn btn-success" type="submit" name="login_button" value="Login"> 
<br /><br />
<a href="register-page.php">Not yet registered?</a>
</form> 
</center>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
</body>
</html>
<?
include_once 'adminpanel.php';
?>