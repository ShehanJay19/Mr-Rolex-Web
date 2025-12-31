import './bootstrap';

// Vite Test - Interactive Button
document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('testButton');
    const clickCount = document.getElementById('clickCount');
    const hmrStatus = document.getElementById('hmr-status');
    
    let count = 0;
    
    if (button && clickCount) {
        button.addEventListener('click', () => {
            count++;
            clickCount.textContent = `🎉 Button clicked ${count} time${count !== 1 ? 's' : ''}!`;
            
            // Add fun animation
            button.classList.add('animate-bounce');
            setTimeout(() => {
                button.classList.remove('animate-bounce');
            }, 500);
        });
    }
    
    // Check if HMR is active
    if (import.meta.hot) {
        console.log('✅ Vite HMR is active!');
        if (hmrStatus) {
            hmrStatus.textContent = 'Hot reload active ✓';
        }
        
        // Accept HMR updates
        import.meta.hot.accept(() => {
            console.log('🔥 HMR update received!');
        });
    }
    
    console.log('🚀 Vite is working! JavaScript loaded successfully!');
});
