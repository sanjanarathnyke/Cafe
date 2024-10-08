document.addEventListener("DOMContentLoaded", function() {
    // Function to update the cart subtotal
    function updateSubtotal() {
        const quantityInputs = document.querySelectorAll('.quantity');
        let total = 0;

        quantityInputs.forEach(input => {
            const quantity = parseInt(input.value) || 0; // Get the quantity
            const price = parseFloat(input.dataset.price); // Get the price from data attribute
            total += quantity * price; // Calculate total
        });

        // Update the cart subtotal display
        document.getElementById('cart-subtotal').innerText = `$${total.toFixed(2)}`;
    }

    // Event listeners for quantity buttons
    document.querySelectorAll('.quantity-up').forEach(button => {
        button.addEventListener('click', function() {
            const input = button.previousElementSibling;
            input.value = parseInt(input.value) + 1; // Increase quantity
            updateSubtotal(); // Update subtotal
        });
    });

    document.querySelectorAll('.quantity-down').forEach(button => {
        button.addEventListener('click', function() {
            const input = button.nextElementSibling;
            const newValue = Math.max(1, parseInt(input.value) - 1); // Decrease quantity but keep at least 1
            input.value = newValue;
            updateSubtotal(); // Update subtotal
        });
    });

    // Example function to add a new item to the cart
    document.getElementById('add-item').addEventListener('click', function() {
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td>Example Item 2</td>
            <td class="quantity">
                <div class="quantity-input">
                    <button class="quantity-down" type="button"><i class="far fa-minus"></i></button>
                    <input class="quantity" type="number" value="1" name="quantity" data-price="300" readonly>
                    <button class="quantity-up" type="button"><i class="far fa-plus"></i></button>
                </div>
            </td>
            <td class="price" data-price="300">$300</td>
        `;
        document.querySelector('tbody').appendChild(newRow);
        updateSubtotal(); // Update subtotal after adding a new item

        // Re-attach event listeners for the new item
        newRow.querySelector('.quantity-up').addEventListener('click', function() {
            const input = newRow.querySelector('.quantity');
            input.value = parseInt(input.value) + 1; // Increase quantity
            updateSubtotal(); // Update subtotal
        });

        newRow.querySelector('.quantity-down').addEventListener('click', function() {
            const input = newRow.querySelector('.quantity');
            const newValue = Math.max(1, parseInt(input.value) - 1); // Decrease quantity but keep at least 1
            input.value = newValue;
            updateSubtotal(); // Update subtotal
        });
    });

    // Initial subtotal calculation
    updateSubtotal();
});
