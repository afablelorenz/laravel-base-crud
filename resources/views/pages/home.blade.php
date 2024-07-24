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
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <th>{{$animal->id}}</th>
                    <td>
                        {{$animal->name}}
                        <a href="{{ route('pages.show', $animal) }}" role="button">Show</a>
                        <a href="#" role="button">Delete</a>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
