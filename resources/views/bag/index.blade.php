<x-layouts.app>
    <div class="border border-white/10 max-w-md p-8 rounded-md shadow-md backdrop-blur-md">
        <header class="w-full text-center">
            <h1 class="uppercase text-xl font-bold">Bag</h1>
        </header>
        <div class="mt-4">
            <p class="text-sm text-center text-white/50">Qui sunt dolore minim cupidatat consectetur. Non ad adipisicing consectetur quis.</p>
            
            <div id="buttons" class="mt-8 space-y-4">
                @foreach ($discs as $disc)
                    <x-button icon="{{ $disc['icon'] }}" name="{{ $disc['name'] }}" href="{{ route('landing') }}"/>
                @endforeach
            </div>

        </div>
    </div>
</x-layouts.app>