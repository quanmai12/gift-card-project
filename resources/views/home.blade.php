@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
<section class="home-container">
    <div class="home-bg"></div>
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
    <!-- content food Section -->
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
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- content travel Section -->
    <div class="content-section">
        <div class="content-header">
            <div class="content-title">
                <img src="/images/beach.svg" alt="food">
                <div class="title-section">Du Lịch</div>
            </div>
            <div class="show-more">xem tất cả</div>
        </div>
        <div class="content-list">
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- content entertaiment Section -->
    <div class="content-section">
        <div class="content-header">
            <div class="content-title">
                <img src="/images/game.svg" alt="food">
                <div class="title-section">Giải Trí</div>
            </div>
            <div class="show-more">xem tất cả</div>
        </div>
        <div class="content-list">
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- content health Section -->
    <div class="content-section">
        <div class="content-header">
            <div class="content-title">
                <img src="/images/heart-beat.svg" alt="food">
                <div class="title-section">Sức Khỏe</div>
            </div>
            <div class="show-more">xem tất cả</div>
        </div>
        <div class="content-list">
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- content education Section -->
    <div class="content-section">
        <div class="content-header">
            <div class="content-title">
                <img src="/images/book.svg" alt="food">
                <div class="title-section">Giáo Dục</div>
            </div>
            <div class="show-more">xem tất cả</div>
        </div>
        <div class="content-list">
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- content fashion Section -->
    <div class="content-section">
        <div class="content-header">
            <div class="content-title">
                <img src="/images/clother.svg" alt="food">
                <div class="title-section">Thời Trang</div>
            </div>
            <div class="show-more">xem tất cả</div>
        </div>
        <div class="content-list">
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- content beauty Section -->
    <div class="content-section">
        <div class="content-header">
            <div class="content-title">
                <img src="/images/mirror.svg" alt="food">
                <div class="title-section">Làm đẹp</div>
            </div>
            <div class="show-more">xem tất cả</div>
        </div>
        <div class="content-list">
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- content phone card Section -->
    <div class="content-section">
        <div class="content-header">
            <div class="content-title">
                <img src="/images/phone-card.svg" alt="food">
                <div class="title-section">Thẻ Nạp Điện Thoại</div>
            </div>
            <div class="show-more">xem tất cả</div>
        </div>
        <div class="content-list">
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
            <div class="main-content">
                <div class="banner-container">
                    <img src="/images/grab-banner.png" alt="Banner Promotion" class="banner">
                    <img src="/images/add-to-pay.svg" alt="Add to Pay" class="add-to-pay-btn" data-price="20000">
                </div>
                <div class="brand-container">
                    <div class="brand-logo">
                        <img src="/images/sb-logo.svg" alt="">
                        <div class="brand-name">Starbucks</div>
                    </div>
                    <div class="brand-detail">Mua KFC với giá chỉ từ 19.000đ</div>
                    <div class="brand-price">20.000đ</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Section -->
    <div class="bottom-tab">
        <div class="tab-content">
            <div class="item-count">0 sản phẩm</div>
            <div class="total-price">0đ</div>
            <button class="pay-btn">Thanh toán</button>
        </div>
    </div>
</section>
@endsection