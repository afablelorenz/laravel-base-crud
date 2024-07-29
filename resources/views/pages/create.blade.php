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
                    <input type="text" placeholder="Name" aria-label="name" id="name" name="name" value="{{ old('name')}}" required>
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="scientific_name">Scientific Name</label>
                    <input type="text" placeholder="Scientific Name" aria-label="Scientific name" id="scientific-name" name="scientific_name" value="{{ old('scientific_name') }}" required>
                    @error('scientific_name')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="taxonomic_group">Taxonomic Group</label>
                    <input type="text" placeholder="Taxonomic Group" aria-label="Taxonomic group" id="taxonomic-group" name="taxonomic_group" value="{{ old('taxonomic_group') }}" required>
                    @error('taxonomic_group')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="class">Class</label>
                    <input type="text" placeholder="Class" aria-label="Class" id="class" name="class" value="{{ old('class') }}" required>
                    @error('class')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="family">Family</label>
                    <input type="text" placeholder="Family" aria-label="FAmily" id="family" name="family" value="{{ old('family') }}" required>
                    @error('family')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="species">Species</label>
                    <input type="text" placeholder="Species" aria-label="Species" id="species" name="species" value="{{ old('species') }}" required>
                    @error('species')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="habitat">Habitat</label>
                    <input type="text" placeholder="Habitat" aria-label="Habitat" id="habitat" name="habitat" value="{{ old('habitat') }}" required>
                    @error('habitat')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="protected">Protected</label>
                    <select id="protected" name="protected" required>
                        <option value="1" {{ old('protected') == '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('protected') == '0' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('protected')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="date_of_arrival">Date of Arrival</label>
                    <input type="date" placeholder="Date of Arrival" aria-label="Date of Arrival" id="date-of-arrival" name="date_of_arrival" value="{{ old('date_of_arrival') }}" required>
                    @error('date_of_arrival')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <input type="submit"  value="Add new animal">
                </form>
            </div>
        </div>
    </div>
@endsection
