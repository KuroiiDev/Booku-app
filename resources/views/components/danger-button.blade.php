<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2.5 bg-rose-600 hover:bg-rose-500 active:bg-rose-700 text-white border border-transparent rounded-xl font-semibold text-sm transition-all focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 dark:focus:ring-offset-slate-900 shadow-md shadow-rose-500/20 transition-all duration-150']) }}>
    {{ $slot }}
</button>
