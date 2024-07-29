@extends('layouts.app')

@section('page-title', 'Edit Animal')

@section('main-content')
    <h1>Edit Animal</h1>
    <form action="{{ route('pages.update', $animal) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $animal->name) }}" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="scientific_name">Scientific Name</label>
        <input type="text" id="scientific_name" name="scientific_name" value="{{ old('scientific_name', $animal->scientific_name) }}" required>
        @error('scientific_name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="taxonomic_group">Taxonomic Group</label>
        <input type="text" id="taxonomic_group" name="taxonomic_group" value="{{ old('taxonomic_group', $animal->taxonomic_group) }}" required>
        @error('taxonomic_group')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="class">Class</label>
        <input type="text" id="class" name="class" value="{{ old('class', $animal->class) }}" required>
        @error('class')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="family">Family</label>
        <input type="text" id="family" name="family" value="{{ old('family', $animal->family) }}" required>
        @error('family')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="species">Species</label>
        <input type="text" id="species" name="species" value="{{ old('species', $animal->species) }}" required>
        @error('species')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="habitat">Habitat</label>
        <input type="text" id="habitat" name="habitat" value="{{ old('habitat', $animal->habitat) }}" required>
        @error('habitat')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="protected">Protected</label>
        <select id="protected" name="protected" required>
            <option value="1" {{ old('protected', $animal->protected) == '1' ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ old('protected', $animal->protected) == '0' ? 'selected' : '' }}>No</option>
        </select>
        @error('protected')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="date_of_arrival">Date of Arrival</label>
        <input type="date" id="date_of_arrival" name="date_of_arrival" value="{{ old('date_of_arrival', $animal->date_of_arrival) }}" required>
        @error('date_of_arrival')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Update Animal</button>
    </form>
@endsection
