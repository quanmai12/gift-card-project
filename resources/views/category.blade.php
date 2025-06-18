@extends('layouts.app')

@section('title', 'Danh mục')

@section('content')
    <section class="category-container">
        <!-- Header danh mục -->
        <div class="category-header">
            <button class="back-btn">←</button>
            <h2>Tất cả</h2>
        </div>

        <!-- Thanh tìm kiếm với nút Open Filter -->
        <div class="search-section">
            <input type="text" placeholder="Tìm kiếm..." class="search-bar">
            <button class="filter-btn" id="openFilterBtn">Open Filter</button>
        </div>

        <!-- Danh mục con -->
        <div class="sub-categories">
            <button class="sub-category-btn active">Tất cả</button>
            <button class="sub-category-btn">Ăn uống</button>
            <button class="sub-category-btn">Du lịch</button>
            <button class="sub-category-btn">Giải trí</button>
            <button class="sub-category-btn">Sức khỏe</button>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="product-grid">
            <div class="product-card">
                <img src="https://via.placeholder.com/175" alt="Dalat Tour" class="product-img">
                <div class="product-details">
                    <h3>Starbucks</h3>
                    <p>Dalat City Tour 1 Day với giá chỉ từ 400.000đ</p>
                    <p class="product-price">400.000đ</p>
                    <button class="purchase-btn" data-id="#">Purchase</button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/175" alt="Sapa Tour" class="product-img">
                <div class="product-details">
                    <h3>MiXUE</h3>
                    <p>Sapa City Tour 1 Day với giá chỉ từ 300.000đ</p>
                    <p class="product-price">300.000đ</p>
                    <button class="purchase-btn" data-id="#">Purchase</button>
                </div>
            </div>
            <div class="product-card">
                <img src="https://via.placeholder.com/175" alt="KFC Voucher" class="product-img">
                <div class="product-details">
                    <h3>KFC</h3>
                    <p>KFC Voucher giảm 60k</p>
                    <p class="product-price">20.000đ</p>
                    <button class="purchase-btn" data-id="#">Purchase</button>
                </div>
            </div>
        </div>

        <!-- Tổng giá -->
        <div class="total-section">
            <p class="total-text">1.002đ</p>
            <button class="pay-btn">Thanh toán</button>
        </div>

        <!-- Popup lọc chi tiết -->
        <div class="filter-popup" id="filterPopup">
            <div class="filter-content">
                <div class="filter-header">
                    <h2>Bộ lọc nâng cao</h2>
                    <button class="close-btn" id="closeFilterBtn">×</button>
                </div>
                <div class="filter-body">
                    <div class="filter-group">
                        <h3>Danh mục</h3>
                        <button class="filter-option active">Tất cả</button>
                        <button class="filter-option">Ăn uống</button>
                        <button class="filter-option">Du lịch</button>
                        <button class="filter-option">Giải trí</button>
                        <button class="filter-option">Sức khỏe</button>
                        <button class="filter-option">Giáo dục</button>
                        <button class="filter-option">Thời trang</button>
                        <button class="filter-option">Làm đẹp</button>
                    </div>
                    <div class="filter-group">
                        <h3>Thẻ nạp điện thoại</h3>
                        <input type="checkbox" id="topup"> Thẻ nạp điện thoại
                    </div>
                    <div class="filter-group">
                        <h3>Vị trí</h3>
                        <button class="filter-option active">Toàn cầu</button>
                        <button class="filter-option">Việt Nam</button>
                        <button class="filter-option">Thái Lan</button>
                        <button class="filter-option">Mỹ</button>
                    </div>
                    <div class="filter-group">
                        <h3>Khối lượng</h3>
                        <select class="filter-select">
                            <option>United States Dollars ($)</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <h3>Sắp xếp</h3>
                        <input type="range" min="0" max="200000" class="filter-range">
                        <div class="range-values">
                            <span>$0</span>
                            <span>$200.000+</span>
                        </div>
                    </div>
                    <div class="filter-group">
                        <h3>Đề xuất</h3>
                        <button class="filter-option">Đề xuất</button>
                        <button class="filter-option">Mới nhất</button>
                    </div>
                    <div class="filter-group">
                        <h3>Giá tiền rẻ nhất</h3>
                        <button class="filter-option">Giá tiền rẻ nhất</button>
                        <button class="filter-option">Giá tiền cao nhất</button>
                    </div>
                    <div class="filter-group">
                        <h3>Bán chạy nhất</h3>
                        <button class="filter-option">Bán chạy nhất</button>
                    </div>
                </div>
                <div class="filter-footer">
                    <button class="filter-btn secondary" id="resetFilterBtn">Đặt lại</button>
                    <button class="filter-btn primary" id="applyFilterBtn">Xác nhận</button>
                </div>
            </div>
        </div>
    </section>
@endsection