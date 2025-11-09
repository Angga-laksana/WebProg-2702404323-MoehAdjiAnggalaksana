@extends('layout.app')

@section('content')
<h3>Our Writers</h3>
<div class="row">
  @foreach($writers as $writer)
  <div class="col-md-4">
    <div class="card mb-3">
      <div class="card-body">
        <h5>{{ $writer->name }}</h5>
        <p class="text-muted">{{ $writer->specialty }}</p>
        <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-sm btn-primary">View posts</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
