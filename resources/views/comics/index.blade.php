@extends('layouts.layout-comics')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td class=""><img src="{{ $comic->thumb }}" alt="" height="220px"></td>
                    <td class="col-1">{{ $comic->title }}</td>
                    <td class="col-4">
                        <p>{{ $comic->description }}</p>
                    </td>
                    <td class="">{{ $comic->price }}$</td>
                    <td class="col-1">{{ $comic->series }}</td>
                    <td class="">{{ $comic->sale_date }}</td>
                    <td class="">{{ $comic->type }}</td>
                    <td class="">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">View</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>
                        <input type="submit" class="btn btn-danger" value="Remove"></input>
                        {{-- <form action="{{ route('comics.destroy', ['id' => $comic->id]) }} method=" POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger">Remove</input>
                        </form> --}}
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
