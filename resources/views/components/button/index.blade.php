<a {{ $attributes->merge(['class'=>'px-4 py-3 bg-white/10 border border-white/20 rounded-full flex gap-2 items-center']) }}>
    <i class="{{ $icon }}"></i>
    <span class="flex-1 font-semibold">{{ $name }}</span>
    <i class="fas fa-chevron-right"></i>
</a>
                            