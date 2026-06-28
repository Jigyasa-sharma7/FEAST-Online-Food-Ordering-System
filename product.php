<?php
include('navbar.php');
if (!isset($_SESSION["user"])){
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="stylepro.css">
</head>
<body>
    <!-- <h2>Buy Here !</h2> -->
    <script>
            function searchFood() {
                var query = document.getElementById('nav-search').value;
            
                // Don't search if input is less than 3 characters
                if (query.length < 3) {
                    document.getElementById('search-results').innerHTML = ''; 
                    return;
                }
            
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "search.php?query=" + query, true);
            
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        try {
                            console.log("Response Text:", xhr.responseText);
                            var data = JSON.parse(xhr.responseText); // Attempt to parse the JSON response
            
                            var resultsContainer = document.getElementById('search-results');
                            resultsContainer.innerHTML = ''; // Clear previous results
            
                            if (data.length > 0) {
                                data.forEach(function(food) {
                                    var foodItem = document.createElement('div');
                                    foodItem.classList.add('food-item');
                                    
                                    foodItem.innerHTML = `
                                        <div class="food-item">
                                            <div class="info">
                                            </div>
                                            <h3 class="food-name">${food.name}</h3>
                                            <p>${food.description}</p>
                                            <img src="${food.image_url}" alt="${food.name}"/>
                                            <p class="price">${food.price}</p>
                                        </div>`;

    



                                    
                                    resultsContainer.appendChild(foodItem);
                                });
                            } else {
                                resultsContainer.innerHTML = "<p>No results found</p>";
                            }
                        } catch (e) {
                            console.error("Error parsing JSON:", e);
                            document.getElementById('search-results').innerHTML = "<p>There was an error processing your request. Please try again later.</p>";
                        }
                    } else {
                        console.error("Request failed with status:", xhr.status);
                        document.getElementById('search-results').innerHTML = "<p>There was an error processing your request. Please try again later.</p>";
                    }
                };
            
                xhr.onerror = function() {
                    console.error("Request failed");
                    document.getElementById('search-results').innerHTML = "<p>There was an error processing your request. Please try again later.</p>";
                };
            
                xhr.send();
            }
        </script>
    <main>
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
    </main>
    <div class="orders">
    <h2>What's On Your Mind ?</h2>
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="burger.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Burger</h5>
                            <p class="card-text">Price: Rs.50</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="burger">
                            <input type="hidden" name="Price" value="50">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="Noodles.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Noodles</h5>
                            <p class="card-text">Price: Rs.100</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="noodles">
                            <input type="hidden" name="Price" value="100">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="manchurian.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Manchurian</h5>
                            <p class="card-text">Price: Rs.150</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="manchurian">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="desserts.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Desserts</h5>
                            <p class="card-text">Price: Rs.190</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="desserts">
                            <input type="hidden" name="Price" value="190">
                        </div>
                    </div>
                </form>
            </div>
        </div>   
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="dosa.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dosa</h5>
                            <p class="card-text">Price: Rs.100</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="dosa">
                            <input type="hidden" name="Price" value="100">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="idli.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Idli</h5>
                            <p class="card-text">Price: Rs.70</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="idli">
                            <input type="hidden" name="Price" value="70">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="chhole bhature.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Chhole Bhature</h5>
                            <p class="card-text">Price: Rs.60</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="chhole bhature">
                            <input type="hidden" name="Price" value="60">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="kulche.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kulche</h5>
                            <p class="card-text">Price: Rs.40</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="kulche">
                            <input type="hidden" name="Price" value="40">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="biryani.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Biryani</h5>
                            <p class="card-text">Price: Rs.350</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="biryani">
                            <input type="hidden" name="Price" value="350">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="chicken.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Chicken</h5>
                            <p class="card-text">Price: Rs.380</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="chicken">
                            <input type="hidden" name="Price" value="380">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="momos.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Momos</h5>
                            <p class="card-text">Price: Rs.70</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="momos">
                            <input type="hidden" name="Price" value="70">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="wrap.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Wrap</h5>
                            <p class="card-text">Price: Rs.40</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="wrap">
                            <input type="hidden" name="Price" value="40">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="prontha.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Prontha</h5>
                            <p class="card-text">Price: Rs.50</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="prontha">
                            <input type="hidden" name="Price" value="50">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="samosa.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Samosa</h5>
                            <p class="card-text">Price: Rs.15</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="samosa">
                            <input type="hidden" name="Price" value="15">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="spring roll.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Spring Roll</h5>
                            <p class="card-text">Price: Rs.45</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="spring roll">
                            <input type="hidden" name="Price" value="45">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="golgappee.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Golgappe</h5>
                            <p class="card-text">Price: Rs.30</p>
                            <button type="submit" name="Add_to_cart" class="but">Add To Cart</button>
                            <input type="hidden" name="Item_name" value="golgappe">
                            <input type="hidden" name="Price" value="30">
                        </div>
                    </div>
                </form>
            </div>
        </div>     
    </div>        
</body>
</html>
