@extends('layout.app')

@section('content')
<article>
  <h2>{{ $post->title }}</h2>
  <p class="text-muted">{{ $post->published_at?->format('d M Y') }} | by: <a href="{{ route('writers.show', $post->writer->id) }}">{{ $post->writer->name }}</a> | category: <a href="{{ route('category.show', $post->category->slug) }}">{{ $post->category->name }}</a></p>
  @if($post->image)
    <img src="{{ $post->image }}" class="img-fluid rounded mb-3" alt="{{ $post->title }}">
  @endif
  <div class="mb-4 post-excerpt">{!! nl2br(e($post->content)) !!}</div>
</article>
@endsection
