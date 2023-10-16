<?php

namespace App\Http\Controllers;

use App\Models\Spell;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SpellController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'school' => ['required'],
            'tier' => ['required', 'numeric'],
            'components' => ['required'],
            'casting_time' => ['required'],
            'target' => ['required'],
            'range' => ['required'],
            'duration' => ['required'],
        ]);

        $data['slug'] = Str::slug($data['name']);
        Spell::create($data);

        return to_route('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Spell $spell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spell $spell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spell $spell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spell $spell)
    {
        //
    }
}
