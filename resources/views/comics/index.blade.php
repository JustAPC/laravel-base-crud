@extends('layouts.layout-comics')

@section('script-message-delete')
    <script defer src="{{ asset('js/deleteAlert.js') }}"></script>
@endsection

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('comics.create') }}" class="btn btn-success my-3">New Comic</a>
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
                    <td class="border border-dark"><img src="{{ $comic->thumb }}" alt="" height="220px"></td>
                    <td class="col-1 border border-dark">{{ $comic->title }}</td>
                    <td class="col-4 border border-dark">
                        <p>{{ $comic->description }}</p>
                    </td>
                    <td class="border border-dark">{{ $comic->price }}$</td>
                    <td class="col-1 border border-dark">{{ $comic->series }}</td>
                    <td class="border border-dark">{{ $comic->sale_date }}</td>
                    <td class="border border-dark">{{ $comic->type }}</td>
                    <td class="border border-dark">
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">View</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="mt-3 delete-form"
                            data-name="{{ $comic->title }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Remove">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
