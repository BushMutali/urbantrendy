if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready()

} 

function ready(){
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
//console.log(removeCartItemButtons)
for (var i=0; i < removeCartItemButtons.length; i++){
    var button = removeCartItemButtons[i]
    button.addEventListener('click', removeCartItem)  
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i=0; i < quantityInputs.length; i++){
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('btn-add')
    for (var i=0; i < addToCartButtons.length; i++){
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
        //console.log(addToCartButtons)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)

}
function purchaseClicked(){
    swal({
        title: "Thank You",
        text: "Purchase Successfull",
       icon: "success",
        button: "Back"
    })
    //alert("Thank you")
    var cartItems = document.getElementsByClassName('shopping-cart-items')[0]
    while (cartItems.hasChildNodes()){
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}




function removeCartItem(event){
        var buttonClicked = event.target
            buttonClicked.parentElement.parentElement.remove()
            updateCartTotal()
    }


function quantityChanged(event){
        var input = event.target
        if(isNaN(input.value) || input.value <= 0){
            input.value = 1
        }
        updateCartTotal()
    }

    function addToCartClicked(event){
        var button = event.target
        var shopItem = button.parentElement.parentElement
        var title = shopItem.getElementsByClassName('shopping-item-title')[0].innerText
        var price = shopItem.getElementsByClassName('shopping-item-price')[0].innerText
        var imageSrc = shopItem.getElementsByClassName('shopping-item-image')[0].src
        //console.log(title, price, imageSrc)
        addItemToCart(title, price, imageSrc)
        updateCartTotal()
    }



    function addItemToCart(title, price, imageSrc){
        var cartRow = document.createElement('div')
        cartRow.classList.add('cart-row')
        var cartItems = document.getElementsByClassName('shopping-cart-items')[0]
        var cartItemsName = cartItems.getElementsByClassName('cart-item-title')
        for (var i = 0; i < cartItemsName.length; i++){
            if (cartItemsName[i].innerText == title){
                //alert('This Item is already added to the cart. Check your cart to change the quantity')
                swal({
                    title: "Failed",
                    text: "Item already added to cart",
                   icon: "info",
                    button: "Back"
                })
                return
            }
        }
        var cartRowContents = `
                        <div class="cart-item cart-column">
                        <img src="${imageSrc}" alt="" class="cart-item-image">
                        <span class="cart-item-title">${title}</span>
                    </div>
                    <span class="cart-price cart-column price-cart">${price}</span>
                    <div class="cart-quantity cart-column">
                        <input type="number" value="1" class="cart-quantity-input">
                        <button:button class="btn btn-danger">Remove</button:button>
                    </div>`
                cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    }





function updateCartTotal(){
        var cartItemContainer = document.getElementsByClassName('shopping-cart-items')[0]
        var cartRows = cartItemContainer.getElementsByClassName('cart-row')
        var total = 0
        for (var i=0; i < cartRows.length; i++){
            var cartRow = cartRows[i]
            var priceElement = cartRow.getElementsByClassName('cart-price')[0]
            var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
            var price = priceElement.innerText.replace('Ksh.', '')
            var quantity = quantityElement.value
            total = total + (price * quantity)
        }
        total = Math.round(total *100 ) / 100
        document.getElementsByClassName('cart-total-price')[0].innerText =  'Ksh. ' + total
    }