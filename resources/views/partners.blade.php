@extends('templates.inner-page')

@section('content')
  <h1 class="display-4 mb-5">Nossos parceiros</h1>

  <div class="row">
    @foreach ($partners as $partner)
      <div class="text-center col-md-4 mb-4">
        <img src="{{ $partner->image }}" class="rounded-circle d-block mx-auto mb-2">
        <h4>{{ $partner->name }}</h4>
        <p class="text-capitalize">{{ $partner->role }}</p>
      </div>
    @endforeach
  </div>
@endsection