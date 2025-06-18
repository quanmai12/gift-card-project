@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <section class="home-container">
        <!-- Header -->
        <div class="header-container">
            <div class="title-container">
                <div class="title-text">Gift Card</div>
            </div>
            <div class="icon-container">
                <div class="icon-left">
                    <img src="images/Menu Icon.svg" class="icon-line" />
                </div>
                <div class="divider"></div>
                <div class="icon-right">
                    <img src="images/Remove Icon.svg" class="icon-box" />
                </div>
            </div>
        </div>
        <!-- Thanh tìm kiếm -->
        <div class="search-container">
            <div class="search-bar">
                <img src="images/search-icon.svg" alt="Search Icon" class="search-icon">
                <input type="text" placeholder="Tìm kiếm voucher, thương hiệu..." class="search-input">
            </div>
        </div>
        <!-- Danh mục -->
        <div class="category-container">
            <div class="category-header">
                <div class="category-option">
                    <img src="/images/all.svg" alt="" class="option-icon">
                    <div class="option-text">Tất cả</div>
                </div>
                <div class="category-option">
                    <img src="/images/coffee.svg" alt="" class="option-icon">
                    <div class="option-text">Ẩm thực</div>
                </div>
                <div class="category-option">
                    <img src="/images/beach.svg" alt="" class="option-icon">
                    <div class="option-text">Du lịch</div>
                </div>
                <div class="category-option">
                    <img src="/images/game.svg" alt="" class="option-icon">
                    <div class="option-text">Giải trí</div>
                </div>
                <div class="category-option">
                    <img src="images/heart-beat.svg" alt="" class="option-icon">
                    <div class="option-text">Sức khỏe</div>
                </div>
                <div class="category-option">
                    <img src="images/book.svg" alt="" class="option-icon">
                    <div class="option-text">Giáo dục</div>
                </div>
                <div class="category-option">
                    <img src="images/clother.svg" alt="" class="option-icon">
                    <div class="option-text">Thời trang</div>
                </div>
                <div class="category-option">
                    <img src="images/mirror.svg" alt="" class="option-icon">
                    <div class="option-text">Làm đẹp</div>
                </div>
                <div class="category-option">
                    <img src="images/phone-card.svg" alt="" class="option-icon">
                    <div class="option-text">Thẻ nạp điện thoại</div>
                </div>
            </div>
            <div class="category-slider">
                <img src="/images/Slider" alt="">
            </div>
        </div>
        <!-- Voucher Section -->
        <div class="voucher-section">
            <div class="voucher-banner">
                <img src="/images/banner.png" alt="">
            </div>
        </div>
        <!-- content Section -->
        <div class="content-section">
            <div class="content-header">
                <div class="content-title">
                    <img src="/images/coffee.svg" alt="food">
                    <div class="title-section">Ẩm thực</div>
                </div>
                <div class="show-more">xem tất cả</div>
            </div>
            <div class="content-list">
                <div class="main-content">
                    <div>
                        <div>
                            <img src="/images/grab-banner.png" alt="" class="banner">
                        </div>
                        <div>
                            <img src="/images/sb-logo.svg" alt="">
                            <div>Starbucks</div>
                        </div>
                        <div>Mua KFC với giá chỉ từ 19.000đ</div>
                        <div>20.000đ</div>
                    </div>
                </div>
                <div class="main-content">
                    <div>
                        <div>
                            <img src="/images/grab-banner.png" alt="" class="banner">
                        </div>
                        <div>
                            <img src="/images/sb-logo.svg" alt="">
                            <div>Starbucks</div>
                        </div>
                        <div>Mua KFC với giá chỉ từ 19.000đ</div>
                        <div>20.000đ</div>
                    </div>
                </div>
                <div class="main-content">
                    <div>
                        <div>
                            <img src="/images/grab-banner.png" alt="" class="banner">
                        </div>
                        <div>
                            <img src="/images/sb-logo.svg" alt="">
                            <div>Starbucks</div>
                        </div>
                        <div>Mua KFC với giá chỉ từ 19.000đ</div>
                        <div>20.000đ</div>
                    </div>
                </div>
                <div class="main-content">
                    <div>
                        <div>
                            <img src="/images/grab-banner.png" alt="" class="banner">
                        </div>
                        <div>
                            <img src="/images/sb-logo.svg" alt="">
                            <div>Starbucks</div>
                        </div>
                        <div>Mua KFC với giá chỉ từ 19.000đ</div>
                        <div>20.000đ</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Deal Section -->
        <div class="deal-section">
            <p class="deal-text">Deal hot hôm nay</p>
            <p class="deal-price">500.000đ</p>
            <button class="deal-btn">Mua ngay</button>
        </div>
    </section>
@endsection