@extends('layouts.app')

@section('title','Add new animal')

@section('main-content')
    <div>
        <div>
            <div>
                <h1>Add new animal</h1>
            </div>
        </div>
    </div>

    <div>
        <div>
            <div>
                <form action="{{ route('pages.store') }}" method="POST">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" placeholder="Name" aria-label="name" id="name" name="name">

                    <label for="scientific_name">Scientific Name</label>
                    <input type="text" placeholder="Scientific Name" aria-label="Scientific name" id="scientific-name" name="scientific_name">

                    <label for="taxonomic_group">Taxonomic Group</label>
                    <input type="text" placeholder="Taxonomic Group" aria-label="Taxonomic group" id="taxonomic-group" name="taxonomic_group">

                    <label for="class">Class</label>
                    <input type="text" placeholder="Class" aria-label="Class" id="class" name="class">

                    <label for="taxonomic_group">Taxonomic Group</label>
                    <input type="text" placeholder="Taxonomic Group" aria-label="Taxonomic Group" id="scientific-name" name="taxonomic_group">

                    <label for="family">Family</label>
                    <input type="text" placeholder="Family" aria-label="FAmily" id="family" name="family">

                    <label for="species">Species</label>
                    <input type="text" placeholder="Species" aria-label="Species" id="species" name="species">

                    <label for="habitat">Habitat</label>
                    <input type="text" placeholder="Habitat" aria-label="Habitat" id="habitat" name="habitat">

                    <input value="1" type="radio" name="protected" id="protected">
                    <label for="protected1">
                        Protected
                    </label>

                    <input value="0" type="radio" name="protected" id="not-protected" checked>
                    <label for="protected2">
                        Not Protected
                    </label>

                    <label for="date_of_arrival">Date of Arrival</label>
                    <input type="date" placeholder="Date of Arrival" aria-label="Date of Arrival" id="date-of-arrival" name="date_of_arrival">

                    <input type="submit"  value="Add new animal">
                </form>
            </div>
        </div>
    </div>
@endsection
