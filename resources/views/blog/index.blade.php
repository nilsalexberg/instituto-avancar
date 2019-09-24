@extends('templates.inner-page')

@section('content')
  <div class="blog-index">
    <h1 class="display-4 mb-5">Blog</h1>

    @foreach ($posts as $post)
      <a href="/blog/{{ $post->id }}-{{ \Illuminate\Support\Str::slug($post->title) }}" class="text-decoration-none text-reset">
        <div class="media mb-4">
          <img src="{{ $post->image }}" class="align-self-center mr-3">
          <div class="media-body">
            <h2 class="mt-0 mb-3">{{ $post->title }}</h2>
            <p class="mb-0 text-secondary">{{ $post->summary }}</p>
          </div>
        </div>
      </a>
    @endforeach

    <div class="d-flex justify-content-between mt-5">
      @if ($page > 1)
        <a class="btn btn-outline-primary" href="?page={{ $page - 1 }}">
          <i class="fas fa-chevron-left mr-1"></i> Anterior
        </a>
      @else
        <div></div>
      @endif

      <div>Página {{ $page }}</div>

      @if (count($posts) == 10)
        <a class="btn btn-outline-primary" href="?page={{ $page + 1 }}">
          Próxima <i class="fas fa-chevron-right ml-1"></i>
        </a>
      @else
        <div></div>
      @endif
    </div>
  </div>
@endsection