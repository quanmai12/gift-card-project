// Dữ liệu mẫu (thay thế cho database)
const products = [
    { id: 1, name: "Dalat City Tour", category: "Du lịch", price: 400000, image: "https://via.placeholder.com/175", brand: "Starbucks" },
    { id: 2, name: "Sapa City Tour", category: "Du lịch", price: 300000, image: "https://via.placeholder.com/175", brand: "MiXUE" },
    { id: 3, name: "Dalat City Tour", category: "Du lịch", price: 400000, image: "https://via.placeholder.com/175", brand: "Starbucks" },
    { id: 4, name: "Sapa City Tour", category: "Du lịch", price: 300000, image: "https://via.placeholder.com/175", brand: "MiXUE" }
];

// Hàm hiển thị danh sách sản phẩm
function displayProducts() {
    const container = document.querySelector('.product-grid');
    container.innerHTML = '';
    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.className = 'product-card';
        productCard.innerHTML = `
            <img src="${product.image}" alt="${product.name}" class="product-img">
            <div class="product-details">
                <h3>${product.brand}</h3>
                <p>${product.name} với giá chỉ từ ${product.price.toLocaleString('vi-VN')}đ</p>
                <p class="product-price">${product.price.toLocaleString('vi-VN')}đ</p>
                <button class="purchase-btn">Purchase</button>
            </div>
        `;
        container.appendChild(productCard);
    });
    document.querySelectorAll('.purchase-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const productId = btn.getAttribute('data-id');
            window.location.href = `/detail/${productId}`;
        });
    });
}
// Xử lý chuyển từ Home sang Category
document.addEventListener('DOMContentLoaded', () => {
    const openFilterBtn = document.getElementById('openFilterBtn');
    const closeFilterBtn = document.getElementById('closeFilterBtn');
    const filterPopup = document.getElementById('filterPopup');
    const resetFilterBtn = document.getElementById('resetFilterBtn');
    const applyFilterBtn = document.getElementById('applyFilterBtn');

    // Chuyển từ Home sang Category khi nhấn "Tất cả"
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const route = btn.getAttribute('data-route');
            if (route) {
                window.location.href = route;
            }
        });
    });

    openFilterBtn?.addEventListener('click', () => {
        filterPopup.style.display = 'block';
    });

    closeFilterBtn?.addEventListener('click', () => {
        filterPopup.style.display = 'none';
    });

    resetFilterBtn?.addEventListener('click', () => {
        document.querySelectorAll('.filter-option').forEach(btn => btn.classList.remove('active'));
        document.querySelector('.filter-select').selectedIndex = 0;
        document.querySelector('.filter-range').value = 0;
    });

    applyFilterBtn?.addEventListener('click', () => {
        filterPopup.style.display = 'none';
        displayProducts();
    });

    // Hiển thị sản phẩm ban đầu trên Category
    if (document.querySelector('.product-grid')) {
        displayProducts();
    }
});
// Xử lý popup lọc
document.addEventListener('DOMContentLoaded', () => {
    const openFilterBtn = document.getElementById('openFilterBtn');
    const closeFilterBtn = document.getElementById('closeFilterBtn');
    const filterPopup = document.getElementById('filterPopup');
    const resetFilterBtn = document.getElementById('resetFilterBtn');
    const applyFilterBtn = document.getElementById('applyFilterBtn');

    openFilterBtn.addEventListener('click', () => {
        filterPopup.style.display = 'block';
    });

    closeFilterBtn.addEventListener('click', () => {
        filterPopup.style.display = 'none';
    });

    resetFilterBtn.addEventListener('click', () => {
        document.querySelectorAll('.filter-option').forEach(btn => btn.classList.remove('active'));
        document.querySelector('.filter-select').selectedIndex = 0;
        document.querySelector('.filter-range').value = 0;
    });

    applyFilterBtn.addEventListener('click', () => {
        filterPopup.style.display = 'none';
        // Logic lọc sản phẩm (có thể mở rộng sau)
        displayProducts();
    });

    // Hiển thị sản phẩm ban đầu
    displayProducts();
});
// Xử lý nút "Thêm vào giỏ hàng" trên trang chi tiết sản phẩm
document.addEventListener('DOMContentLoaded', () => {
    const addToPayBtn = document.querySelector('.add-to-pay-btn');
    addToPayBtn.addEventListener('click', () => {
        addToPayBtn.style.transform = 'scale(0.9)';
        setTimeout(() => {
            addToPayBtn.style.transform = 'scale(1)';
        }, 100);
    });
})

// Xử lý hiệu ứng cuộn để ẩn/hiển thị footer
let scrollTimeout;

window.addEventListener('scroll', () => {
    const footer = document.querySelector('.footer-container');
    if (!footer) return;

    // Thêm class hidden khi cuộn
    footer.classList.add('hidden');

    // Xóa timeout cũ (nếu có)
    clearTimeout(scrollTimeout);

    // Sau 1.5 giây không cuộn, hiển thị lại footer
    scrollTimeout = setTimeout(() => {
        footer.classList.remove('hidden');
    }, 100);
});