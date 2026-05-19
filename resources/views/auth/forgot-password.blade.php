<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white heading-font">Lupa Kata Sandi?</h2>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1.5 font-medium">Masukkan email Anda untuk menerima link reset kata sandi</p>
    </div>

    <div class="mb-5 text-sm text-slate-600 dark:text-slate-400 leading-relaxed bg-slate-50 dark:bg-slate-900/50 p-4 rounded-2xl border border-slate-100 dark:border-slate-800">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-slate-700 dark:text-slate-300" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-primary-button class="w-full">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>

    <div class="mt-8 text-center border-t border-slate-100 dark:border-slate-700/50 pt-6">
        <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">
            <a href="{{ route('login') }}" class="inline-flex items-center font-bold text-amber-600 hover:text-amber-500 dark:text-amber-500 dark:hover:text-amber-400 transition-colors">
                <i class="ti ti-arrow-narrow-left mr-1.5 text-lg"></i> Kembali ke Halaman Masuk
            </a>
        </p>
    </div>
</x-guest-layout>
