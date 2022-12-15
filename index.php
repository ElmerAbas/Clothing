<?php 
session_start();
include('includes/header.php'); 
?>



<section id="home">
    <div id="message">
        <?php if(isset($_SESSION['message'])) 
                        {?>
        <div  class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
                         unset($_SESSION['message']);
                        }
                ?>
    </div>
    <div class="container1">
        <div class="col-10">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best Price</span> This Year</h1>
            <p>L.A Street Clothing offers you a very awesome design just for you</p>
            <a href="products.php">Shop Now</a>
        </div>

    </div>
</section>




<main>

    <section>
        <div class="container2">
            <div class="column-01">
                <div class="row-01">

                    <div class="card-01">
                        <div class="card-list">
                            <div class="details">
                                <h2>New Design T-shirt</h2>
                                <a href="products.php">Shop Now</a>
                            </div>
                            <img src="./assets/img/tshirt 1.jpg" alt="">
                        </div>

                        <div class="card-list">
                            <div class="details">
                                <h2>New Design Tshirt</h2>
                                <a href="products.php">Shop Now</a>
                            </div>
                            <img src="./assets/img/tshirt 3.jpg" alt="">
                        </div>

                        <div class="card-list">
                            <div class="details">
                                <h2>New Design Tshirt</h2>
                                <a href="products.php">Shop Now</a>
                            </div>
                            <img src="./assets/img/white.jpg" alt="">
                        </div>

                        <div class="card-list">
                            <div class="details">
                                <h2>New Design Tshirt</h2>
                                <a href="products.php">Shop Now</a>
                            </div>
                            <img src="./assets/img/tshirt 3.jpg" alt="">
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="featured">
        <div class="container3">
            <div class="col-12">
                <h3>Our Featured</h3>
                <hr>
                <p> here you can check out our new
                    product with fair price on L.A Street
                    Clothing</p>
            </div>

        </div>
        <div class="container4">
            <div class="col-13">
                <div class="column-left1">
                    <div class="card1">
                        <div class="product">
                            <img class="img-fluid mb-2" src="./assets/img/short2.jpg" alt="">

                            <div class="col-14">
                                <h5 class="p-name">Plain Short</h5>
                                <h4 class="p-price">₱500.00 </h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>
                        </div>

                        <div class="product">
                            <img class="img-fluid mb-2" src="./assets/img/mask01.jpg" alt="">

                            <div class="col-14">
                                <h5 class="p-name">3D Mask</h5>
                                <h4 class="p-price">₱150.00 </h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="column-right1">
                    <div class="card1">
                        <div class="product">
                            <img class="img-fluid mb-2" src="./assets/img/short4.jpg" alt="">

                            <div class="col-14">
                                <h5 class="p-name">Cargo Short</h5>
                                <h4 class="p-price">₱500.00 </h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>


                        </div>
                        <div class="product">
                            <img class="img-fluid mb-2" src="./assets/img/cap6.jpg" alt="">

                            <div class="col-14">
                                <h5 class="p-name">Bucket Hat</h5>
                                <h4 class="p-price">₱200.00 </h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
    </section>

    <div class="container5">
        <section id="banner">
            <div class="col-15">
                <h4>MID SEASON'S SALE</h4>
                <h1>Autumn Collection<br>UP TO 20% OFF</h1>
                <button class="text-uppercase">Shop Now</button>
            </div>
        </section>
    </div>





    <section class="container6">
        <div class="col-16">
            <h3>Clothes Design</h3>
            <hr class="mx-auto">
            <p> here you can check out our new product with fair price on L.A Street Clothing</p>
        </div>

        <div class="container7">
            <div class="col-17">

                <div class="column-left2">
                    <div class="card2">
                        <div class="product">
                            <img src="./assets/img/blue4.jpg" alt="">

                            <div class="info">
                                <h5>Tiedye Tight Neck</h5>
                                <h4>₱500.00</h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>
                        </div>

                        <div class="product">
                            <img src="./assets/img/yellow1.jpg" alt="">

                            <div class="info">
                                <h5>Mustard Yellow shirt</h5>
                                <h4>₱500.00</h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="column-right2">
                    <div class="card2">
                        <div class="product">
                            <img src="./assets/img/black.jpg" alt="">

                            <div class="info">
                                <h5>Bandana shirt</h5>
                                <h4>₱500.00</h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>
                        </div>



                        <div class="product">
                            <img src="./assets/img/white4.jpg" alt="">

                            <div class="info">
                                <h5>White shirt</h5>
                                <h4>₱500.00</h4>
                                <button class="buy-btn"><a href="products.php">Shop Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>



<?php include('includes/footer.php'); ?>