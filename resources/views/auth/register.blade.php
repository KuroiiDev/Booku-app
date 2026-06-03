<x-guest-layout>
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white heading-font">Daftar Anggota Baru
        </h2>
        <p class="text-sm text-slate-500 dark:text-slate-400 mt-1.5 font-medium">Bergabung dengan ekosistem perpustakaan
            Booku</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="font-semibold text-slate-700 dark:text-slate-300" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-5">
            <x-input-label for="email" :value="__('Email')" class="font-semibold text-slate-700 dark:text-slate-300" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <x-input-label for="password" :value="__('Password')"
                class="font-semibold text-slate-700 dark:text-slate-300" />

            <div class="relative mt-1">
                <x-text-input id="password" class="block w-full pr-10" type="password" name="password" required
                    autocomplete="new-password" />

                <button type="button" onclick="togglePassword()"
                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 transition-colors focus:outline-none"
                    aria-label="Toggle password visibility">
                    <i id="password-icon" class="ti ti-eye text-xl"></i>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-5">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                class="font-semibold text-slate-700 dark:text-slate-300" />

            <div class="relative mt-1">
                <x-text-input id="password_confirmation" class="block w-full pr-10" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <button type="button" onclick="togglePassword2()"
                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 transition-colors focus:outline-none "
                    aria-label="Toggle password visibility">
                    <i id="password-icon2" class="ti ti-eye text-xl"></i>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-primary-button class="w-full">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <div class="mt-8 text-center border-t border-slate-100 dark:border-slate-700/50 pt-6">
        <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">
            Sudah terdaftar?
            <a href="{{ route('login') }}"
                class="font-bold text-amber-600 hover:text-amber-500 dark:text-amber-500 dark:hover:text-amber-400 transition-colors ml-1">Masuk
                Sekarang</a>
        </p>
    </div>
</x-guest-layout>
<script>
    function togglePassword() {
        const input = document.getElementById('password');
        const icon = document.getElementById('password-icon');
        const isHidden = input.type === 'password';

        input.type = isHidden ? 'text' : 'password';
        icon.className = isHidden ? 'ti ti-eye-off text-xl' : 'ti ti-eye text-xl';
    }
    function togglePassword2() {
        const input = document.getElementById('password_confirmation');
        const icon = document.getElementById('password-icon2');
        const isHidden = input.type === 'password';

        input.type = isHidden ? 'text' : 'password';
        icon.className = isHidden ? 'ti ti-eye-off text-xl' : 'ti ti-eye text-xl';
    }
</script>