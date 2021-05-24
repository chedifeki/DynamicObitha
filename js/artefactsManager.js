// variables
/*
var prodCountStore = $('#prodCountStore');
var prodCountDisplay = $('#prodCountDisplay');
var currentCount = parseInt(prodCountStore.val());
*/
$(document).ready(function(){
    $(".addProduct_btn").click(
        function(){addProduct($(this));}
        );
    
});



//adds Product to the Cauldron 
var addProduct = function (btn) {

    let product = btn.children("input")[0].value;
    let unitPrice = parseFloat(btn.children("input")[1].value);
    console.log(product,unitPrice);
    //ajax Action: 

    $.ajax({
        url: 'php/Controllers/_ccAddProduct.php',
        method: 'POST',
        data: { 
                'product':product,
                'unitPrice':unitPrice },
        success: function (code_html, statut) {  
            $('#cauldronNav').load("artefacts.php #cauldronNav")
        },
        });
        
}
//Manages Categories Display 
function openTab(evt, tabName) {
    var i;
    var x = document.getElementsByClassName("categ");
    for (i = 0; i < x.length; i++) {
      x[i].classList.add("d-none");
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].classList.remove("activeCateg");
    }
    document.getElementById(tabName).classList.remove("d-none");
    evt.currentTarget.classList.add("activeCateg");
  }
  /* based on code from w3school */ 