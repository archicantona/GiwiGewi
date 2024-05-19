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
