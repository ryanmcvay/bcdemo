<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $discs = collect([
            ['name'=>'Disc 1','icon'=>'fa-flying-disc'],
            ['name'=>'Disc 2','icon'=>'fa-flying-disc'],
            ['name'=>'Disc 3','icon'=>'fa-car'],
            ['name'=>'Disc 4','icon'=>'fa-arrow-up'],
        ]);

        return view('bag.index', compact(
            'discs'
        ));
    }
}
