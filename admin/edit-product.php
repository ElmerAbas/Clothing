<?php


include('includes/header.php');
include('../middleware/adminMiddleware.php');

?>



<div class="container-edit-products">
    <div class="card-edit_product">
        <?php

        if (isset($_GET['id'])) {



            $id = $_GET['id'];
            $product = getByID("products", $id);

            if (mysqli_num_rows($product) > 0) {
                $data = mysqli_fetch_array($product);
        ?>
                <div class="card-column-edit">
                    <div class="card-header">
                        <h4>Edit Products
                            <a href="products.php" class="btn btn-back">Back</a>
                        </h4>
                    </div>

                    <div class="card-body-edit">
                        <form action="code.php" method="POST" enctype="multipart/form-data">


                            <div class="col-01">

                                <input type="hidden" name="product_id" value="<?= $data['id'] ?>">

                                <div class="card-left">
                                    <div class="col-01-row">
                                        <label for="">Product Name</label>
                                        <input type="text" required name="name" value="<?= $data['name'] ?>" placeholder="Enter Category Name" class="form-control">
                                    </div>

                                    <div class="col-01-row">
                                        <label for="">Slug</label>
                                        <input type="text" required name="slug" value="<?= $data['slug'] ?>" placeholder="Enter  slug" class="form-control">
                                    </div>

                                    <div class="col-01-row">
                                        <label for="">Product Size</label>
                                        <input type="text" required name="size" value="<?= $data['size'] ?>" placeholder="Input Size" class="form-control">
                                    </div>

                                    <div class="col-01-row">
                                        <label for="">Description</label>
                                        <textarea required name="description" placeholder="Enter description" class="form-control"><?= $data['description'] ?></textarea>
                                    </div>

                                    <div class="col-01-row">
                                        <label for="">Product Price</label>
                                        <input type="text" required name="price" value="<?= $data['price'] ?>" placeholder="Enter Original Price" class="form-control">
                                    </div>


                                </div>

                                <div class="card-right">
                                    <div class="col-01-row">
                                        <label for="">Upload Image</label>
                                        <input type="hidden" name="old_image1" value="<?= $data['image1'] ?>">
                                        <input type="hidden" name="old_image2" value="<?= $data['image2'] ?>">
                                        <input type="hidden" name="old_image3" value="<?= $data['image3'] ?>">
                                        <input type="file" name="image1" class="form-control">
                                        <input type="file" name="image2" class="form-control">
                                        <input type="file" name="image3" class="form-control">
                                        <label for="">Current Image</label>
                                        <img src="../uploads/<?= $data['image1'] ?>" alt="Product Image" height="60px" width="100px">
                                        <img src="../uploads/<?= $data['image2'] ?>" alt="Product Image" height="60px" width="100px">
                                        <img src="../uploads/<?= $data['image3'] ?>" alt="Product Image" height="60px" width="100px">
                                    </div>

                                    <div class="col-01-row">
                                        <label for="">Product Quantity</label>
                                        <input type="text" required name="qty" value="<?= $data['qty'] ?>" class="form-control">
                                    </div>

                                    <div class="col-01-row">
                                        <label for="">Available Color</label>
                                        <input type="text" required name="color" value="<?= $data['color'] ?>" class="form-control">
                                    </div>

                                    <div class="col-02">
                                        <div class="check-box">

                                            <div class="box">
                                                <label for="">Status</label>
                                                <input type="checkbox" name="status" <?= $data['status'] == '0' ? '' : 'checked' ?>>

                                                <label for="">Popular</label>
                                                <input type="checkbox" name="popular" <?= $data['popular'] == '0' ? '' : 'checked' ?>>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>

                            <div class="update">
                                <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
        <?php
            } else {
                echo "Product Not found for given ID";
            }
        } else {
            echo "ID missing from url";
        }
        ?>
    </div>
</div>




<?php include('includes/footer.php'); ?>