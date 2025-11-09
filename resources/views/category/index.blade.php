@extends('layout.app')

@section('content')
<h3>Category</h3>
<div class="row">
  @foreach($categories as $category)
  <div class="col-md-4">
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">{{ $category->name }}</h5>
        <a href="{{ route('category.show', $category->slug) }}" class="btn btn-primary btn-sm">View posts</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
