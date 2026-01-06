import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// ========================================
// PREMIUM QUICK VIEW MODAL
// ========================================
window.openQuickView = function(productData) {
	const modal = document.getElementById('quick-view-modal');
	if (!modal) return;

	// Populate modal with product data
	modal.querySelector('#qv-image').src = productData.image;
	modal.querySelector('#qv-image').alt = productData.name;
	modal.querySelector('#qv-name').textContent = productData.name;
	modal.querySelector('#qv-subtitle').textContent = productData.subtitle || '';
	modal.querySelector('#qv-price').textContent = `$${productData.price}`;
	modal.querySelector('#qv-add-to-cart').dataset.productName = productData.name;
	modal.querySelector('#qv-add-to-cart').dataset.productPrice = productData.price;
	modal.querySelector('#qv-add-to-cart').dataset.productImage = productData.image;
	modal.querySelector('#qv-product-link').href = productData.url || '#';

	// Show modal
	modal.classList.remove('hidden');
	modal.classList.add('flex');
	document.body.style.overflow = 'hidden';
	
	// Animate in
	setTimeout(() => {
		modal.querySelector('.modal-content').classList.add('scale-100', 'opacity-100');
		modal.querySelector('.modal-content').classList.remove('scale-95', 'opacity-0');
	}, 10);
};

window.closeQuickView = function() {
	const modal = document.getElementById('quick-view-modal');
	if (!modal) return;

	// Animate out
	modal.querySelector('.modal-content').classList.remove('scale-100', 'opacity-100');
	modal.querySelector('.modal-content').classList.add('scale-95', 'opacity-0');
	
	setTimeout(() => {
		modal.classList.add('hidden');
		modal.classList.remove('flex');
		document.body.style.overflow = '';
	}, 200);
};

// ========================================
// SCROLL ANIMATIONS
// ========================================
const observeElements = () => {
	const elements = document.querySelectorAll('.scroll-animate');
	
	const observer = new IntersectionObserver((entries) => {
		entries.forEach((entry, index) => {
			if (entry.isIntersecting) {
				setTimeout(() => {
					entry.target.classList.add('animate-fade-in-up');
					entry.target.style.animationFillMode = 'forwards';
				}, index * 100); // Stagger delay
				observer.unobserve(entry.target);
			}
		});
	}, {
		threshold: 0.1,
		rootMargin: '0px 0px -50px 0px'
	});

	elements.forEach(el => observer.observe(el));
};

// Initialize on page load
document.addEventListener('DOMContentLoaded', observeElements);

// ========================================
// PARALLAX COLLECTION CARDS
// ========================================
const initParallax = () => {
	const cards = document.querySelectorAll('[data-parallax="true"]');
	
	cards.forEach(card => {
		const image = card.querySelector('[data-parallax-speed]');
		if (!image) return;

		const parallaxSpeed = parseFloat(image.dataset.parallaxSpeed) || 0.5;

		card.addEventListener('mousemove', (e) => {
			const rect = card.getBoundingClientRect();
			const x = e.clientX - rect.left;
			const y = e.clientY - rect.top;
			
			const centerX = rect.width / 2;
			const centerY = rect.height / 2;
			
			const distX = (x - centerX) * parallaxSpeed;
			const distY = (y - centerY) * parallaxSpeed;
			
			image.style.transform = `translate(${distX * 0.1}px, ${distY * 0.1}px) scale(1.05)`;
		});

		card.addEventListener('mouseleave', () => {
			image.style.transform = 'translate(0, 0) scale(1)';
		});

		// Scroll parallax effect
		window.addEventListener('scroll', () => {
			const rect = card.getBoundingClientRect();
			const scrollY = window.scrollY;
			const cardTop = scrollY + rect.top;
			const parallaxOffset = (scrollY - cardTop) * parallaxSpeed;
			
			// Only apply if in viewport
			if (rect.top < window.innerHeight && rect.bottom > 0) {
				image.style.backgroundPosition = `0 ${parallaxOffset}px`;
			}
		});
	});
};

document.addEventListener('DOMContentLoaded', initParallax);

// ========================================
// STORAGE & HELPERS
// ========================================
const getStorage = key => JSON.parse(localStorage.getItem(key) || '[]');
const setStorage = (key, arr) => localStorage.setItem(key, JSON.stringify(arr));

function updateCounts() {
	const cart = getStorage('cart');
	const cartCount = cart.reduce((sum, p) => sum + (p.quantity || 1), 0);
	const cartBadge = document.getElementById('cart-count');
	if (cartBadge) {
		cartBadge.textContent = cartCount;
		cartBadge.style.display = cartCount > 0 ? 'inline-block' : 'none';
	}

	const wishlist = getStorage('wishlist');
	const wishlistCount = wishlist.length;
	const wishlistBadge = document.getElementById('wishlist-count');
	if (wishlistBadge) {
		wishlistBadge.textContent = wishlistCount;
		wishlistBadge.style.display = wishlistCount > 0 ? 'inline-block' : 'none';
	}
}

