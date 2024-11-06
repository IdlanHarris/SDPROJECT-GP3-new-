const cart = [];
let cartTotal = 0;

function toggleCart() {
    document.getElementById('cart-sidebar').classList.toggle('open');
}

function addToCart(itemName, itemPrice, quantityId) {
    const quantity = parseInt(document.getElementById(quantityId).value);
    
    // Check if the item is already in the cart
    const existingItem = cart.find(item => item.name === itemName);

    if (existingItem) {
        // If the item exists, update the quantity
        existingItem.quantity += quantity;
    } else {
        // If the item doesn't exist, add it to the cart
        const item = { name: itemName, price: parseFloat(itemPrice), quantity: quantity };
        cart.push(item);
    }

    // Update the total
    cartTotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
    document.getElementById('cart-total').textContent = cartTotal.toFixed(2);

    // Update the cart item count
    document.getElementById('cart-count').textContent = cart.length;

    // Update the cart display
    updateCartDisplay();
    toggleCart();
}

function updateCartDisplay() {
    const cartItemsDiv = document.getElementById('cart-items');
    cartItemsDiv.innerHTML = ''; // Clear previous items

    cart.forEach((item) => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('cart-item');
        itemDiv.innerHTML = `
            <p>${item.name} - RM ${item.price.toFixed(2)} x ${item.quantity}</p>
        `;
        cartItemsDiv.appendChild(itemDiv);
    });
}
