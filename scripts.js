$(".fa-bars").click(function(){
    $(".fa-bars").toggleClass("active-bar")
    $('.side-bar').toggleClass('show')
})
// shopping cart
// let Add = document.getElementById("add");

// Add.addEventListener("click", quantity);


// function quantity(plusMin, product){
//     let amount = document.getElementById(product);
//     if (plusMin == "add") {
//         amount.value = parseInt(amount.value)+ 1;
//     }else if( plusMin == "remove"){
//         if (amount.value>0) {
//             amount.value = parseInt(amount.value)- 1;
//         }else{
//             amount.value = 0
//         }    
//     }
//     if(product=='playConsole'){
//         pPrice=200
//     }else if(product=='tShirt'){
//         pPrice=100
//     }else if(product=='mobile'){
//         pPrice=250
//     }
//     let priceValue = parseInt(amount.value) * pPrice;
//     document.getElementById(product+'-price').innerText = priceValue;
//     calculate()
// }
// function calculate() {
//     const pPrice = parseInt(document.getElementById('playConsole').value) *200;
//     const tPrice = parseInt(document.getElementById('tShirt').value) * 100;
//     const mPrice = parseInt(document.getElementById('mobile').value) * 250;

//     const sum = pPrice + tPrice + mPrice;
//     document.getElementById('sum').innerText = sum;

//     const vat = sum * .15;
//     document.getElementById('vat').innerText = vat;

//     const total = sum + vat;
//     document.getElementById('total').innerText = total;
// }
// console.log(parseInt(document.getElementById('playConsole-price').value))

// For Adding products to cart 
let addProduct = (productId, unit, change)=>{
    let cartProduct = checksLS();
    let recentProdcuts = cartProduct.find(product => product.id === productId);

    if (recentProdcuts) {
        let modifiProduct = cartProduct.filter(product => product.id !== productId);
        let newAddProduct =[];
        if (change == "addition") {
            newAddProduct = [...modifiProduct,{id:productId,count:recentProdcuts.count+unit}];
        }else {
            newAddProduct = [...modifiProduct,{id:productId,count:parseInt(unit)}];
            updateTotal();
        }

        sendsToLS(newAddProduct);
    }
}

const deleteProduct = (productId)=>{
    let cartProduct = checksLS();
    let currentProdcuts = cartProduct.find(product => product.id === productId);
    
    if (currentProdcuts) {
        let modifiedProduct = cartProduct.filter(product => product.id !== productId);
        sendsToLS(modifiedProduct);
        document.getElementById('cart').innerHTML = "";
        getFromLS();
    }
}

let checksLS = () =>{
    if (localStorage.getItem('add-to-cart')) {
        return JSON.parse(localStorage.getItem('add-to-cart'));
    }else{
        return [];
    }
    
}
let sendsToLS = products =>{
    localStorage.setItem('add-to-cart',JSON.stringify(products));
}

function getFromLS() {
    const products = checksLS();
    products.forEach(pro => {
        fetch('process_chart.php?product_id='+pro.id)
        .then(response => response.json())
        .then(product=>{
            document.getElementById('cart').innerHTML +=
            `<div class="row row-cols-4 border-top py-3">
            <div class="col"><img src="product_pic/${product.pimage}" alt="" width="200px"></div>
            <div class="col-5 fw-bold text-primary">
              <p class="fw-bold text-primary fs-5">${product.ptitle}</p>
              <p class="text-success ">in Stock</p>
              <div class="input-group pe-5">
                <p class="text-dark me-2">Quantity:</p>
                <button class="btn btn-primary" data-addProduct="${product.id}">+</button>
                <input type="text" value="${pro.count}" id="playConsole" class="form-control text-center" disabled>
                <button class="btn btn-primary" data-remProduct="${product.id}">-</button>
              </div>
            </div>
            <div class="col-2 text-end">
              <p class="text-muted">Price</p>
              <div>$<span id="${product.id}">${product.pprice*pro.count}</span></div>
            </div>
            <div class="col-1 text-end">
               <button class="btn btn-white close" onclick="deleteProduct(${product.id})"> <i class="fas fa-times-circle"></i></button>
            </div>
          </div>`
        })
    })
    updateTotal();
}

document.getElementById('cart').addEventListener('click',(e)=>{
    if (e.target.hasAttribute('data-addProduct')) {
        let countFeild = e.target.nextElementSibling;
        const iD = parseInt(e.target.getAttribute('data-addProduct'));
        const count = parseInt(countFeild.value);
        let unit = count + 1;
        countFeild.value = unit;
        var url = "process_chart.php?product_id=" + iD;
        ajaxData(url,unit,iD);
        addProduct(iD,unit);   

    }else if (e.target.hasAttribute('data-remProduct')) {
        let countFeild = e.target.previousElementSibling;
        const iD = parseInt(e.target.getAttribute('data-remProduct'));
        const count2 = parseInt(countFeild.value);
        let unit2 = count2 - 1;

        if (unit2 <= 0) {
            countFeild.value = 1;
            unit2 = 1;
        }else{
            countFeild.value = unit2;
        }
        var url = "process_chart.php?product_id=" + iD;
        ajaxData(url,unit2,iD);
        addProduct(iD,unit2);
    }
   
})

function ajaxData(url,units,ID) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        const { pprice } = JSON.parse(this.responseText);
        document.getElementById(ID).innerHTML = pprice * units || 0;
        
        updateTotal();
      }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

function updateTotal() {
    const products = checksLS();
    let total = 0;
    products.forEach(pd => {
        // For using AJAX [Starts]
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const { pprice } = JSON.parse(this.responseText);
                total += pd.count * pprice;
                document.getElementById('total').innerText = total;
            }
        };
        xmlhttp.open("GET", "process_chart.php?product_id=" + pd.id, true);
        xmlhttp.send();
        // For using AJAX [Ends]
    });
}