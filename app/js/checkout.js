document.addEventListener('DOMContentLoaded', () => {
  const checkoutButtons = document.querySelectorAll('.primary-btn--checkout-btn--active');
  
  checkoutButtons.forEach(button => {
    button.addEventListener('click', (e) => {
      if (button.textContent.includes('Order with Credit Card')) {
        localStorage.setItem('checkoutTimestamp', Date.now().toString());
      }
    });
  });
});