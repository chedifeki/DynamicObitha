// "EventListeners"
$(document).ready(function(){
    $(".addProduct_btn").click(addProduct);
    $("#insertProduct_btn").click(function(){
        addProduct();
        insertProduct();
    });
})



// variables
var totalStore = $("#totalStore");
var totalDisplay = $("#totalDisplay");
var tbody = $("tbody");


var prodCountStore = $('#prodCountStore');
var prodCountDisplay = $('#prodCountDisplay');
var currentCount = parseInt(prodCountStore.val());


//addprodct to the Cauldron from Artefacts.php
var addProduct = function () {
    
    if (currentCount == 0) {
        $('#cauldronImg').attr("src","img/cauldron_full.png");
        prodCountDisplay.removeClass('d-none');
    }
    currentCount++;
    prodCountStore.val(currentCount);
    prodCountDisplay.html(currentCount.toString());

    //ajax Action: 
    /*
    $.ajax({
        url: 'php/Controllers/_ccAddProduct.php',
        type: 'POST',
        data: currentCount,
        success: function (code_html, statut) { },
        error: function (resultat, statut, erreur) { }
    });*/
}

var insertProduct = function(){
    //document elements 

    let prodSelector = $("#prodSelector");
    let priceInput=$("#priceInput");
    let qtyInput=$("#qtyInput");

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
    /*
    $('#insertProduct_btn').attr("disabled" , true);
    */
}

