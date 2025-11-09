@extends('layout.app')

@section('content')
<h3>{{ $writer->name }}</h3>
<p class="text-muted">{{ $writer->specialty }}</p>
<p>{{ $writer->bio }}</p>

<h5 class="mt-4">Posts by {{ $writer->name }}</h5>
@foreach($posts as $post)
  @include('components.post-card', ['post' => $post])
@endforeach
@endsection
