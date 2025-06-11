@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Recipes in: {{ $category->name }}</h2>

    @if($recipes->isEmpty())
        <div class="alert alert-info">No recipes found in this category.</div>
    @else
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('uploaded_img_recipes/' . $recipe->image_path) }}" class="card-img-top" alt="{{ $recipe->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->name }}</h5>
                            <a href="{{ route('showRecipe', $recipe->id) }}" class="btn btn-sm btn-primary">View Recipe</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
