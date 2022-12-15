<?php 

include('../config/dbcon.php');
include('../functions/myfunctions.php');


// This is for Add Products
if(isset($_POST['add_product_btn']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $size = $_POST['size'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $color = $_POST['color'];
    $status = isset($_POST['status']) ? '1':'0' ;
    $popular = isset($_POST['popular']) ? '1':'0' ;
     
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];

    $image_ext1 = pathinfo($image1, PATHINFO_EXTENSION);
    $filename1 = time().'.'.$image_ext1;

    $image_ext2 = pathinfo($image2, PATHINFO_EXTENSION);
    $filename2 = time().'.'.$image_ext2;

    $image_ext3 = pathinfo($image3, PATHINFO_EXTENSION);
    $filename3 = time().'.'.$image_ext3;

    $path = "../uploads";



    if($name != "" && $slug != "" && $description != "")
    {

        $product_query = "INSERT INTO products (name,slug,size,description,price,qty,color,status,popular,image1,image2,image3) VALUES 
        ('$name','$slug','$size','$description','$price','$qty','$color','$status','$popular','$image1','$image2','$image3')";

        $product_query_run = mysqli_query($con, $product_query);
        
        if($product_query_run)
        {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path.'/'.$image1);
            move_uploaded_file($_FILES['image2']['tmp_name'], $path.'/'.$image2);
            move_uploaded_file($_FILES['image3']['tmp_name'], $path.'/'.$image3);
            redirect("add-product.php", "Product Added Successsfully");
        }
        else
        {
            redirect("add-product.php", "Something went wrong");
        }
    }
    else
    {
        redirect("add-product.php", "All fields are mandatory");
    }


}

//This is for Update Product 
else if(isset($_POST['update_product_btn']))
{ 
    $product_id = $_POST['product_id'];

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $size = $_POST['size'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $color = $_POST['color'];
    $status = isset($_POST['status']) ? '1':'0' ;
    $popular = isset($_POST['popular']) ? '1':'0' ;

    $path = "../uploads";

    $new_image1 = $_FILES['image1']['name'];
    $new_image2 = $_FILES['image2']['name'];
    $new_image3 = $_FILES['image3']['name'];
    $old_image1 = $_POST['old_image1'];
    $old_image2 = $_POST['old_image2'];
    $old_image3 = $_POST['old_image3'];


    if($new_image1 != "")
    {
        //$update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = time().'.'.$image_ext1;
    }
    else
    {
        $update_filename1 = $old_image1;
    }

    if($new_image2 != "")
    {
        //$update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = time().'.'.$image_ext2;
    }
    else
    {
        $update_filename2 = $old_image2;
    }

    if($new_image3 != "")
    {
        //$update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = time().'.'.$image_ext3;
    }
    else
    {
        $update_filename3 = $old_image3;
    }
    
    $update_product_query = "UPDATE products SET  name='$name', slug='$slug', size='$size', description='$description',
    price='$price',qty='$qty',color='$color', status='$status', popular='$popular', image1='$update_filename1', image2='$update_filename2', image3='$update_filename3' WHERE id='$product_id' ";
    $update_product_query_run = mysqli_query($con, $update_product_query);

    if($update_product_query_run)
    {
        if($_FILES['image1']['name'] != "")
        {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path.'/'.$update_filename1);
            if(file_exists("../uploads/".$old_image1))
            {
                unlink("../uploads/".$old_image1);
            }
        }
        if($_FILES['image2']['name'] != "")
        {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path.'/'.$update_filename2);
            if(file_exists("../uploads/".$old_image2))
            {
                unlink("../uploads/".$old_image2);
            }
        }
        if($_FILES['image3']['name'] != "")
        {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path.'/'.$update_filename3);
            if(file_exists("../uploads/".$old_image3))
            {
                unlink("../uploads/".$old_image3);
            }
        }
        

        redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
    }
    else
    {
        redirect("edit-product.php?id=$product_id", "Something Went wrong");
    }

}

//This is for Delete Product
else if(isset($_POST['delete_product_btn']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $product_querry = "SELECT * FROM products WHERE id='$product_id' ";
    $product_querry_run = mysqli_query($con, $product_querry);
    $product_data = mysqli_fetch_array($product_querry_run);
    $image1 = $product_data['image1'];
    $image2 = $product_data['image2'];
    $image3 = $product_data['image2'];


    $delete_query = "DELETE FROM products WHERE id='$product_id' ";
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        if(file_exists("../uploads/".$image1))
        {
            unlink("../uploads/".$image1);
        }

        if(file_exists("../uploads/".$image2))
        {
            unlink("../uploads/".$image2);
        }

        if(file_exists("../uploads/".$image3))
        {
            unlink("../uploads/".$image3);
        }

        // redirect("products.php", "Product deleted Successfully");
        echo 200;
    }

    else
    {
        // redirect("products.php", "Something went wrong");
        echo 500;
    }

}

else
{
    header('Location: ../index.php');
}

?>