<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2.5 bg-amber-500 hover:bg-amber-600 active:bg-amber-700 text-white border border-transparent rounded-xl font-semibold text-sm transition-all focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 dark:focus:ring-offset-slate-900 shadow-md shadow-amber-500/20 hover:-translate-y-0.5 active:translate-y-0 duration-150']) }}>
    {{ $slot }}
</button>
