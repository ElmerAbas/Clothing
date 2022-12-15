<?php 

include('functions/userfunctions.php'); 
include('includes/header.php'); 
include('functions/authenticate.php');

?>

<div class="sublink">
    <h6 class="link">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="cart.php">Cart</a>
    </h6>
</div>

<hr>

<div class="container-cart">
    <div class="cart-body">
        <div class="cart-column" id="mycart">
            <?php $items = getCartItems();
                                
                    foreach ($items as $citem){
                         ?>
            <div class="card-cart sproduct">   
                <div class="row-cart">
                    <div class="header-cart">
                        <h6>Product</h6>
                        <img src="uploads/<?= $citem['image1']?>" alt="Image" class="w-50">
                    </div>

                    <div class="cart-detail">
                        <div class="cart-left">

                            <div class="column ">
                                <h6>Name</h6>
                                <h5><?= $citem['name']?></h5>
                            </div>
                            <div class="column">
                                <h6>Price</h6>
                                <h5>₱ <?= $citem['price']?></h5>
                            </div>

                        </div>

                        <div class="cart-right">
                            <div class="col ">
                                <h6>Quantity</h6>
                                <input type="hidden" class="prodId" value="<?= $citem['prod_id'] ?>">
                                <div class="input-group">
                                    <button class="input-group-text decrement-btn updateQty">-</button>
                                    <input type="text" class="form-control text-center input-qty bg-white"
                                        value="<?= $citem['prod_qty']?>" disabled>
                                    <button class="input-group-text increment-btn updateQty">+</button>
                                </div>
                            </div>
                            <div class="remove">
                                <button class="delete-btn btn-danger  deleteItem" value="<?= $citem['cid']?>">
                                    <i class="fa fa-trash"> Remove</i></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <?php



                                 
                                     }
                            
                                    ?>







        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>