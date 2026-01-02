// --- Cart & Wishlist Count Badges ---
function updateCounts() {
	// Cart
	const cart = JSON.parse(localStorage.getItem('cart') || '[]');
	const cartCount = cart.reduce((sum, p) => sum + (p.quantity || 1), 0);
	const cartBadge = document.getElementById('cart-count');
	if (cartBadge) {
		cartBadge.textContent = cartCount;
		cartBadge.style.display = cartCount > 0 ? 'inline-block' : 'none';
	}
	// Wishlist
	const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
	const wishlistCount = wishlist.length;
	const wishlistBadge = document.getElementById('wishlist-count');
	if (wishlistBadge) {
		wishlistBadge.textContent = wishlistCount;
		wishlistBadge.style.display = wishlistCount > 0 ? 'inline-block' : 'none';
	}
}

document.addEventListener('DOMContentLoaded', updateCounts);
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
			updateCounts();
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
				updateCounts();
				alert('Added to wishlist!');
			} else {
				alert('Already in wishlist!');
			}
		});
	});

	// Remove from Cart
	document.querySelectorAll('.remove-from-cart').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let cart = getStorage('cart');
			cart = cart.filter(p => p.name !== name);
			setStorage('cart', cart);
			updateCounts();
			// Remove row from UI or reload for simplicity
			const row = this.closest('tr');
			if (row) row.remove();
		});
	});

	// Remove from Wishlist
	document.querySelectorAll('.remove-from-wishlist').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let wishlist = getStorage('wishlist');
			wishlist = wishlist.filter(p => p.name !== name);
			setStorage('wishlist', wishlist);
			updateCounts();
			const card = this.closest('.group');
			if (card) card.remove();
		});
	});
});
