$(document).ready(function(){

    $(document).on('click','.increment-btn',function(e){
    e.preventDefault();


    var qty = $(this).closest('.sproduct').find('.input-qty').val();


    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if(value < 10)
    {
        value++;
        $(this).closest('.sproduct').find('.input-qty').val(value);
    }


});
    $(document).on('click','.decrement-btn',function(e){
    e.preventDefault();


    var qty = $(this).closest('.sproduct').find('.input-qty').val();


    var value = parseInt(qty, 10);
    value = isNaN(value) ? 0 : value;
    if(value > 0)
    {
        value--;
        $(this).closest('.sproduct').find('.input-qty').val(value);
    }
});
   
        $(document).on('click','.addtocartBtn',function(e){
        e.preventDefault();

        var qty = $(this).closest('.sproduct').find('.input-qty').val();
        var prod_id = $(this).val();

        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data:{
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "add"
            },
            success:function(response){
                if(response == 201)
                {
                    alertify.success("Product added to cart");
                }
                else if(response == "existing")
                {
                    alertify.success("Product already in cart");
                }
                else if(response == 401)
                {
                    alert("login to continue");
                }
                else if(response == 500)
                {
                    alert("Something went wrong");
                }
            }
        
    });


});
$(document).on('click', '.updateQty', function(){

    var qty = $(this).closest('.sproduct').find('.input-qty').val();
    var prod_id = $(this).closest('.sproduct').find('.prodId').val();

    $.ajax({
        method: "POST",
        url: "functions/handlecart.php",
        data:{
            "prod_id": prod_id,
            "prod_qty": qty,
            "scope": "update"
        },
        success:function(response){
            //alert(response);
        }


    });
});
$(document).on('click','.deleteItem',function(){
    var cart_id = $(this).val();
    //alert(cart_id);


    $.ajax({
        method: "POST",
        url: "functions/handlecart.php",
        data:{
            "cart_id": cart_id,
            "scope": "delete"
        },
        success:function(response){
            if(response == 200)
                {
                    alertify.success("Item deleted successfully");
                    $('#mycart').load(location.href + " #mycart");
                }else{
                    alertify.success(response);
                }
        }


    });

});
});