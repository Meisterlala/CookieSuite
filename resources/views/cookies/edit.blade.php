@extends('layouts.app')

@section('content')
    <h2>Edit Cookie</h2>

    <form action="{{ route('cookies.update', $cookie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $cookie->name }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $cookie->quantity }}" required>
        </div>

        <div class="form-group">
            <label for="production_date">Production Date</label>
            <input type="date" name="production_date" id="production_date" class="form-control" value="{{ $cookie->production_date->format('Y-m-d') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
