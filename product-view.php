<?php 
include('functions/userfunctions.php'); 
include('includes/header.php');

if (isset($_GET['products']))
{
    $product_slug = $_GET['products'];
    $product_data = getNameActive("products", $product_slug);
    $product = mysqli_fetch_array($product_data);


    if($product)
    {
?>


<section class="sproduct ">
    <div class="container-product-view ">
        <div class="column-product-view">

            <div class="back-btn">
                <a href="products.php">
                    <span class="material-symbols-sharp">west</span>Back
                </a>
            </div>

            <div class="card-product ">
                <div class="card-product-view">
                    <div class="product-header">
                    <h4 class="product-name"><?= $product['name']; ?></h4>
                    </div>
                    <div class="product-view">
                        <img tyle="margin-left: 200px;" src="uploads/<?= $product['image1']; ?>" alt="Product View">
                        <img src="uploads/<?= $product['image2']; ?>" alt="Product View">
                        <img src="uploads/<?= $product['image3']; ?>" alt="Product View">
                    </div>
                </div>
                <div class="card-product-details">

                    <div class="row-product">

                        <div class="product-info">
                            <h3>Available Size</h3>
                            <h5><?= $product['size']; ?></h5>
                        </div>

                        <div class="product-info">
                            <h3>Available Color</h3>
                            <br>
                            <h5><?= $product['color']; ?></h5>
                        </div>

                        <div class="product-price">
                            <h3>Price</h3>
                            <h4>₱<?= $product['price']; ?>.00</h4>
                        </div>

                        <div class="product-cart">
                            <h3>Quantity</h3>
                            <div class="input-group">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" class="form-control input-qty " value="1" disabled>
                                <button class="input-group-text increment-btn">+</button>
                            </div>

                            <button class="but-btn  addtocartBtn" value="<?= $product['id'];?>">Add to Cart</button>

                        </div>

                        <div class="row-details">
                            <h3>Product Details:</h3>
                            <h4><?= $product['description']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    }
    else
    {
        echo "Product Not Found";
    }

}
else
{
    echo "Something Went wrong";
}

include('includes/footer.php'); ?>