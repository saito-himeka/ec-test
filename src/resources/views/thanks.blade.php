@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<main class="container">
    <div class="thank-you-card">
        <div class="checkmark-container">
            <svg class="checkmark" viewbox="0 0 52 52"><path d="M14 27l7.5 7.5L38 18" />
            </svg>
        </div>
        <h1 class="main-title" id="main-title">お問い合わせありがとうございます</h1>
        <p class="subtitle" id="subtitle">お問い合わせを受け付けました</p>
        <div class="message-box">
            <p class="message-text" id="message-text">担当者より2営業日以内にご連絡させていただきます。今しばらくお待ちくださいませ。</p>
        </div>
        <div class="next-steps">
            <h2 class="next-steps-title" id="next-steps-title">次のステップ</h2>
            <div class="step-item">
                <div class="step-number">1</div>
                <div class="step-content">
                    <div class="step-title" id="step1-title">自動返信メール</div>
                    <div class="step-text" id="step1-text">ご登録のメールアドレスに自動返信メールをお送りしました</div>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">2</div>
                <div class="step-content">
                    <div class="step-title" id="step2-title">内容確認</div>
                    <div class="step-text" id="step2-text">担当者がお問い合わせ内容を確認いたします</div>
                </div>
            </div>
            <div class="step-item">
                <div class="step-number">3</div>
                <div class="step-content">
                    <div class="step-title" id="step3-title">ご連絡</div>
                    <div class="step-text" id="step3-text">2営業日以内に担当者よりご連絡いたします</div>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="contact-info-title">お急ぎの場合は</div>
            <div class="contact-items">
                <div class="contact-item"><span class="contact-icon">📧</span> <span>info@example.com</span>
                </div>
                <div class="contact-item"><span class="contact-icon">📞</span> <span>03-1234-5678</span>
                </div>
            </div>
        </div>
        <a href="/" class="back-button" id="back-button">トップページへ戻る</a>

    </div>
</main>
@endsection