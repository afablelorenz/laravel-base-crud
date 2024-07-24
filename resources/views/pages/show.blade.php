@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>
        Animal Reserve
    </h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Scientific Name</th>
                <th>Taxonomic Group</th>
                <th>Class</th>
                <th>Family</th>
                <th>Species</th>
                <th>Habitat</th>
                <th>Protected</th>
                <th>Date of arrival</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$animal->id}}</th>
                <td>{{$animal->name}}</td>
                <td>{{$animal->scientific_name}}</td>
                <td>{{$animal->taxonomic_group}}</td>
                <td>{{$animal->class}}</td>
                <td>{{$animal->family}}</td>
                <td>{{$animal->species}}</td>
                <td>{{$animal->habitat}}</td>
                @if($animal->protected === 1)
                <td>Yes</td>
                @else
                <td>No</td>
                @endif
                <td>{{$animal->date_of_arrival}}</td>
            </tr>
            <a href="{{ route('pages.home') }}">Back to list</a>
        </tbody>
    </table>
@endsection
