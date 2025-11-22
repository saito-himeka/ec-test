@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<main class="container">
    <header class="confirm-header">
        <h1 id="page-title">入力内容の確認</h1>
        <p id="page-subtitle">以下の内容でお問い合わせを送信します</p>
    </header>

    <div class="confirmation-card">
        <div class="info-notice">
            <div class="notice-icon">
            ℹ️
            </div>
            <p class="notice-text">入力内容をご確認の上、「送信する」ボタンをクリックしてください。修正が必要な場合は「修正する」ボタンで前のページに戻れます。</p>
        </div>

        <form class="confirm-form" action="/contacts" method="post">
            @csrf
        <div class="field-group">
            <div class="field-label"><span id="name-label">お名前</span></div>
            <input class="field-value" type="text" name="name" value="{{ $contact['name'] }}" readonly>
        </div>

        <div class="field-group">
            <div class="field-label"><span id="email-label">メールアドレス</span></div>
            <input class="field-value field-value-email" type="text" name="email" value="{{ $contact['email'] }}" readonly>
        </div>

        <div class="field-group">
            <div class="field-label"> <span id="subject-label">件名</span></div>
            <input class="field-value" type="text" name="subject" value="{{ $contact['subject'] }}" readonly>
        </div>

        <div class="field-group">
            <div class="field-label"> <span id="message-label">お問い合わせ内容</span></div>
            <input class="field-value" type="text" name="message" value="{{ $contact['message'] }}" readonly>
        </div>

        <div class="button-container">
            <a href="{{ url()->previous() }}" class="btn btn-back"><span>←</span> <span id="back-button-text">修正する</span> </a> 

            <button class="btn btn-submit" id="submit-button" onclick="handleSubmit()"> <span id="submit-button-text">この内容で送信する</span> <span>→</span> </button>
        </div>
        </form>

        <div class="success-message" id="success-message">
            ✓ お問い合わせを送信しました！
        </div>
        <div class="error-message" id="error-message">
            送信に失敗しました。もう一度お試しください。
        </div>
    </div>
</main>
@endsection