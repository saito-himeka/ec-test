@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<section class="hero" id="home">
    <div class="hero-content">
        <h1 id="hero-title">いつもの毎日をちょっと特別に</h1>
        <p id="hero-subtitle">毎日の何気ない瞬間に、少しの喜びを添えて。</p><a href="#products" class="cta-button">商品を見る</a>
    </div>
    </section><!-- Products Section -->
    <section class="products-section" id="products">
    <h2 class="section-title">おすすめ商品</h2>
    <div class="products-grid" id="products-grid">
    <!-- Products will be dynamically generated -->
    </div>
    </section><!-- Cart Modal -->
    
    <div class="cart-modal" id="cart-modal">
    <div class="cart-content">
        <div class="cart-header">
        <h3 class="cart-title">ショッピングカート</h3><button class="close-cart" onclick="closeCart()">×</button>
        </div>
        <div id="cart-items">
        <div class="empty-cart">
        カートは空です
        </div>
        </div>
        <div class="cart-total" id="cart-total" style="display: none;">
        <div class="total-price">
        合計: ¥<span id="total-amount">0</span>
        </div><button class="checkout-btn" onclick="checkout()">レジに進む</button>
        </div>
    </div>
@endsection