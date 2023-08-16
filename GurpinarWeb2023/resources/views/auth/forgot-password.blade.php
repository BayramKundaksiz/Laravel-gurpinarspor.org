<x-guest-layout>
    <x-authentication-card>

        @section('title', 'Şifremi Unuttum')

        <x-slot name="logo">
            <div style="display: block; margin-left: auto; margin-right: auto; width: 20%;">
                <img src="{{ url('img/kesilenikon.png') }}"/>
            </div>
            <div style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                <img src="{{ url('img/sifremiunuttum.png') }}"/>
            </div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Şifrenizi mi unuttunuz ? Lütfen kayıt esnasında girmiş olduğunuz e-posta adresinizi yazınız. Size şifrenizi değiştirmek için bir bağlantı yollayacağız.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('E-posta') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Şifre yenileme bağlantısı gönder') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
