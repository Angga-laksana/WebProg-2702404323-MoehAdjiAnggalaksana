{{-- @extends('layout.master')
@section('title', 'EduFun')

@section('content')
<div class="row">
    <div class="col-12 ">
        <img src="{{ url('img/R.jpeg') }}" alt="EduFun" class="img-fluid">
    </div>
</div>
@endsection --}}

@extends('layout.app')

@section('content')
<div class="hero rounded shadow-sm">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1 class="display-6">EduFun</h1>
      <p class="lead">Sumber belajar gratis untuk mahasiswa IT.</p>
    </div>
    <div class="col-md-6 text-center">
      <img src="https://picsum.photos/seed/home/800/400" class="img-fluid rounded" alt="hero">
    </div>
  </div>
</div>

<h4>Latest Articles</h4>
<div class="row">
  <div class="col-md-8">
    @foreach($latestPosts as $post)
      @include('components.post-card', ['post' => $post])
    @endforeach
  </div>
  <div class="col-md-4">
    <div class="card p-3">
      <h6>Popular</h6>
      <ul class="list-unstyled">
        @foreach(App\Models\Post::orderByDesc('views')->take(5)->get() as $p)
          <li><a href="{{ route('post.show', $p->slug) }}">{{ $p->title }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
