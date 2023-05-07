<x-layouts.app>
    <x-glass-container>
        <header class="w-full text-center">
            <h1 class="uppercase text-xl font-bold">Add Disc</h1>
            <p class="text-sm text-center text-white/50">Add disc details below. All fields are required.</p>
        </header>
        <div 
            x-data="{
                ddown:false,
                manufacture:'Select Manufacture',
                manufacture_id:null,
                speedRanges:false,
                speed:'Select',
                glideRanges:false,
                glide:'Select',
                fadeRanges:false,
                fade:'Select',
                turnRanges:false,
                turn:'Select',
            }"
            class="mt-8 space-y-10"
        >

            <form action="{{ route('disc.store') }}" method="post" class="space-y-3">
                @csrf
                @method('POST')

                {{-- MANUFACTURE SELECTOR --}}
                <div class="relative">
                    <input name="manufacture_id" :value="manufacture_id" hidden/>

                    <button x-on:click="ddown=!ddown" type="button" class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-full flex items-center justify-between gap-2">
                        <div class="flex items-center gap-2">
                            <span class="text-sm text-white/75 font-semibold"><i class="fas fa-building"></i></span>
                            <span x-text="manufacture" class="text-white"></span>
                        </div>
                        <span class="text-sm text-white/75 font-semibold"><i class="fas fa-chevron-down"></i></span>
                    </button>

                    <div x-show="ddown" x-on:click.away="ddown=false" x-transition class="absolute top-[100%] z-40 w-full bg-white/5 border border-white/20 rounded-2xl backdrop-blur h-60 overflow-hidden overflow-y-auto flex flex-col gap-1 divide-y divide-white/10">
                        @foreach ($manufactures as $disc)
                            <button x-on:click="manufacture='{{ $disc->name }}', manufacture_id={{ $disc->id }}, ddown=false" type="button" class="w-full py-2 hover:bg-white/10">{{ $disc->name }}</button>
                        @endforeach
                    </div>
                </div>
                
                <x-input label="Name" name="name" type="text" placeholder="" value="{{ old('name') }}"/>
                
                <div class="grid grid-cols-2 gap-3">
                    {{-- SPEED RANGE SELECTOR --}}
                    <div class="relative">
                        <input name="speed" :value="speed" hidden/>
    
                        <button x-on:click="speedRanges=!speedRanges" type="button" class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-full flex items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-sm text-white/75 font-semibold">Speed</span>
                                <span x-text="speed" class="text-white font-bold"></span>
                            </div>
                            <span class="text-sm text-white/75 font-semibold"><i class="fas fa-chevron-down"></i></span>
                        </button>
    
                        <div x-show="speedRanges" x-on:click.away="speedRanges=false" x-transition class="absolute top-[100%] z-40 w-full bg-white/5 border border-white/20 rounded-2xl backdrop-blur h-60 overflow-hidden overflow-y-auto flex flex-col gap-1 divide-y divide-white/10">
                            @foreach ($speedRanges as $item)
                                <button x-on:click="speed='{{ $item }}', speedRanges=false" type="button" class="w-full py-2 hover:bg-white/10">{{ $item }}</button>
                            @endforeach
                        </div>
                    </div>
                    {{-- GLIDE RANGE SELECTOR --}}
                    <div class="relative">
                        <input name="glide" :value="glide" hidden/>
    
                        <button x-on:click="glideRanges=!glideRanges" type="button" class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-full flex items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-sm text-white/75 font-semibold">Glide</span>
                                <span x-text="glide" class="text-white font-bold"></span>
                            </div>
                            <span class="text-sm text-white/75 font-semibold"><i class="fas fa-chevron-down"></i></span>
                        </button>
    
                        <div x-show="glideRanges" x-on:click.away="glideRanges=false" x-transition class="absolute top-[100%] z-40 w-full bg-white/5 border border-white/20 rounded-2xl backdrop-blur h-60 overflow-hidden overflow-y-auto flex flex-col gap-1 divide-y divide-white/10">
                            @foreach ($glideRanges as $item)
                                <button x-on:click="glide='{{ $item }}', glideRanges=false" type="button" class="w-full py-2 hover:bg-white/10">{{ $item }}</button>
                            @endforeach
                        </div>
                    </div>
                    {{-- FADE RANGE SELECTOR --}}
                    <div class="relative">
                        <input name="fade" :value="fade" hidden/>
    
                        <button x-on:click="fadeRanges=!fadeRanges" type="button" class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-full flex items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-sm text-white/75 font-semibold">Fade</span>
                                <span x-text="fade" class="text-white font-bold"></span>
                            </div>
                            <span class="text-sm text-white/75 font-semibold"><i class="fas fa-chevron-down"></i></span>
                        </button>
    
                        <div x-show="fadeRanges" x-on:click.away="fadeRanges=false" x-transition class="absolute top-[100%] z-40 w-full bg-white/5 border border-white/20 rounded-2xl backdrop-blur h-60 overflow-hidden overflow-y-auto flex flex-col gap-1 divide-y divide-white/10">
                            @foreach ($fadeRanges as $item)
                                <button x-on:click="fade='{{ $item }}', fadeRanges=false" type="button" class="w-full py-2 hover:bg-white/10">{{ $item }}</button>
                            @endforeach
                        </div>
                    </div>
                    {{-- TURN RANGE SELECTOR --}}
                    <div class="relative">
                        <input name="turn" :value="turn" hidden/>
    
                        <button x-on:click="turnRanges=!turnRanges" type="button" class="w-full px-4 py-3 bg-white/5 border border-white/20 rounded-full flex items-center justify-between gap-2">
                            <div class="flex items-center gap-2">
                                <span class="text-sm text-white/75 font-semibold">Turn</span>
                                <span x-text="turn" class="text-white font-bold"></span>
                            </div>
                            <span class="text-sm text-white/75 font-semibold"><i class="fas fa-chevron-down"></i></span>
                        </button>
    
                        <div x-show="turnRanges" x-on:click.away="turnRanges=false" x-transition class="absolute top-[100%] z-40 w-full bg-white/5 border border-white/20 rounded-2xl backdrop-blur h-60 overflow-hidden overflow-y-auto flex flex-col gap-1 divide-y divide-white/10">
                            @foreach ($turnRanges as $item)
                                <button x-on:click="turn='{{ $item }}', turnRanges=false" type="button" class="w-full py-2 hover:bg-white/10">{{ $item }}</button>
                            @endforeach
                        </div>
                    </div>
                    <x-input x-mask="999" label="Weight" name="weight" type="text" placeholder="128" value="{{ old('weight') }}" postfix="g"/>
                </div>

                <button type="submit" class="py-3 w-full bg-indigo-500 border-2 border-indigo-800 rounded-full text-center text-indigo-900 font-extrabold uppercase tracking-wider">Save</button>
                
            </form>
            
            <div id="buttons" class="space-y-4 hidden">
                <x-button icon="fa-house" name="Home" href="{{ route('landing') }}"/>
            </div>

        </div>
    </x-glass-container>
</x-layouts.app>