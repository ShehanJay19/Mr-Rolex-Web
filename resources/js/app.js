import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;


Alpine.start();

// --- Add to Cart & Wishlist Interactivity ---
document.addEventListener('DOMContentLoaded', () => {
	// Helper: get and set localStorage arrays
	function getStorage(key) {
		return JSON.parse(localStorage.getItem(key) || '[]');
	}
	function setStorage(key, arr) {
		localStorage.setItem(key, JSON.stringify(arr));
	}

	// Add to Cart
	document.querySelectorAll('.add-to-cart').forEach(btn => {
		btn.addEventListener('click', function () {
			const product = {
				name: this.dataset.productName,
				price: this.dataset.productPrice,
				image: this.dataset.productImage,
				description: this.dataset.productDescription,
				quantity: 1
			};
			let cart = getStorage('cart');
			// If already in cart, increase quantity
			const idx = cart.findIndex(p => p.name === product.name);
			if (idx > -1) {
				cart[idx].quantity += 1;
			} else {
				cart.push(product);
			}
			setStorage('cart', cart);
			// Optionally: show notification
			alert('Added to cart!');
		});
	});

	// Add to Wishlist
	document.querySelectorAll('.add-to-wishlist').forEach(btn => {
		btn.addEventListener('click', function () {
			const product = {
				name: this.dataset.productName,
				price: this.dataset.productPrice,
				image: this.dataset.productImage,
				description: this.dataset.productDescription
			};
			let wishlist = getStorage('wishlist');
			if (!wishlist.find(p => p.name === product.name)) {
				wishlist.push(product);
				setStorage('wishlist', wishlist);
				alert('Added to wishlist!');
			} else {
				alert('Already in wishlist!');
			}
		});
	});
});
