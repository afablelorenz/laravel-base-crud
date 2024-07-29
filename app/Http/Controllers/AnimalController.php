<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();

        return view("pages.home", compact("animals"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'scientific_name' => 'required|string|max:60',
            'taxonomic_group' => 'required|string|max:60',
            'class' => 'required|string|max:40',
            'family' => 'required|string|max:40',
            'species' => 'required|string|max:40',
            'habitat' => 'required|string|max:40',
            'protected' => 'required|boolean',
            'date_of_arrival' => 'required|date',
        ]);

        Animal::create($validatedData);
        return redirect()->route('pages.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('pages.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('pages.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'scientific_name' => 'required|string|max:60',
            'taxonomic_group' => 'required|string|max:60',
            'class' => 'required|string|max:40',
            'family' => 'required|string|max:40',
            'species' => 'required|string|max:40',
            'habitat' => 'required|string|max:40',
            'protected' => 'required|boolean',
            'date_of_arrival' => 'required|date',
        ]);

        $animal->update($validatedData);
        return redirect()->route('pages.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('pages.home');
    }
}
