
<footer class="footer"> <a href="/">
        <img src="{{ asset('img/logo.png') }}" alt="Profil" width="160" class="mx-auto">
    </a>
    <div class="footer-section">
        <h2>GIWIGEWI</h2>
        <p>Jl.Budi Utomo 3, Kelurahan Beringin Raya,
            Kecamatan Muara Bangkahulu Kota Bengkulu</p>
    </div>
    <div class="footer-section">
        <h2>LINKS</h2>
        <ul>
            <li><a href="/about">  Tentang Kami</a></li>
            <li><a href="/produk">Produk Kami</a></li>
        </ul>
    </div>
    <div class="footer-section">
        <h2>SUPPORT</h2>
        <ul>
        <li><a href="/contact">Contact Us</a></li>
        </ul>
        <!-- Sisipkan ikon media sosial di sini -->
        <div class="social-icons">
            <a href="https://www.tiktok.com/@giwigewi.official" target="_blank">
                <img src="{{ asset('img/tiktok.webp') }}" alt="TikTok" style="width: 24px;">
            </a>
            <a href="https://www.instagram.com/giwigewi.official/" target="_blank">
                <img src="{{ asset('img/instagram.png') }}" alt="Instagram" style="width: 24px;">
            </a>
            <a href="https://shopee.co.id/giwigewiofficial" target="_blank">
                <img src="{{ asset('img/shopee.webp') }}" alt="Shopee" style="width: 24px;">
            </a>
        </div>
    </div>
    <div class="footer-bottom">
        <hr>
        <p>© GIWIGEWI 2024 All Rights Reserved</p>
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

        // Get the <span> element that closes the popup
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the popup
        btn.onclick = function() {
            popup.style.display = "block";
            $.get("{{ route('cart.get') }}", function(data) {
                var cartItems = "";
                var cartTotal = 0;
                data.forEach(function(item) {
                    cartItems += `
                            <div class="cart-item">
                            
                                <img src="${baseUrl}/${item.product.picture}" alt="${item.product.name}" height="50">
                                <div  style="width: 130px;">${item.product.name}</div>
                                <p>Quantity: ${item.quantity}</p>
                                <p>Rp. ${item.product.price * item.quantity}</p>
                                <a href="/cart/remove" class="remove-item" data-id="${item.id}">Hapus</a>
                            </div>
                        `;
                    cartTotal += item.product.price * item.quantity;
                });
                $("#cartItems").html(cartItems);
                $("#cartTotal").html(`<h3>Subtotal: Rp. ${cartTotal}</h3>`);
            });
        }

        // When the user clicks on <span> (x), close the popup
        span.onclick = function() {
            popup.style.display = "none";
        }

        // When the user clicks anywhere outside of the popup, close it
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }
    });
    // Remove item from cart
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
</script>