<x-guest-layout>
    <x-authentication-card>

        @section('title', 'Giriş Yap')

        <x-slot name="logo">
            <div style="display: block; margin-left: auto; margin-right: auto; width: 20%;">
                <img src="{{ url('img/kesilenikon.png') }}"/>
            </div>
            <div align="center">
                <img src="{{ url('img/girisyap.png') }}"/>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('E-Posta') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Şifre') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Beni Hatırla') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Şifremi Unuttum') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Giriş Yap') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
