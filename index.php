<!DOCTYPE html>
<html lang="fr">
<head>
   
    <meta charset="UTF-8">
        <style>/*footer*/
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>
    

    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Guadabat</title>
    

</head>

<body>
    <ul>
  <li><a href="index.php">Acceuil</a></li>
  <li><a href="article.php">Article</a></li>
  <li class="drop">
    <a href="#commande" class="commande">Commande</a>
  </li>
  <li><a href="#client">Client</a></li>
</ul><!--nav-->

<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/const1.jpg" alt="travailleur" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/const2.jpg" alt="maison" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/const3.jpg" alt="construction" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Precedent</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>
</div><!--carousel-->





<div class="footer">
  <p>Footer</p>
</div><!--footer-->
</body>
     
</html>