function showToast(message) {
	let toast = document.getElementById('toast');
	if (!toast) {
		toast = document.createElement('div');
		toast.id = 'toast';
		Object.assign(toast.style, {
			position: 'fixed',
			left: '50%',
			bottom: '24px',
			transform: 'translateX(-50%)',
			background: '#111',
			color: '#fff',
			padding: '10px 16px',
			borderRadius: '9999px',
			boxShadow: '0 10px 30px rgba(0,0,0,0.15)',
			zIndex: '9999',
			fontSize: '14px',
			opacity: '0',
			transition: 'opacity 0.2s ease, transform 0.2s ease'
		});
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

function trapFocus(container, onClose) {
	const focusable = container.querySelectorAll('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
	if (!focusable.length) return;
	const first = focusable[0];
	const last = focusable[focusable.length - 1];
	function handleKey(e) {
		if (e.key === 'Escape') {
			onClose();
			return;
		}
		if (e.key !== 'Tab') return;
		if (e.shiftKey && document.activeElement === first) {
			e.preventDefault();
			last.focus();
		} else if (!e.shiftKey && document.activeElement === last) {
			e.preventDefault();
			first.focus();
		}
	}
	container.addEventListener('keydown', handleKey);
	first.focus();
	return () => container.removeEventListener('keydown', handleKey);
}

// Seed demo data once if empty
function seedDemo() {
	const alreadySeeded = localStorage.getItem('demoSeeded');
	if (alreadySeeded) return;
	const demoCart = [
		{ name: 'Classic T-Shirt', price: 99, image: '/images/product1.jpg', description: 'Premium cotton, modern fit.', quantity: 1 },
		{ name: 'Summer Shorts', price: 59, image: '/images/product4.jpg', description: 'Lightweight and cool.', quantity: 2 },
	];
	const demoWishlist = [
		{ name: 'Modern Polo', price: 89, image: '/images/product2.jpg', description: 'Soft, stylish, and comfortable.' },
		{ name: 'Linen Shirt', price: 109, image: '/images/product5.jpg', description: 'Breathable, elegant, timeless.' },
	];
	if (!getStorage('cart').length) setStorage('cart', demoCart);
	if (!getStorage('wishlist').length) setStorage('wishlist', demoWishlist);
	localStorage.setItem('demoSeeded', '1');
}

function renderCart() {
	const tbody = document.getElementById('cart-items');
	const empty = document.getElementById('cart-empty');
	const subtotalEl = document.getElementById('cart-subtotal');
	if (!tbody || !subtotalEl || !empty) return;

	const cart = getStorage('cart');
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
					<div class="flex items-center gap-2">
						<button class="qty-decrease px-2 py-1 border rounded" data-product-name="${item.name}">-</button>
						<input type="number" min="1" value="${item.quantity || 1}" class="w-16 border rounded px-2 py-1 text-center" readonly />
						<button class="qty-increase px-2 py-1 border rounded" data-product-name="${item.name}">+</button>
					</div>
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

	tbody.querySelectorAll('.remove-from-cart').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let cartData = getStorage('cart');
			cartData = cartData.filter(p => p.name !== name);
			setStorage('cart', cartData);
			updateCounts();
			renderCart();
			renderMiniCart();
			showToast('Removed from cart');
		});
	});

	tbody.querySelectorAll('.qty-decrease').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let cartData = getStorage('cart');
			const idx = cartData.findIndex(p => p.name === name);
			if (idx > -1 && cartData[idx].quantity > 1) {
				cartData[idx].quantity -= 1;
				setStorage('cart', cartData);
				updateCounts();
				renderCart();
				renderMiniCart();
			}
		});
	});

	tbody.querySelectorAll('.qty-increase').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let cartData = getStorage('cart');
			const idx = cartData.findIndex(p => p.name === name);
			if (idx > -1) {
				cartData[idx].quantity = (cartData[idx].quantity || 1) + 1;
				setStorage('cart', cartData);
				updateCounts();
				renderCart();
				renderMiniCart();
			}
		});
	});
}

function renderWishlist() {
	const grid = document.getElementById('wishlist-grid');
	const empty = document.getElementById('wishlist-empty');
	if (!grid || !empty) return;

	const wishlist = getStorage('wishlist');
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

	grid.querySelectorAll('.add-to-cart').forEach(btn => {
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
			renderMiniCart();
			showToast('Added to cart');
		});
	});

	grid.querySelectorAll('.remove-from-wishlist').forEach(btn => {
		btn.addEventListener('click', function () {
			const name = this.dataset.productName;
			let wishlistData = getStorage('wishlist');
			wishlistData = wishlistData.filter(p => p.name !== name);
			setStorage('wishlist', wishlistData);
			updateCounts();
			renderWishlist();
			showToast('Removed from wishlist');
		});
	});
}

