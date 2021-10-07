<x-guest-layout >
    <x-jet-authentication-card>
        <x-slot name="logo">
{{--            <x-jet-authentication-card-logo />--}}
            <img class="rounded" src="{{ asset('/images/persian_blog_icon.png') }}" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600"  style="direction: rtl">
            {{ __('اگر کلمه عبور خود را فراموش کرده ای، آدرس پست الکترونیکی خود را وارد کنید تا ایمیلی حاوی لینک
            تغییر کلمه عبور برای شما ارسال گردد.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}"  style="direction: rtl">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('پست الکترونیکی') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('ارسال ایمیل تغییر کلمه عبور') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
