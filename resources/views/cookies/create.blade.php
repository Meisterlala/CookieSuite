@extends('layouts.app')

@section('content')
    <h2>Create New Cookie</h2>

    <form action="{{ route('cookies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="production_date">Production Date</label>
            <input type="date" name="production_date" id="production_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
