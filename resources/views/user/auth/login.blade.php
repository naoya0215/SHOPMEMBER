<x-guest-layout>
    <x-auth-card>
        ★ログイン
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('メールアドレス')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('user.password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.password.request') }}">
                        {{ __('パスワードを忘れた方はこちら') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('ログイン') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
