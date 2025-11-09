<div class="card mb-3">
  @if($post->image)
  <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="text-muted small">{{ $post->published_at?->format('d M Y') }} | by: {{ $post->writer->name }}</p>
    <p class="card-text post-excerpt">{{ $post->excerpt }}</p>
    <a href="{{ route('post.show', $post->slug) }}" class="btn btn-sm btn-primary">read more ...</a>
  </div>
</div>
