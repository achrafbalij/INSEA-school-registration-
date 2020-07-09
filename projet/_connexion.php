<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link ref="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <style>
@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";         
            *
{
    margin: 0;
    padding: 0;
}
/*---body---*/
#nav-bar
{
    position: sticky;
    top: 0;
    z-index: 10;
}
.navbar-brand img
{
    height: 100px;
    padding-left: 30px;
}
.navbar-nav li
{
    padding: 0 10px;
}
.navbar-nav li a
{
    float: right;
    text-align: left;
}
#nav-bar ul li a:hover
{
    color:darkseagreen !important;
}
.navbar
{
    background: #fff;
}
.navbar-toggler
{
    border: none !important;
}
.nav-link
{
    color: #555!important;
    font-weight: 600;
    font-size: 16px;
}
/*----connexion-----*/
body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url(styleImages/adminwall.png) no-repeat;
}
.login-box
{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-10%);
    color: black;
}
.login-box h1
{
    float:none;
    text-align: center;
    font-size: 40x;
    border-bottom: 6px solid;
    margin-bottom: 50px;
    padding: 13px 0;
}
.textbox{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid;
}
.textbox i
{
    width: 26px;
    float: left;
    text-align: center;
}
.textbox input
{
    border: none;
    outline: none;
    background: none;
    color: black;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0 10px;
}
.signin{
    width: 100%;
    background: none;
    border: 2px solid;
    color: black;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
            
        </style>
        
    </head>
    <body>
<!--NavigationBar-->
        <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="styleImages/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="accueil.html">Accueil</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Inscription</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="connexion.php">Connexion</a>
      </li>
    </ul>
  </div>
</nav>
            </section>
<!--login-->
<div class="login-box">
    <form method="post" action="_welcome1.php" enctype="multipart/form-data">
    <h1>Connexion pour l'admin</h1>
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" placeholder="Nom" name="nom" value="" required>
    </div>
    
    <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" placeholder="Mot de passe" name="password" value="" required>
    </div>
        <div><button class="signin" name="submit" type="submit">Se Connecter</button></div></form>
            </div>
    </body>
</html>