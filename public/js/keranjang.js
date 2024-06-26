document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    const cartItemsList = document.querySelector('.cart-items');
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
        const product = this.parentElement;
        const productName = product.querySelector('h2').textContent;
        const productPrice = product.querySelector('p').textContent;
  
        const cartItem = document.createElement('li');
        cartItem.textContent = `${productName} - ${productPrice}`;
        cartItemsList.appendChild(cartItem);
      });
    });
  });
  
  $(document).on('click', '.remove-item', function(e) {
    e.preventDefault();
    var cartId = $(this).data('id');

    $.ajax({
        url: '{{ route("cart.remove") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            cart_id: cartId
        },
        success: function(response) {
            if (response.success) {
                // Refresh the cart popup
                $('#cartBtn').click();
            }
        }
    });
});
