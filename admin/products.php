<?php 


include('includes/header.php');
include('../middleware/adminMiddleware.php');  

?>



<div class="container-product">
    <div class="card-product">
        <div class="column-card-product">
            <div class="card-header">
                <h4>Products</h4>
            </div>
            <div class="card-body-product" id="products_table">

            
                <table class="table-product">
                    <thead>
                        <th>Product Name</th>
                        <th>Product Size</th>
                        <th>Product Image</th>
                        <th>Available Color</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php 
                                $products = getAll("products");

                                if(mysqli_num_rows($products) > 0)
                                {
                                    foreach($products as $item)
                                    {
                                        ?>

                        <tr>
                            <td> <?= $item['name']; ?> </td>
                            <td> <?= $item['size']; ?> </td>
                            <td style="display: flex; overflow-y: hidden;">
                                <img src="../uploads/<?= $item['image1']; ?>"
                                alt="<?= $item['name']; ?>">
                                <img src="../uploads/<?= $item['image2']; ?>"
                                alt="<?= $item['name']; ?>">
                                <img src="../uploads/<?= $item['image3']; ?>"
                                alt="<?= $item['name']; ?>">
                            </td>
                            <td> <?= $item['color']; ?> </td>
                            <td> <?= $item['qty']; ?> </td>
                            <td>
                                <?= $item['status'] == '0'? "Visible":"Hidden" ?>
                            </td>
                            <td> 
                                <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a>
                                <br><br>
                                <button type="button" class="btn btn-danger delete_product_btn" value="<?= $item['id']; ?>" >Delete</button>
                            </td>
                        </tr>

                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No records found";
                                }

                            ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>