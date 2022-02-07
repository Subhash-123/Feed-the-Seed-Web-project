$(document).ready(function() {

    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    let $sub=$("#sub");

    let $discount = $("#discount-price");

    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
       let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
        let $qty1 = $(`.qty1[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });
                    // increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                   let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                   $deal_price.text(subtotal.toFixed(2));
                    $qty1.text($input.val());

                }

            }}); // closing ajax request
    }); // closing qty up button
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
        let $qty1 = $(`.qty1[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                 let price=  $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                   $deal_price.text(subtotal.toFixed(2));
                    $qty1.text(parseInt($price)/parseInt($deal_price));
                }

            }}); // closing ajax request

    });
    sessionStorage.setItem("sub",$deal);
    document.getElementById("sub").innerHTML=sessionStorage.getItem("sub");
    // closing qty down button
});
