//Looping element from data items

var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
];

function listProduct(items) {
    var output = "";

    for (i = 0; i < items.length; i++) {
        output += `
        <div class="col-md-4">
            <div class="card product-item">
                <img src="img/${items[i][4]}" class="card-img-top p-3 img-object" alt="${items[i][4]}">
                <div class="card-body">
                    <h5 class="card-title" id="itemName">${items[i][1]}</h5>
                    <p class="card-text" id="itemDesc">${items[i][3]}</p>
                    <p class="card-text">Rp ${items[i][2]}</p>
                    <a href="#" class="btn btn-primary addCart" onClick="handleClick(${items[i]})">Add To Cart</a>
                </div>
            </div>
        </div>
        `
    };
    return output;
};

document.getElementById("listBarang").innerHTML = listProduct(items);


// Filtering
var formId = document.getElementById("formItem");
formId.addEventListener("submit", function(event) {
    // Release reload
    event.preventDefault();

    // Variable value
    var keyword = document.getElementById("keyword").value;

    // Variable penampung array yang sudah di filter
    var filteredKeyword = filtering(keyword);

    document.getElementById("listBarang").innerHTML = listProduct(filteredKeyword);
});

function filtering(string) {
    var filteredItems = [];

    for (k = 0; k < items.length; k++) {
        var itemNameToLowerCase =  items[k][1].toLowerCase();
        var stringToLowerCase =  string.toLowerCase();

        if (itemNameToLowerCase.includes(stringToLowerCase)) {
            filteredItems.push(items[k]);
        };
    };

    return filteredItems;
};

// Add cart
var cart = [];

// function addToCart(itemCart) {
//     console.log(itemCart)
//     cart.push(itemCart);
//     console.log(cart)
// };


var cartButton = document.getElementById("cart");
var addCartButton = document.getElementsByClassName("addCart");
// var cartButton = addCartButton[0];
// cartButton.addEventListener("click", function(e) {
//     console.log('a')
// });

var cartTemp = 0;
function handleClick(itemCart) {
    console.log('itemCart')
    console.log(itemCart)
    cartTemp += 1;
    cartButton.innerHTML = `<i class="fas fa-shopping-cart"></i>(${cartTemp})`;
}