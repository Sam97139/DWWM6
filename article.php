<!DOCTYPE html>
<html>
<head>



<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    
    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}/*footer*/
</style>
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



<h2>Articles</h2>


<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="article">Article</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Designation...">
    </div>
  </div>
   <form>
  Quantité (Minimum 1 Max 300):
  <input type="number" name="quantité" min="1" max="300">
</form> 
     <div class="row">
    <div class="col-25">
      <label for="unité">Unité</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="M²">M²</option>
        <option value="Kg">Kg</option>
        <option value="Mètre">Mètre</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Commentaires</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Inscrire vos remarques ici..." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>


<div class="footer">
  <p>Footer</p>
</div><!--footer-->


<link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
