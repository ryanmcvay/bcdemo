<div class="relative w-full px-4 py-3 bg-white/5 border border-white/20 focus:border-blue-500 rounded-full flex items-center gap-2 {{ $attributes['class'] }}">
    <span class="w-max text-sm text-white/75 font-semibold">{{ $label }}</span>
    <input
        @if ($attributes->has('x-mask'))
            x-mask="{{ $attributes['x-mask'] }}"
        @endif
        @if ($attributes->has('wire:model'))
            wire:model="{{ $attributes['wire:model'] }}"
        @endif
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ $value }}"
        class="p-0 w-2/3 bg-transparent outline-none border-none text-lg text-white font-bold placeholder-white/40 focus:placeholder-transparent focus:border-0 focus:ring-0"
    >
    @isset ($postfix)
        <span class="absolute left-[110px] w-max text-sm text-white/75 font-semibold">{{ $postfix }}</span>
    @endisset
</div>