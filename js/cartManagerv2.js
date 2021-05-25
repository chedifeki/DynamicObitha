 //Variables
 var insertProduct_btn = $('#insertProduct_btn');
 var totalStore = $("#totalStore");
 var totalDisplay = $("#totalDisplay");
 var tbody = $("tbody");

 var prodSelector = $("#prodSelector");
 var qtyInput=$("#qtyInput");

 var prodCountStore = $('#prodCountStore');
 var prodCountDisplay = $('#prodCountDisplay');
 var currentCount = parseInt(prodCountStore.val());



// "EventListeners on pageLoad"
$(document).ready(function(){
 
    // Events
    
    insertProduct_btn.click(insertProduct);

    qtyInput.keyup(activateBtn);

})



//addprodct to the Cauldron from Artefacts.php
var insertProduct = function () {
    
    let prod  = $("#prodSelector option:selected").text();
    let price = parseFloat(prodSelector.val())
    let qty   = parseInt(qtyInput.val());

    
    //ajax Action: 

    $.ajax({
        url: 'php/Controllers/ccAddProduct.php',
        method: 'POST',
        data: {
                'product':prod,
                'unitPrice':price,
                'qty':qty
                },
        success: function (code_html, statut) {   
            //reload cart icon and table;
            $('#cauldronNavContainer').load("cauldron.php #cauldronNav");
            $("#tableContainer").load("cauldron.php #cauldronTable");
            
            //category selector cleanup
            prodSelector.prop('selectedIndex',0);
            qtyInput.val("");
            insertProduct_btn.attr("disabled",true);

        },
        error : function( resultat, statut,erreur){
            console.log("error while inserting product");
        }
        });
}





//Deletes product from Table, also calls removeProduct
function deleteProduct(btn){
    

    let parentTD = $(btn).parent();
    let parentTR = $(parentTD).parent();
    let indx = parentTR.children().first().text();

    
    $.ajax({
        url: 'php/Controllers/ccDeleteProduct.php',
        method: 'POST',
        data: { 
                'indx':indx
            },
        success: function (code_html, statut) {  
            console.log("hello world!");
            $('#cauldronNavContainer').load("cauldron.php #cauldronNav");
            $("#tableContainer").load("cauldron.php #cauldronTable");
        },
        error : function(resultat, statut, erreur){
            console.log("error while deleting product");
        }
        });
}


var checkout = function(){
    $.ajax({
        url:"php/Controllers/ccCheckout.php",
        success: function(){
            $('#cauldronNavContainer').load("cauldron.php #cauldronNav");
            $("#tableContainer").load("cauldron.php #cauldronTable");

            // Show Modal

            $("#ThankYouModal").modal('show');
        }
    });

}


var activateBtn = function(){
    let prod = $("#prodSelector option:selected");
    
    let qty=parseInt(qtyInput.val());
    
    
    if (!(prod=="Select a Product" || isNaN(qty))){
       
            if(qty>0){
                insertProduct_btn.attr("disabled",false);
            }
            else{
                alert("Please enter a valid Quantity!");
                insertProduct_btn.attr("disabled",true);
            }
        
    }
    else{
        insertProduct_btn.attr("disabled",true);
    }
    
}


var updateQty= function(btn){
    let op = $(btn).text();
    let product = $(btn).parent().parent().prev().text();
        console.log(op,product);
    $.ajax({
        url: 'php/Controllers/ccUpdateQty.php',
        method:'POST',
        data: {
            'product':product,
            'op':op
        },
        success: function(){
            console.log("hello world");
            $("#tableContainer").load("cauldron.php #cauldronTable");
        },
        error: function(){
            console.log("error while UpdateQantity")
        }
    });
}