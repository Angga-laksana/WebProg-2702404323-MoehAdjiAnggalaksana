@extends('layout.app')

@section('content')
<h3>{{ $category->name }}</h3>
<p class="text-muted">Articles in {{ $category->name }}</p>

@foreach($posts as $post)
  @include('components.post-card', ['post' => $post])
@endforeach

<div class="mt-4">
  {{ $posts->links() }}
</div>
@endsection
