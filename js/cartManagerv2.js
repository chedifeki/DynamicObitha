 //Variables
 var insertProduct_btn = $('#insertProduct_btn');
 var totalStore = $("#totalStore");
 var totalDisplay = $("#totalDisplay");
 var tbody = $("tbody");

 var prodSelector = $("#prodSelector");
 var priceInput=$("#priceInput");
 var qtyInput=$("#qtyInput");

 var prodCountStore = $('#prodCountStore');
 var prodCountDisplay = $('#prodCountDisplay');
 var currentCount = parseInt(prodCountStore.val());



// "EventListeners on pageLoad"
$(document).ready(function(){
 
    // Events
    
    insertProduct_btn.click(function(){
        addProduct(this);
        insertProduct();
    });
    priceInput.keyup(activateBtn);
    qtyInput.keyup(activateBtn);

    $(".checkout_btn").click(checkout);
})





//addprodct to the Cauldron from Artefacts.php
var addProduct = function (btn) {

    let product = btn.children("input")[0].value;
    let unitPrice = parseFloat(btn.children("input")[1].value);
    console.log(product,unitPrice);
    //ajax Action: 

    $.ajax({
        url: 'php/Controllers/_ccAddProduct.php',
        method: 'POST',
        data: { 'currentCount':currentCount+1,
                'product':product,
                'unitPrice':unitPrice },
        success: function (code_html, statut) {   
            if (currentCount == 0) {
            $('#cauldronImg').attr("src","img/cauldron_full.png");
            prodCountDisplay.removeClass('d-none');
            }
            currentCount++;
            prodCountStore.val(currentCount);
            prodCountDisplay.html(currentCount.toString());
        },
        });
        
}

// Removes products from the cauldron display: 
function removeProduct(){
    if (currentCount>0){
        currentCount--;
    }
    
    if (currentCount == 0) {
        $('#cauldronImg').attr("src","img/cauldron_empty.png");
        prodCountDisplay.addClass('d-none');
    }
    
    prodCountStore.val(currentCount);
    prodCountDisplay.html(currentCount.toString());

}





var insertProduct = function(){
    //document elements 

    

    //values 
    let currentTotal = parseFloat(totalStore.val());

    let prod  = prodSelector.val();
    let price = parseFloat(priceInput.val());
    let qty   = parseInt(qtyInput.val());
        
    let subtotal = price*qty;
    let del_btn = "<button class=\"invisible-btn deleteProduct_btn\" onclick=\"deleteProduct(this)\"><i class=\"far fa-trash-alt\"></i></button>";

    //insert into cauldron
    $('#cauldronTable').append('<tr><td>'+prod+'</td><td>'+qty+'</td><td>'+price+'</td><td>'+subtotal+'</td><td>'+del_btn+'</td></tr>');
    
   
    // update total: 
    
    if (currentTotal==0){
        totalDisplay.removeClass("d-none");
    }
    currentTotal+=subtotal;
    totalStore.val(currentTotal);
    
    totalDisplay.html(currentTotal.toString()+" TND");

    //input Cleaup: 
     prodSelector.prop("selectedIndex",0);
     priceInput.val('');
     qtyInput.val('');

    // disable button 
    insertProduct_btn.attr("disabled" , true);
    
}
//Deletes product from Table, also calls removeProduct
function deleteProduct(btn){
    let currentTotal = parseFloat(totalStore.val());

    let parentTD = $(btn).parent();
    let parentTR = $(parentTD).parent();

    
    let linePrice=parseFloat(parentTD.prev().html());
    
    currentTotal -= linePrice;
    
    // update Total
    totalStore.val(currentTotal);
    if (currentTotal>0){
        totalDisplay.html(currentTotal.toString()+" TND");
    }
    else{
        totalDisplay.addClass("d-none");
    }
    
    //remove the line from the table
    parentTR.remove();

    // reduce product count on navbar Icon
    removeProduct();

}


var checkout= function(){
    tbody.children().remove();

    currentCount=0;
    removeProduct();

    currentTotal = 0;
    totalStore.val(currentTotal);
    totalDisplay.addClass("d-none");
}


var activateBtn = function(){
    let prod = prodSelector.val();
    let price=parseFloat(priceInput.val());
    let qty=parseInt(qtyInput.val());
    
    
    if (!(prod=="Select a Product" ||isNaN(price)|| isNaN(qty))){
        if (price>0){
            if(qty>0){
                insertProduct_btn.attr("disabled",false);
            }
            else{
                alert("Please enter a valid Quantity!");
                insertProduct_btn.attr("disabled",true);
            }
        }
        else{
            alert("Please enter a valid price!");
            insertProduct_btn.attr("disabled",true);
        }
        
    }
    else{
        insertProduct_btn.attr("disabled",true);
    }
}