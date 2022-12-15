<?php 

include('functions/userfunctions.php'); 
include('includes/header.php'); 


?>



<div class="product-container">
    <div class="product-column">

        <div class="card-header">
            <h2>Our Products</h2>
            <hr>
            <p>here you can check out our new product with fair price on L.A Street Clothing</p>
        </div>

        <div class="product-card-list">
            <?php 

            $product = getAllActive("products");

            if(mysqli_num_rows($product) > 0)
            {
                foreach($product as $item)
                {
                    ?>

            <div class="card-product-body">
                <a href="product-view.php?products=<?= $item['name']; ?>">
                    <div class="product-list">
                        <p>View Products</p>
                        <img src="./uploads/<?= $item['image1']; ?>" alt="Products List">
                        <h4><?= $item['name']; ?></h4>
                        <h4>₱<?= $item['price']; ?>.00</h4>
                    </div>
                </a>

            </div>
            



            <?php
                }
            }
            else
            {
                echo "No data available";
            }
            
            ?>
        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>