document.addEventListener("DOMContentLoaded", function () {
    // Dummy cart data (replace this with data fetched from the server)
    const cartItems = [
        { id: 1, name: "Product 1", price: 20, quantity: 2, image: "path/to/product1.jpg" },
        { id: 2, name: "Product 2", price: 30, quantity: 1, image: "path/to/product2.jpg" }
        // Add more items as needed
    ];

    const cartTableBody = document.getElementById("cartTableBody");
    const cartSummary = document.getElementById("cartSummary");

    // Function to render cart items in the table
    function renderCartItems() {
        cartTableBody.innerHTML = "";
        let totalPrice = 0;
        cartItems.forEach(item => {
            const totalItemPrice = item.price * item.quantity;
            totalPrice += totalItemPrice;
            cartTableBody.innerHTML += `
                <tr>
                    <td><img src="${item.image}" alt="${item.name}" width="50"></td>
                    <td>${item.name}</td>
                    <td>$${item.price}</td>
                    <td>${item.quantity}</td>
                    <td><button onclick="removeItem(${item.id})">Remove</button></td>
                </tr>
            `;
        });

        // Render cart summary
        cartSummary.innerHTML = `
            <div class="purchase-summary">
                Total: $${totalPrice.toFixed(2)}
            </div>
        `;
    }

    // Initial rendering
    renderCartItems();

    // Function to remove item from the cart
    window.removeItem = function (itemId) {
        const index = cartItems.findIndex(item => item.id === itemId);
        if (index !== -1) {
            cartItems.splice(index, 1);
            renderCartItems();
        }
    };

    // Purchase button click event
    const purchaseBtn = document.getElementById("purchaseBtn");
    purchaseBtn.addEventListener("click", function () {
        // Use AJAX or fetch API to send cart items to the server-side PHP script (for storing in the order table)
        // For example purposes, let's assume the server-side script is processOrder.php
        fetch("processOrder.php", {
            method: "POST",
            body: JSON.stringify(cartItems),
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response from the server (if needed)
            console.log(data);
            // Optionally, redirect to a thank you page or show a success message
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
});
