<x-layouts.app>
    <x-glass-container>
        <header class="w-full text-center">
            <h1 class="uppercase text-xl font-bold">Add Disc</h1>
            <p class="text-sm text-center text-white/50">Add disc details below. All fields are required.</p>
        </header>
        <div x-data="{ddown:false, manufacture:'Select Manufacture', manufacture_id:null}" class="mt-8 space-y-10">
            
            <form action="{{ route('disc.store') }}" method="post" class="space-y-3">
                @csrf
                @method('POST')

                {{-- MANUFACTURE SELECTOR --}}
                <div class="relative">
                    <input name="manufacture_id" :value="manufacture_id" hidden/>

                    <button x-on:click="ddown=!ddown" type="button" class="w-full px-4 py-3 bg-white/10 focus:border-blue-500 border border-white/20 rounded-full flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-white/75 font-semibold"><i class="fas fa-building"></i></span>
                            <span x-text="manufacture" class="p-0 text-white"></span>
                        </div>
                        <span class="text-sm text-white/75 font-semibold"><i class="fas fa-chevron-down"></i></span>
                    </button>
    
                    <div x-show="ddown" x-on:click.away="ddown=false" x-transition class="absolute top-[100%] z-40 w-full bg-white/10 border border-white/20 rounded-2xl backdrop-blur h-60 overflow-hidden overflow-y-auto flex flex-col gap-1 divide-y divide-white/10">
                        @foreach ($manufactures as $disc)
                            <button x-on:click="manufacture='{{ $disc->name }}', manufacture_id={{ $disc->id }}, ddown=false" type="button" class="w-full py-2" >{{ $disc->name }}</button>
                        @endforeach
                    </div>
                </div>


                <x-input label="Disc Name" name="name" type="text" placeholder="" value="{{ old('name') }}"/>

                <div class="grid grid-cols-2 gap-3">
                    <x-input x-mask="99.9" label="Speed" name="speed" type="text" placeholder="09.5" value="{{ old('speed') }}"/>
                    <x-input x-mask="9.9" label="Glide" name="glide" type="text" placeholder="7.5" value="{{ old('glide') }}"/>
                    <x-input x-mask="9.9" label="Fade" name="fade" type="text" placeholder="4.0" value="{{ old('fade') }}"/>
                    <x-input x-mask="9.9" label="Turn" name="turn" type="text" placeholder="4.0" value="{{ old('turn') }}"/>
                    <x-input x-mask="999" label="Weight" name="weight" type="text" placeholder="156" value="{{ old('weight') }}" postfix="g"/>
                </div>

                <button type="submit" class="px-4 py-3 w-full bg-indigo-500 border-2 border-indigo-800 rounded-full text-center text-indigo-900 font-extrabold uppercase tracking-wider">Save</button>

            </form>


            <div id="buttons" class="space-y-4">

                <x-button icon="fas fa-house" name="Home" href="{{ route('landing') }}"/>
        

            </div>
        </div>

    </x-glass-container>
</x-layouts.app>