function renderMiniCart(opening = false) {
	const panel = document.getElementById('mini-cart-panel');
	const list = document.getElementById('mini-cart-items');
	const empty = document.getElementById('mini-cart-empty');
	const subtotalEl = document.getElementById('mini-cart-subtotal');
	if (!panel || !list || !empty || !subtotalEl) return;

	const cart = getStorage('cart');
	list.innerHTML = '';
	let subtotal = 0;

	if (!cart.length) {
		empty.classList.remove('hidden');
	} else {
		empty.classList.add('hidden');
		cart.forEach(item => {
			const total = (Number(item.price) || 0) * (Number(item.quantity) || 1);
			subtotal += total;
			const row = document.createElement('div');
			row.className = 'p-3 flex items-center gap-3';
			row.innerHTML = `
				<img src="${item.image}" alt="${item.name}" class="w-12 h-12 rounded object-cover border" />
				<div class="flex-1">
					<p class="text-sm font-semibold leading-tight">${item.name}</p>
					<p class="text-xs text-gray-500">Qty ${item.quantity || 1} · $${item.price}</p>
				</div>
				<span class="text-sm font-semibold">$${total}</span>
			`;
			list.appendChild(row);
		});
	}

	subtotalEl.textContent = `$${subtotal}`;

	if (opening) {
		panel.classList.remove('hidden');
		panel.setAttribute('aria-hidden', 'false');
	} else {
		panel.setAttribute('aria-hidden', panel.classList.contains('hidden') ? 'true' : 'false');
	}
}

// Global add-to-cart / add-to-wishlist on product cards
function bindGlobalAddButtons() {
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
			renderMiniCart();
			showToast('Added to cart');
		});
	});

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
}

document.addEventListener('DOMContentLoaded', () => {
	seedDemo();
	bindGlobalAddButtons();
	updateCounts();
	renderCart();
	renderWishlist();
	renderMiniCart();

	// Mobile menu toggle with basic focus trap
	const mobileToggle = document.getElementById('mobile-toggle');
	const mobileMenu = document.getElementById('mobile-menu');
	const mobileClose = document.getElementById('mobile-close');
	let releaseMobileTrap = null;
	function closeMobileMenu() {
		if (!mobileMenu) return;
		mobileMenu.classList.add('hidden');
		mobileToggle?.setAttribute('aria-expanded', 'false');
		releaseMobileTrap?.();
		releaseMobileTrap = null;
		mobileToggle?.focus();
	}
	function openMobileMenu() {
		if (!mobileMenu) return;
		mobileMenu.classList.remove('hidden');
		mobileToggle?.setAttribute('aria-expanded', 'true');
		releaseMobileTrap = trapFocus(mobileMenu, closeMobileMenu);
	}
	mobileToggle?.addEventListener('click', () => {
		if (mobileMenu?.classList.contains('hidden')) {
			openMobileMenu();
		} else {
			closeMobileMenu();
		}
	});
	mobileClose?.addEventListener('click', closeMobileMenu);
	mobileMenu?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMobileMenu));
	document.addEventListener('click', e => {
		if (!mobileMenu || mobileMenu.classList.contains('hidden')) return;
		if (mobileMenu.contains(e.target) || mobileToggle?.contains(e.target)) return;
		closeMobileMenu();
	});
	document.addEventListener('keydown', e => {
		if (e.key === 'Escape' && mobileMenu && !mobileMenu.classList.contains('hidden')) closeMobileMenu();
	});

	// Mini-cart flyout toggle and render
	const cartToggle = document.getElementById('cart-toggle');
	const miniCartPanel = document.getElementById('mini-cart-panel');
	function closeMiniCart() {
		if (!miniCartPanel) return;
		miniCartPanel.classList.add('hidden');
		cartToggle?.setAttribute('aria-expanded', 'false');
	}
	function openMiniCart() {
		if (!miniCartPanel) return;
		renderMiniCart(true);
		miniCartPanel.classList.remove('hidden');
		cartToggle?.setAttribute('aria-expanded', 'true');
	}
	cartToggle?.addEventListener('click', e => {
		e.stopPropagation();
		if (miniCartPanel?.classList.contains('hidden')) {
			openMiniCart();
		} else {
			closeMiniCart();
		}
	});
	document.addEventListener('click', e => {
		if (!miniCartPanel || miniCartPanel.classList.contains('hidden')) return;
		if (miniCartPanel.contains(e.target) || cartToggle?.contains(e.target)) return;
		closeMiniCart();
	});
	document.addEventListener('keydown', e => {
		if (e.key === 'Escape' && miniCartPanel && !miniCartPanel.classList.contains('hidden')) closeMiniCart();
	});
	miniCartPanel?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMiniCart));
});
