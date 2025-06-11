@extends('layouts.app')
@section('styles')
<!-- -->
@endsection
@section('content')
<div class="container">
    <form action="{{route('add-category')}}" method="post">
        @csrf
        @if(session('warning'))
            <div class="alert alert-danger">
                {{ session('warning') }}
            </div>
        @endif
        @if(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
        @endif
        <div class="form-group">
            <label for="name">CategoryName</label>
            <input type="text" class="form-control" id="name" name="categoryName" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

@foreach($categories as $category)
    <div class="d-flex justify-content-between align-items-center mb-2">
        <div>
            <strong>{{ $category->name }}</strong>
        </div>
        <form action="{{ route('delete-category', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </div>
@endforeach

@endsection