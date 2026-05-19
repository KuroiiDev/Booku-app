@props(['size' => 'md'])

@php
$iconSizes = [
    'sm' => 'w-6 h-6 text-xs',
    'md' => 'w-8 h-8 text-sm',
    'lg' => 'w-12 h-12 text-lg',
];
$textSizes = [
    'sm' => 'text-sm',
    'md' => 'text-xl',
    'lg' => 'text-3xl',
];
$iconSize = $iconSizes[$size] ?? $iconSizes['md'];
$textSize = $textSizes[$size] ?? $textSizes['md'];
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center gap-2']) }}>
    <div class="{{ $iconSize }} rounded-lg bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white shadow-lg shadow-amber-500/30 shrink-0">
        <i class="ti ti-books"></i>
    </div>
    <span class="{{ $textSize }} font-bold heading-font tracking-tight text-slate-800 dark:text-white">Booku<span class="text-amber-500">.</span></span>
</div>
