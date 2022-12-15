<?php

include('includes/header.php');
include('../middleware/adminMiddleware.php');

?>



<div class="container-add_product">
    <div class="card-add_product">
        <div class="card-column-add">
            <div class="card-header">
                <h4>Add Products</h4>
            </div>

            <div class="card-body-add">
                <form action="code.php" method="POST" enctype="multipart/form-data">




                    <div class="col-01">

                        <div class="card-left">
                            <div class="col-01-row">
                                <label for="">Product Name</label>
                                <input type="text" required name="name" placeholder="Input Name" class="form-control">
                            </div>

                            <div class="col-01-row">
                                <label for="">Slug</label>
                                <input type="text" required name="slug" placeholder="Input  slug" class="form-control">
                            </div>

                            <div class="col-01-row">
                                <label for="">Product Size</label>
                                <input type="text" required name="size" placeholder="Input Size" class="form-control">
                            </div>


                            <div class="col-01-row">
                                <label for="">Description</label>
                                <textarea required name="description" placeholder="Input description" class="form-control"></textarea>
                            </div>

                            <div class="col-01-row">
                                <label for="">Product Price</label>
                                <input type="text" required name="price" placeholder="Input Original Price" class="form-control">
                            </div>


                        </div>

                        <div class="card-right">
                            <div class="col-01-row">
                                <label for="">Upload Image</label>
                                <input type="file"  name="image1" class="form-control">
                                <input style="margin-top: 10px;" type="file"  name="image2" class="form-control">
                                <input style="margin-top: 10px;" type="file"  name="image3" class="form-control">
                            </div>

                            <div class="col-01-row">
                                <label for="">Product Quantity</label>
                                <input type="text" required name="qty" placeholder="Input Quantity" class="form-control">
                            </div>

                            <div class="col-01-row">
                                <label for="">Available Color</label>
                                <input type="text" required name="color" placeholder="Input Color" class="form-control">
                            </div>

                            <div class="col-02">
                                <div class="check-box">
                                    <div class="box">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status">

                                        <label for="">Popular</label>
                                        <input type="checkbox" name="popular">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="save">
                        <button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>