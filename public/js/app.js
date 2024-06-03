document.addEventListener("DOMContentLoaded", function() {
  const minusBtn = document.querySelector(".minus-btn");
  const plusBtn = document.querySelector(".plus-btn");
  const qtyInput = document.querySelector(".qty-input");

  minusBtn.addEventListener("click", function() {
    let qty = parseInt(qtyInput.value);
    if (qty > 1) {
      qtyInput.value = qty - 1;
    }
  });

  plusBtn.addEventListener("click", function() {
    let qty = parseInt(qtyInput.value);
    qtyInput.value = qty + 1;
  });
});

let cart = [];
let total = 0;

function addToCart(product, price) {
    cart.push({ product, price });
    total += price;
    updateCart();
}

function updateCart() {
    const cartItemsDiv = document.getElementById('cart-items');
    cartItemsDiv.innerHTML = '';
    cart.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.textContent = `${item.product} - ${item.price}`;
        cartItemsDiv.appendChild(itemDiv);
    });
    document.getElementById('cart-total').textContent = total;
}

function toggleCartPopup() {
    const cartPopup = document.getElementById('cart-popup');
    if (cartPopup.style.display === 'block') {
        cartPopup.style.display = 'none';
    } else {
        cartPopup.style.display = 'block';
    }
}