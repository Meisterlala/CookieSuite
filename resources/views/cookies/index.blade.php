@extends('layouts.app')

@section('content')
    <a href="{{ route('cookies.create') }}" class="btn btn-primary mb-3">Create New Cookie</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Production Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cookies as $cookie)
                <tr>
                    <td>{{ $cookie->name }}</td>
                    <td>{{ $cookie->quantity }}</td>
                    <td>{{ $cookie->production_date->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('cookies.show', $cookie->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('cookies.edit', $cookie->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('cookies.destroy', $cookie->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
