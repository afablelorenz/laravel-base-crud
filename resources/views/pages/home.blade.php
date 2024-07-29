@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')
    <h1>
        Animal Reserve
    </h1>
    <a href="{{ route('pages.create') }}" role="button">Create</a>
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
                    </td>
                    <td>
                        <a href="{{ route('pages.show', $animal) }}" role="button">Show</a>
                        <a href="{{ route('pages.edit', $animal) }}" role="button">Edit</a>
                        <form action="{{ route('pages.destroy', $animal) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" role="button">Delete</button>
                        </form>
                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
