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

// --- Cart & Wishlist Count Badges ---
function updateCounts() {
	const cart = JSON.parse(localStorage.getItem('cart') || '[]');
	const cartCount = cart.reduce((sum, p) => sum + (p.quantity || 1), 0);
	const cartBadge = document.getElementById('cart-count');
	if (cartBadge) {
		cartBadge.textContent = cartCount;
		cartBadge.style.display = cartCount > 0 ? 'inline-block' : 'none';
	}

	const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
	const wishlistCount = wishlist.length;
	const wishlistBadge = document.getElementById('wishlist-count');
	if (wishlistBadge) {
		wishlistBadge.textContent = wishlistCount;
		wishlistBadge.style.display = wishlistCount > 0 ? 'inline-block' : 'none';
	}
}

document.addEventListener('DOMContentLoaded', updateCounts);

// --- Toast helper ---
function showToast(message) {
	let toast = document.getElementById('toast');
	if (!toast) {
		toast = document.createElement('div');
		toast.id = 'toast';
		toast.style.position = 'fixed';
		toast.style.left = '50%';
		toast.style.bottom = '24px';
		toast.style.transform = 'translateX(-50%)';
		toast.style.background = '#111';
		toast.style.color = '#fff';
		toast.style.padding = '10px 16px';
		toast.style.borderRadius = '9999px';
		toast.style.boxShadow = '0 10px 30px rgba(0,0,0,0.15)';
		toast.style.zIndex = '9999';
		toast.style.fontSize = '14px';
		toast.style.opacity = '0';
		toast.style.transition = 'opacity 0.2s ease, transform 0.2s ease';
		document.body.appendChild(toast);
	}
	toast.textContent = message;
	toast.style.opacity = '1';
	toast.style.transform = 'translateX(-50%) translateY(-4px)';
	setTimeout(() => {
		toast.style.opacity = '0';
		toast.style.transform = 'translateX(-50%) translateY(0)';
	}, 1400);
}

// --- Rendering helpers ---
function renderCart() {
	const tbody = document.getElementById('cart-items');
	const empty = document.getElementById('cart-empty');
	const subtotalEl = document.getElementById('cart-subtotal');
	if (!tbody || !subtotalEl || !empty) return;

	const cart = JSON.parse(localStorage.getItem('cart') || '[]');
	tbody.innerHTML = '';
	let subtotal = 0;

	if (cart.length === 0) {
		empty.classList.remove('hidden');
	} else {
		empty.classList.add('hidden');
		cart.forEach(item => {
			const total = (Number(item.price) || 0) * (Number(item.quantity) || 1);
			subtotal += total;
			const row = document.createElement('tr');
			row.className = 'border-b hover:bg-gray-50 transition';
			row.innerHTML = `
				<td class="p-4 flex items-center gap-4">
					<img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded border">
					<span class="font-semibold">${item.name}</span>
				</td>
				<td class="p-4">$${item.price}</td>
				<td class="p-4">
					<input type="number" min="1" value="${item.quantity || 1}" class="w-16 border rounded px-2 py-1 text-center" readonly />
				</td>
				<td class="p-4 font-bold">$${total}</td>
				<td class="p-4">
					<button class="remove-from-cart text-red-500 hover:underline text-sm" data-product-name="${item.name}">Remove</button>
				</td>
			`;
			tbody.appendChild(row);
		});
	}

	subtotalEl.textContent = `$${subtotal}`;

	// Re-bind remove buttons after render
	tbody.querySelectorAll('.remove-from-cart').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let cartData = JSON.parse(localStorage.getItem('cart') || '[]');
			cartData = cartData.filter(p => p.name !== name);
			localStorage.setItem('cart', JSON.stringify(cartData));
			updateCounts();
			renderCart();
			showToast('Removed from cart');
		});
	});
}

function renderWishlist() {
	const grid = document.getElementById('wishlist-grid');
	const empty = document.getElementById('wishlist-empty');
	if (!grid || !empty) return;

	const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
	grid.innerHTML = '';

	if (wishlist.length === 0) {
		empty.classList.remove('hidden');
	} else {
		empty.classList.add('hidden');
		wishlist.forEach(item => {
			const card = document.createElement('div');
			card.className = 'relative group';
			card.innerHTML = `
				<div class="bg-white border border-[#E5E5E5] rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col">
					<div class="relative aspect-[3/4] w-full">
						<img src="${item.image}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300 rounded-t-xl" alt="${item.name}">
						<span class="absolute top-3 left-3 bg-black text-white text-xs px-3 py-1 rounded-full opacity-80">Wish</span>
					</div>
					<div class="p-5 flex-1 flex flex-col justify-between">
						<div>
							<h3 class="font-serif text-lg font-bold mb-1 text-[#111] group-hover:text-black transition">${item.name}</h3>
							<p class="text-xs text-[#6B6B6B] mb-3">${item.description || ''}</p>
						</div>
						<div class="flex items-center justify-between mt-auto gap-2">
							<span class="font-bold text-lg text-[#111]">$${item.price}</span>
							<button class="add-to-cart px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition text-xs font-semibold" data-product-name="${item.name}" data-product-price="${item.price}" data-product-image="${item.image}" data-product-description="${item.description || ''}">Add to Cart</button>
							<button class="remove-from-wishlist p-2 rounded-full border border-gray-200 bg-white hover:bg-red-100 transition" data-product-name="${item.name}" title="Remove">
								<svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/></svg>
							</button>
						</div>
					</div>
				</div>
			`;
			grid.appendChild(card);
		});
	}

	// Bind add-to-cart inside wishlist
	grid.querySelectorAll('.add-to-cart').forEach(btn => {
		btn.addEventListener('click', function () {
			const product = {
				name: this.dataset.productName,
				price: this.dataset.productPrice,
				image: this.dataset.productImage,
				description: this.dataset.productDescription,
				quantity: 1
			};
			let cart = JSON.parse(localStorage.getItem('cart') || '[]');
			const idx = cart.findIndex(p => p.name === product.name);
			if (idx > -1) {
				cart[idx].quantity += 1;
			} else {
				cart.push(product);
			}
			localStorage.setItem('cart', JSON.stringify(cart));
			updateCounts();
			showToast('Added to cart');
		});
	});

	// Bind remove-from-wishlist inside rendered cards
	grid.querySelectorAll('.remove-from-wishlist').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let wishlistData = JSON.parse(localStorage.getItem('wishlist') || '[]');
			wishlistData = wishlistData.filter(p => p.name !== name);
			localStorage.setItem('wishlist', JSON.stringify(wishlistData));
			updateCounts();
			renderWishlist();
			showToast('Removed from wishlist');
		});
	});
}

// --- Add to Cart & Wishlist Interactivity ---
document.addEventListener('DOMContentLoaded', () => {
	function getStorage(key) {
		return JSON.parse(localStorage.getItem(key) || '[]');
	}
	function setStorage(key, arr) {
		localStorage.setItem(key, JSON.stringify(arr));
	}

	// Add to Cart buttons on product cards
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
			const idx = cart.findIndex(p => p.name === product.name);
			if (idx > -1) {
				cart[idx].quantity += 1;
			} else {
				cart.push(product);
			}
			setStorage('cart', cart);
			updateCounts();
			showToast('Added to cart');
		});
	});

	// Add to Wishlist buttons on product cards
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
				showToast('Added to wishlist');
			} else {
				showToast('Already in wishlist');
			}
		});
	});

	// Initial render for cart and wishlist pages
	renderCart();
	renderWishlist();
});
