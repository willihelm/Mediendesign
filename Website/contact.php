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
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Search</a></li>
      <li><a href="#">About us</a></li>
      <li class="active"><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

 <div class="container" style="margin-top: 4%;">
            <h1 style="color:black; font-size: 48px;">Kontakt</h1>
          <form action="#" method="POST" role="form">
        <div class="form-group">
          <label for="beispielFeldEmail1" style="color:black">E-Mail-Adresse</label>
          <input type="email" class="form-control" id="beispielFeldEmail1" placeholder="Ihre E-Mail" required>
        </div>
             <textarea class="form-control" rows="5" placeholder="Ihre Nachricht" required></textarea>
        <button type="submit" class="btn btn-default-lg" style=" margin-top: 2%; font-weight:bold;"  >Abschicken <span class="glyphicon glyphicon-ok-sign"></span></button>
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
    </style>
</html>
