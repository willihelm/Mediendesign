<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smartbits</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="theme.css" rel="stylesheet">
</head>
<body background="pic.jpg">

<!--Navbar oben-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Smartbits Logo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Suche</a></li>
      <li><a href="#">Über uns</a></li>
      <li><a href="contact.php">Kontakt</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Registrieren</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>




<!--Navbar Links-->
  <div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#">Configuration</a>
  <ul class="nav navbar-nav">
   
   <li><a href="#">Body</a></li>
   <li><a href="#">Display</a></li>
   <li><a href="#">Battery</a></li>
   <li><a href="#">Speed</a></li>
    <li><a href="#">Camera</a></li>
    <li><a href="#">Network</a></li>
      <li><a href="#">Storage</a></li>
      <li><a href="#">Audio</a></li>
      <li><a href="#">Other</a></li>
  </ul>
</div>
    



</body>
 <footer class="footer">
      <div class="container" >
        <p class="text-muted">Footer...</p>
      </div>
     
    </footer>

<!--CSS    -->
<style>
.footer {
position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 40px;
  background-color: black;
 left: 0;
 right: 0;
    }
    
.navbar-fixed-left {
  width: 150px;
  position: fixed;
  border-radius: 20;
  height: 100%;
}

.navbar-fixed-left .navbar-nav > li {
  float: none;  /* Cancel default li float: left */
  width: 139px;
}

.navbar-fixed-left + .container {
  padding-left: 160px;
}

/* On using dropdown menu (To right shift popuped) */
.navbar-fixed-left .navbar-nav > li > .dropdown-menu {
  margin-top: -50px;
  margin-left: 140px;
    

}
</style>

</html>
