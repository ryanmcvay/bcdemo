<?php

namespace App\Http\Controllers;

use App\Models\Disc;
use App\Models\Manufacture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $manufactures = Manufacture::get();
        $speedRanges = config('disc-settings.speed-range');
        $glideRanges = config('disc-settings.glide-range');
        $fadeRanges = config('disc-settings.fade-range');
        $turnRanges = config('disc-settings.turn-range');

        return view('disc.create', compact(
            'manufactures',
            'speedRanges',
            'glideRanges',
            'fadeRanges',
            'turnRanges'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'speed' => 'required|numeric',
            'glide' => 'required|numeric',
            'fade' => 'required|numeric',
            'turn' => 'required|numeric',
            'weight' => 'required|integer',
        ]);

        $disc = new Disc();
        $disc->manufacture_id = $request->manufacture_id;
        $disc->name = $request->name;
        $disc->speed = $request->speed;
        $disc->glide = $request->glide;
        $disc->fade = $request->fade;
        $disc->turn = $request->turn;
        $disc->weight = $request->weight;
        $disc->save();

        return to_route('disc.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
