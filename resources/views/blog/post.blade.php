@extends('templates.inner-page')

@section('content')
  <div class="blog-post">
    <div class="row">
      <div class="col-md-8">
        <h1 class="display-4 mb-5">{{ $post->title }}</h1>
        <p class="text-secondary">{{ $post->summary }}</p>
        <hr/>
        {!! $post->content !!}
      </div>

      <div class="col-md-4 recent">
        <h2 class="mb-5">Publicações recentes</h2>
        @foreach ($posts as $recentPost)
          <a href="/blog/{{ $recentPost->id }}-{{ \Illuminate\Support\Str::slug($recentPost->title) }}" class="text-decoration-none text-reset">
            <div class="mb-4">
              <img src="{{ $recentPost->image }}" class="align-self-center mb-3">
              <h4 class="mt-0 mb-3">{{ $recentPost->title }}</h4>
              <p class="mb-0 text-secondary">{{ $recentPost->summary }}</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection