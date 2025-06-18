@extends('layouts.app')

@section('title', 'Chi tiết Voucher')

@section('content')
    <section class="detail-container">
        <!-- Banner và thông tin voucher -->
        <div class="detail-banner">
            <img src="https://via.placeholder.com/375x200" alt="Voucher Banner" class="banner-img">
            <div class="banner-info">
                <h1>ĐẬM VỊ GÀ RÁN</h1>
                <p class="discount">GIẢM 60K</p>
                <div class="voucher-details">
                    <span class="brand">KFC</span>
                    <p>Voucher hot giảm 40k cho đơn từ 120k chi trong hôm nay 🔥 [KFC]</p>
                    <p class="price">20.000đ</p>
                </div>
                <button class="add-to-cart-btn">Thêm vào hàng</button>
            </div>
        </div>

        <!-- Hướng dẫn sử dụng -->
        <div class="usage-guide">
            <h2>Hướng dẫn</h2>
            <h3>Mô tả</h3>
            <p>Hướng dẫn sử dụng voucher online bằng mã code trên website hoặc dùng trực tiếp tại cửa hàng.</p>
            <ul>
                <li><strong>Bước 1:</strong> Chọn voucher trên giao diện mua, ấn "Sử dụng ngay" để xem chi tiết mã Code kèm giá.</li>
                <li><strong>Bước 2:</strong> Chọn Sao chép mã khuyến mãi.</li>
                <li><strong>Bước 3:</strong> Điền mã tại trang thanh toán website hoặc dùng trực tiếp tại cửa hàng/thương hiệu được áp dụng.</li>
            </ul>
        </div>

        <!-- Tổng giá và nút thanh toán -->
        <div class="total-section">
            <p class="total-text">1.002.000.000 đ</p>
            <button class="pay-btn">Thanh toán</button>
        </div>
    </section>
@endsection