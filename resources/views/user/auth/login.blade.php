ログイン
<form method="POST" action="{{ route('user.login') }}">
    @csrf
    <div>
        <x-input-label for="email" :value="__('メールアドレス')" />
        <x-text-input id="email" class="form_mail" type="email" name="email" :value="old('email')" required autofocus />
    </div>
    <div class="mt-4">
        <x-input-label for="password" :value="__('パスワード')" />
        <x-text-input id="password" class="form_pass" type="password" name="password" required autocomplete="current-password" />
    </div>
    <div class="form_reset">
        @if (Route::has('user.password.request'))
        <a href="{{ route('user.password.request') }}">{{ __('パスワードを忘れた方はこちら') }}</a>
        @endif
        <button class="ml-3">
            {{ __('ログイン') }}
        </button>
    </div>
</form>
