document.addEventListener('DOMContentLoaded', () => {
    const searchIcon = document.getElementById('search-icon');
    const searchMenu = document.getElementById('search-menu');
    const overlay = document.getElementById('search-overlay');
    const closeButton = document.getElementById('close-button');

    searchIcon.addEventListener('click', function() {
        const isActive = searchMenu.classList.toggle('active');
        overlay.classList.toggle('active');

        const headers = document.querySelectorAll('header');
        headers.forEach(header => {
            header.style.visibility = isActive ? 'hidden' : 'visible';
            header.style.opacity = isActive ? '0' : '1';
        });
    });

    closeButton.addEventListener('click', () => {
        searchMenu.classList.remove('active');
        overlay.classList.remove('active');

        const headers = document.querySelectorAll('header');
        headers.forEach(header => {
            header.style.visibility = 'visible';
            header.style.opacity = '1';
        });
    });

    document.addEventListener('click', function(event) {
        const headers = document.querySelectorAll('header');

        if (!searchMenu.contains(event.target) && !searchIcon.contains(event.target)) {
            searchMenu.classList.remove('active');
            overlay.classList.remove('active');

            headers.forEach(header => {
                header.style.visibility = 'visible';
                header.style.opacity = '1';
            });
        }
    });
});



document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search-input');
    const clearButton = document.getElementById('clear-button');

    searchInput.addEventListener('input', () => {
        clearButton.style.display = searchInput.value ? 'block' : 'none';
    });

    clearButton.addEventListener('click', () => {
        searchInput.value = '';
        clearButton.style.display = 'none';
        searchInput.focus();
    });
});










/*CART*/

document.addEventListener('DOMContentLoaded', () => {
    const cartIcon = document.querySelector('.cart-image');
    const cartMenu = document.getElementById('cart-menu');
    const cartOverlay = document.getElementById('cart-overlay');
    const cartCloseButton = document.getElementById('cart-close-button');
    const cartContent = document.getElementById('cart-content');
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    const recommendedItems = `
        <div class="recommended-items">
            <h3>Recommended</h3>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ul>
        </div>
    `;

    function updateCartContent() {
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        if (cartItems.length === 0) {
            cartContent.innerHTML = `<p>Cart is empty</p>${recommendedItems}`;
        } else {
            cartContent.innerHTML = `
                <ul>
                    ${cartItems.map(item => `<li>${item}</li>`).join('')}
                </ul>
            `;
        }
    }

    function addToCart(item) {
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        cartItems.push(item);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        updateCartContent();
    }

    cartIcon.addEventListener('click', function() {
        const isActive = cartMenu.classList.toggle('active');
        cartOverlay.classList.toggle('active');
        updateCartContent();

        // Hide header
        const headers = document.querySelectorAll('header');
        headers.forEach(header => {
            header.style.visibility = isActive ? 'hidden' : 'visible';
            header.style.opacity = isActive ? '0' : '1';
        });
    });

    cartCloseButton.addEventListener('click', () => {
        cartMenu.classList.remove('active');
        cartOverlay.classList.remove('active');

        // Show all headers
        const headers = document.querySelectorAll('header');
        headers.forEach(header => {
            header.style.visibility = 'visible';
            header.style.opacity = '1';
        });
    });

    document.addEventListener('click', function(event) {
        const headers = document.querySelectorAll('header');

        if (!cartMenu.contains(event.target) && !cartIcon.contains(event.target)) {
            cartMenu.classList.remove('active');
            cartOverlay.classList.remove('active');

            // Show all headers
            headers.forEach(header => {
                header.style.visibility = 'visible';
                header.style.opacity = '1';
            });
        }
    });

    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const item = button.getAttribute('data-item');
            addToCart(item);
        });
    });
});
