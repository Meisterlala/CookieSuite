@extends('layouts.app')

@section('content')
    <h2>Cookie Details</h2>

    <table class="table">
        <tr>
            <th>Name:</th>
            <td>{{ $cookie->name }}</td>
        </tr>
        <tr>
            <th>Quantity:</th>
            <td>{{ $cookie->quantity }}</td>
        </tr>
        <tr>
            <th>Production Date:</th>
            <td>{{ $cookie->production_date->format('Y-m-d') }}</td>
        </tr>
    </table>

    <a href="{{ route('cookies.index') }}" class="btn btn-primary">Back to List</a>
@endsection
