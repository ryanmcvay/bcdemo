<x-layouts.app>
    <div class="border border-white/10 max-w-md p-8 rounded-md shadow-md backdrop-blur-md">
        <header class="w-full text-center">
            <i class="fas fa-flying-disc text-[6rem]"></i>
            <h1 class="uppercase text-xl font-bold">Disc Golf Bag</h1>
        </header>
        <div class="mt-4">
            <p class="text-sm text-center text-white/50">Qui sunt dolore minim cupidatat consectetur. Non ad adipisicing consectetur quis.</p>
            
            <div id="buttons" class="mt-8 space-y-4">
                <x-button icon="fa-backpack" name="Baggy" href="{{ route('bag') }}"/>
                <x-button icon="fa-flying-disc" name="Add A Disc" href="{{ route('disc') }}"/>
            </div>

        </div>
    </div>
</x-layouts.app>