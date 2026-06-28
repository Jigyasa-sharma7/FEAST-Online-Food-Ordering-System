<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="search.css">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="navbar">
    <div class="logo"></div>
   <div class="home"> <a href="product.php">Home</a></div>
        <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <div><input type="search" placeholder="search for food" id="nav-search" onkeyup="searchFood()"></div>
                <div id="search-results"></div>
        </div>

            
            
            

            <div class="off"><a href="offer.html">offers</a></div>
            <div class="con">
        <a href="logout.php" >Logout</a>
    </div>


      <div>
        <?php
          $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
        ?>
        <div class="cart"><a href="mycart.php"> My Cart (<?php echo $count; ?>)</a></div>
      </div>

  </div>

  <!-- <main>
        <h2>What do you want to eat ?</h2>
        <div class="food-img">
            <div class="img1"></div>
            <div class="img2"></div>
            <div class="img3"></div>
            <div class="img4"></div>
            <div class="img5"></div>
            <div class="img6"></div>
        </div>
        <h2>Top Restaurants In Patiala</h2>
        <div class="res-img">
            <div class="res1">
                <div class="pic line">Uttam's Buffet And Restaurant</div>
            </div>
            <div class="res2">
                <div class="pic line">Baskin Robins</div>
            </div>
            <div class="res3">
                <div class="pic line">The Hot Shots</div>
            </div>
            <div class="res4">
                <div class="pic line">Club 16</div>
            </div>
        </div>
    </main> -->
</body>
</html>