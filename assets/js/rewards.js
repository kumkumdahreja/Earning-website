document.addEventListener('DOMContentLoaded', function() {
    // Promocode redemption
    const redeemBtn = document.querySelector('.redeem-btn');
    const promocodeInput = document.querySelector('.promocode-input');
    
    redeemBtn.addEventListener('click', function() {
        const code = promocodeInput.value.trim();
        
        if (!code) {
            alert('Please enter a promocode');
            return;
        }
        
        // Simulate promocode redemption
        console.log('Redeeming code:', code);
        alert(`Promocode "${code}" has been redeemed!`);
        promocodeInput.value = '';
    });
    
    // Challenge completion
    const challengeCheckbox = document.querySelector('.challenge-checkbox');
    
    challengeCheckbox.addEventListener('change', function() {
        if (this.checked) {
            console.log('Challenge completed!');
            // Add logic to award Robux
        }
    });
    
    // Level card interaction
    const levelCards = document.querySelectorAll('.level-card');
    
    levelCards.forEach(card => {
        card.addEventListener('click', function() {
            // Add logic for level information/requirements
            const level = this.querySelector('.level-header').textContent;
            console.log(`Clicked on ${level}`);
        });
    });
});