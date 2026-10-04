<script>
    // Custom JavaScript or jQuery can be added here
    document.addEventListener('DOMContentLoaded', function() {
        const minusButton = document.querySelector('.btn-number[data-type="minus"]');
        const plusButton = document.querySelector('.btn-number[data-type="plus"]');
        const quantityInput = document.querySelector('.quantity-input');

        minusButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        plusButton.addEventListener('click', function() {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue < 10) {
                quantityInput.value = currentValue + 1;
            }
        });

        const buttons = document.querySelectorAll('.btn-custom');
        buttons.forEach(button => {
            button.addEventListener('mouseover', function() {
                button.classList.add('hover');
            });

            button.addEventListener('mouseout', function() {
                button.classList.remove('hover');
            });

            button.addEventListener('click', function() {
                button.classList.add('clicked');
                setTimeout(() => {
                    button.classList.remove('clicked');
                }, 300);
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addToCartForm = document.querySelector('form[action="{{ route('cart.add') }}"]');
        const buyNowForm = document.querySelector('#buy-now-form');
        const addToCartQuantityInput = addToCartForm.querySelector('input[name="quantity"]');
        const buyNowQuantityInput = buyNowForm.querySelector('#buy-now-quantity');
        function updateBuyNowQuantity() {
            buyNowQuantityInput.value = addToCartQuantityInput.value;
        }
        addToCartQuantityInput.addEventListener('change', updateBuyNowQuantity);
        updateBuyNowQuantity();
    });
</script>
