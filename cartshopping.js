// Cart class definition
class Cart {
    constructor() {
        this.items = [];
    }

    addItem(item) {
        this.items.push(item);
    }

    removeItem(index) {
        this.items.splice(index, 1);
    }

    getTotalItems() {
        return this.items.length;
    }
}

// Initialize cart
const shoppingCart = new Cart();

// Function to show/hide cart container
function showCart() {
    const cartContainer = document.getElementById('cart-container');
    cartContainer.style.display = cartContainer.style.display === 'none' ? 'block' : 'none';

    // Update cart count
    const cartCount = document.getElementById('cart-count');
    cartCount.textContent = shoppingCart.getTotalItems();
}
