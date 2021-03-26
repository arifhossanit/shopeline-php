$(".fa-bars").click(function(){
    $(".fa-bars").toggleClass("active-bar")
    $('.side-bar').toggleClass('show')
})
// shopping cart
let Add = document.getElementById("add");

Add.addEventListener("click", quantity);


function quantity(plusMin, product){
    let amount = document.getElementById(product);
    if (plusMin == "add") {
        amount.value = parseInt(amount.value)+ 1;
    }else if( plusMin == "remove"){
        if (amount.value>0) {
            amount.value = parseInt(amount.value)- 1;
        }else{
            amount.value = 0
        }    
    }
    if(product=='playConsole'){
        pPrice=200
    }else if(product=='tShirt'){
        pPrice=100
    }else if(product=='mobile'){
        pPrice=250
    }
    let priceValue = parseInt(amount.value) * pPrice;
    document.getElementById(product+'-price').innerText = priceValue;
    calculate()
}
function calculate() {
    const pPrice = parseInt(document.getElementById('playConsole').value) *200;
    const tPrice = parseInt(document.getElementById('tShirt').value) * 100;
    const mPrice = parseInt(document.getElementById('mobile').value) * 250;

    const sum = pPrice + tPrice + mPrice;
    document.getElementById('sum').innerText = sum;

    const vat = sum * .15;
    document.getElementById('vat').innerText = vat;

    const total = sum + vat;
    document.getElementById('total').innerText = total;
}
console.log(parseInt(document.getElementById('playConsole-price').value))
