@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<main class="container">
    <header class="contact-header">
        <h1 id="page-title">お問い合わせ</h1>
        <p id="page-subtitle">お気軽にお問い合わせください。担当者より折り返しご連絡いたします。</p>
    </header>
    <div class="form-card">
        <div class="record-limit-warning" id="limit-warning">
        お問い合わせの保存上限（999件）に達しました。これ以上送信できません。
        </div>
        <div class="error-message" id="error-message"></div>

    <form id="contact-form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form-group"><label for="name" class="form-label" id="name-label">お名前</label> 
        <input type="text" id="name" name="name" class="form-input" required placeholder="山田 太郎">
        </div>
        <div class="form-group"><label for="email" class="form-label" id="email-label">メールアドレス</label>
        <input type="email" id="email" name="email" class="form-input" required placeholder="example@email.com">
        </div>
        <div class="form-group"><label for="subject" class="form-label" id="subject-label">件名</label> 
        <input type="text" id="subject" name="subject"  class="form-input" required placeholder="お問い合わせの件名">
        </div>
        <div class="form-group"><label for="message" class="form-label" id="message-label">メッセージ</label>
        <textarea id="message" name="message" class="form-textarea" required placeholder="お問い合わせ内容をご記入ください"></textarea>
        </div>
        <button type="submit" class="submit-button" id="submit-button"> <span id="button-text">送信する</span> </button>
    </form>
    </div>
    <section class="info-section">
        <div class="info-card">
        <div class="info-icon">
        📧
        </div>
        <div class="info-title">
        メール
        </div>
        <div class="info-text">
        info@example.com
        </div>
        </div>
        <div class="info-card">
        <div class="info-icon">
        📞
        </div>
        <div class="info-title">
        電話
        </div>
        <div class="info-text">
        03-1234-5678
        </div>
        </div>
        <div class="info-card">
        <div class="info-icon">
        🕐
        </div>
        <div class="info-title">
        営業時間
        </div>
        <div class="info-text">
        平日 9:00 - 18:00
        </div>
        </div>
    </section>
    </main>


@endsection