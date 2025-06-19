document.addEventListener('DOMContentLoaded', () => {
    let cart = [];
    const bottomTab = document.querySelector('.bottom-tab');
    const itemCount = document.querySelector('.item-count');
    const totalPrice = document.querySelector('.total-price');
    const addToPayButtons = document.querySelectorAll('.add-to-pay-btn');

    addToPayButtons.forEach(button => {
        button.addEventListener('click', () => {
            const price = parseInt(button.getAttribute('data-price'));
            cart.push(price);

            // Cập nhật số lượng và tổng tiền
            itemCount.textContent = `${cart.length} sản phẩm`;
            const total = cart.reduce((sum, item) => sum + item, 0);
            totalPrice.textContent = `${total.toLocaleString('vi-VN')}đ`;

            // Hiển thị bottom-tab khi có ít nhất 1 sản phẩm
            if (cart.length === 1) {
                bottomTab.style.display = 'block';
            }
        });
    });

    // Xử lý hiệu ứng click
    addToPayButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.style.transform = 'scale(0.9)';
            setTimeout(() => {
                button.style.transform = 'scale(1)';
            }, 100);
        });
    });
});