<!DOCTYPE html>
<html>
<head>
 <title>My Website</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <?php
include("data.php")
 ?>
</head>
<body>
 <header>
  <h1>FIND THE RIGHT CAR</h1>
 </header>
 <nav>
  <ul>
   <li><a href="#">Home</a></li>
   <li><a href="#">About</a></li>
   <li><a href="#">Services</a></li>
   <li><a href="#">Contact</a></li>
  </ul>
 </nav>
 <main>
    <img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/107543/vitara-brezza-2022-exterior-right-front-three-quarter.jpeg" width="150" alt="">
    <img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/141115/creta-exterior-right-front-three-quarter.jpeg" width="150" alt="">
    <img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/140809/innova-crysta-exterior-right-front-three-quarter.png" width="150" alt="">
    <img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/144681/virtus-exterior-right-front-three-quarter.jpeg" width="150" alt="">
    <img src="https://imgd.aeplcdn.com/1056x594/n/cw/ec/47030/new-a3-exterior-right-front-three-quarter-6.jpeg" width="150" alt="">
<button class="btn_more"><a href="https://www.carwale.com/">More</a></button>
 </main>
 <footer>
  <p>&copy; 2023 Website</p>
 </footer>
</body>
</html>
<style>
header {
display: flex;
justify-content: center;
 background-color: gray;
 color: white;
 padding: 20px;
 position: relative;
}
.btn_more a{
    text-decoration: none;
    list-style-type: none;
    color: white;

}

.btn_more{
    width: 120px;
    height: 40px;
    background-color: gray;
    color: black;
    border: 0;
    text-decoration: none;
    list-style-type: none;
    position: absolute;
    right: 200px;
    top: 235px;

}

nav {
 background-color: gray;
 color: white;
 padding: 10px;
}

nav ul {
 list-style-type: none;
 margin: 0;
 padding: 0;
 overflow: hidden;
}

nav li {
 float: left;
}

nav li a {
 display: block;
 color: white;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
}

nav li a:hover {
 background-color: white;
 color: white;
}

main {
 padding: 20px;
}

footer {
 background-color: gray;
 color: white;
 padding: 10px;
 text-align: center;
}

</style>

<?php
// PHP code goes here
?>
