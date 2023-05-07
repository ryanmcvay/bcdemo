<div>
    @if ($errors->any())
        <div class="mb-8 text-center">
            <div class="font-semibold text-red-600 text-md tracking-wide">
                Whoops! Something went wrong.
            </div>
            <ul class="mt-2 list-none list-inside text-xs text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($isTooLarge)
        <div class="mb-8 text-center">
            <div class="font-semibold text-red-600 text-md tracking-wide">
                Whoooooh Buddy! That's too big! That's what she said!
            </div>
        </div>
    @endif

    @if ($isFound)
        <div class="mb-8 text-center">
            <div class="font-semibold text-red-600 text-md tracking-wide">
                Already got that one!
            </div>
        </div>
    @endif

    <div x-data class="space-y-3">
        <x-input wire:model="eggNumber" x-mask="999" label="Egg Number" name="name" type="text" placeholder="" value="{{ old('name') }}"/>
        <button wire:click="store" type="button" class="py-3 w-full bg-indigo-500 border-2 border-indigo-800 rounded-full text-center text-indigo-900 font-extrabold uppercase tracking-wider">Save</button>
    </div>

    <div class="hidden">
        {{ $total - $eggs->count() }}
    </div>

    <div class="mt-10">
        <ul>
            @foreach ($remainingEggs as $egg)
                <li class="font-bold text-lg">{{ $egg->id }}</li>
            @endforeach
        </ul>
    </div>
</div>