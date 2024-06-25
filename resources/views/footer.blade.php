<footer class="footer"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="footer-section">
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="Profil" width="160">
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="footer-section">
                    <h2>GIWIGEWI</h2>
                    <p class="text-start">Jl.Budi Utomo 3, Kelurahan Beringin Raya, Kecamatan Muara Bangkahulu Kota Bengkulu</p>
                </div>
            </div>
            <div class="col-1">
                <div class="footer-section">
                </div>
            </div>
            <div class="col-1">
                <div class="footer-section">
                </div>
            </div>
            <div class="col-1">
                <div class="footer-section">
                </div>
            </div>
            <div class="col-2">
                <div class="footer-section">
                    <h2 class="text-start">LINKS</h2>
                    <ul class="text-start">
                        <li><a href="/about">Tentang Kami</a></li>
                        <li><a href="/produk">Produk Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div class="footer-section">
                    <div class="row text-start">
                        <div class="col-12">   
                            <h2>SUPPORT</h2>
                            <ul>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-2">
                            <a href="https://www.tiktok.com/@giwigewi.official" target="_blank">
                                <img src="{{ asset('img/tiktok.webp') }}" alt="TikTok" style="width: 24px;">
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="https://www.instagram.com/giwigewi.official/" target="_blank">
                                <img src="{{ asset('img/instagram.png') }}" alt="Instagram" style="width: 24px;">
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="https://shopee.co.id/giwigewiofficial" target="_blank">
                                <img src="{{ asset('img/shopee.webp') }}" alt="Shopee" style="width: 24px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom text-center">
            <hr>
            <p>© GIWIGEWI 2024 All Rights Reserved</p>
        </div>
    </div>
    
</footer>


<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        
        // Tentukan base URL untuk gambar
        const baseUrl = "{{ asset('img/upload') }}";
        // Get the popup
        var popup = document.getElementById("cartPopup");
        
        // Get the button that opens the popup
        var btn = document.getElementById("cartBtn");
        console.log(btn)
        
        var btnCheckout = document.getElementById("checkoutBtn");

        var btnAddProduct = document.getElementById("addProductToCart");
        
        var span = document.getElementsByClassName("close")[0]; 

        if (btnAddProduct) {
            btnAddProduct.onclick = function() {
                // Check if there's a success message from PHP
                // var successMessage = "{{ session('success') }}";
                var successMessage = "Produk berhasil ditambahkan ke keranjang!";
                if (successMessage) {
                    alert(successMessage); // Show an alert with the success message
                }
            }
        }
        
        btn.onclick = function() {
            popup.style.display = "block";
            $.get("{{ route('cart.get') }}", function(data) {
                var cartItems = "";
                var cartTotal = 0;
                data.forEach(function(item) {
                    cartItems += `
                <div class="cart-item">
                    <img src="${baseUrl}/${item.product.picture}" alt="${item.product.name}" height="50">
                    <div style="width: 130px;">${item.product.name}</div>
                    <p>Quantity: ${item.quantity}</p>
                    <p>Rp. ${item.product.price * item.quantity}</p>
                    <a href="/cart/remove" class="remove-item btn" data-id="${item.id}">Hapus</a>
                </div>
            `;
                    cartTotal += item.product.price * item.quantity;
                });
                var formattedTotal = number_format(cartTotal, 0, ',', '.');
                $("#cartItems").html(cartItems);
                $("#cartTotal").html(`<h3>Subtotal: Rp. ${formattedTotal}</h3>`);
            });
        }

        btnCheckout.onclick = function() {
            // Check if there's a success message from PHP
            // var successMessage = "{{ session('success') }}";
            var successMessage = "Checkout berhasil!";
            if (successMessage) {
                alert(successMessage); // Show an alert with the success message
            }
        }
        
        function number_format(number, decimals, decPoint, thousandsSep) {
            decimals = decimals || 0;
            number = parseFloat(number);
            
            if (!decPoint || !thousandsSep) {
                decPoint = '.';
                thousandsSep = ',';
            }
            
            var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
            var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
            var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
            var formattedNumber = '';
            
            while (numbersString.length > 3) {
                formattedNumber += thousandsSep + numbersString.slice(-3);
                numbersString = numbersString.slice(0, -3);
            }
            
            return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? decPoint + decimalsString : '');
        }
        
        
        span.onclick = function() {
            popup.style.display = "none";
        }
        
        
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
        
        
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
                    alert(response.success);
                    // Refresh the cart popup
                    $('#cartBtn').click();
                },
                error: function(response) {
                    alert(response.responseJSON.error);
                }
            });
        });
    });
</script>
