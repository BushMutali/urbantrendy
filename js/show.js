const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

    if(bar){
        bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }

    if(close){
        close.addEventListener('click', () => {
            nav.classList.remove('active');
        })
    }

const icon = document.getElementById('sh-bag');
const cart = document.getElementById('cart-page');
const cart2 = document.getElementById('cart-page2');
const cancel = document.getElementById('close-cart');

    if(icon){
        icon.addEventListener('click', () =>{
            cart.classList.add('show');
            cart2.classList.add('show')

        })     
    }

    if(cancel){
        cancel.addEventListener('click', () =>{
            cart.classList.remove('show');
            cart2.classList.remove('show');
        })
    }

function redirect(){
    window.location = "shop.php";
}


var account = document.getElementById('acc');
account.style.display = "none"
 function Showaccount(){
    if(account.style.display == "none"){
        account.style.display = "block";
    }else{
        account.style.display = "none";
    }
 }


 function checkNumber(event){
    var aCode = event.which?event.which: event.keyCode;
    if(aCode > 31 && (aCode < 48 || aCode > 57)) return false;
    return true;

}

var alertBox = document.getElementById('pop');
    alertBox.style.display = "block";
    function hideAlertBox(){
        if(alertBox.style.display == "block"){
            alertBox.style.display = "none";
        }
    }