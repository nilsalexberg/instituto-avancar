@include('partials.header', [
  'bigHeader' => true
])

<div class="site-content">
  <div class="bg-waves">
    <div class="container">
      <div class="row">
        <div class="col-md-5 pt-5">
          <div class="row">
            <div class="col-6">
              <h1 class="display-4">A GENTE CUIDA DE GENTE</h1>
            </div>
          </div>
          <p class="lead text-secondary">Como podemos te ajudar?</p>
          <p class="mb-4 text-secondary">Processos intrapsíquicos, crescimento profissional, amadurecimento das relações afetivas e interpessoais, aprimoramento do capital humano nas organizações privadas, públicas e sociais.</p>
          <a href="#" class="px-5 btn btn-outline-primary rounded-pill">Fale conosco</a>
        </div>
        <div class="col-md-6 offset-1">
          <img src="/images/illustration.png" class="img-fluid my-3"/>
        </div>
      </div>
      <div class="row text-center py-5">
        <div class="col-6 col-md-3">
          <img src="/images/icons8-customer-100.png">
          <h4>Para Você</h4>
          <p>Para acessar o melhor de si nas diversas instâncias de sua vida.</p>
        </div>
        <div class="col-6 col-md-3">
          <img src="/images/icons8-innovation-100.png">
          <h4>Para Psicólogos</h4>
          <p>Somos seus aliados na conquista e sedimentação dos seus ganhos.</p>
        </div>
        <div class="col-6 col-md-3">
          <img src="/images/icons8-business-100.png">
          <h4>Para Empresas</h4>
          <p>Damos consultoria em RH, aprimoramento para Docentes.</p>
        </div>
        <div class="col-6 col-md-3">
          <img src="/images/icons8-services-100.png">
          <h4>Para o Terceiro Setor</h4>
          <p>Trabalhamos com treinamento e avaliação para ONGs e Entidades Religiosas.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="wave-before-patners">
    @include('svg.wave-1-5')
  </div>

  <div class="bg-info text-white pt-5">
    <div class="container">
      <h1 class="mb-4">Nossos parceiros</h1>

      <div class="home-partners">
        @foreach ($partners as $partner)
          <div class="text-center">
            <img src="{{ $partner->image }}" class="rounded-circle d-block mx-auto mb-2">
            <h4>{{ $partner->name }}</h4>
            <p class="role">{{ $partner->role }}</p>
          </div>
        @endforeach
      </div>
    </div>

    <div class="wave-after-patners mt-5">
      @include('svg.wave-3')
    </div>
  </div>

  <div class="container pt-5 pb-4">
    <div class="row">
      <div class="col-md-6 home-posts">
        <h2 class="mb-5 text-secondary">Blog</h2>
        @foreach ($posts as $post)
          <div class="media mb-4">
            <img src="{{ $post->image }}" class="align-self-center mr-3">
            <div class="media-body">
              <h5 class="mt-0">{{ $post->title }}</h5>
              <p class="mb-0">{{ $post->summary }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <div class="col-md-6 home-testimonials">
        <h2 class="mb-5 text-secondary">Depoimentos</h2>
        @foreach ($testimonials as $testimonial)
          <div class="media mb-4">
            <img src="{{ $testimonial->image }}" class="align-self-center mr-3 rounded-circle">
            <div class="media-body">
              <h5 class="mt-0">{{ $testimonial->name }}</h5>
              <p class="mb-0">{{ $testimonial->content }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
<script type="text/javascript" src="/slick/slick.min.js"></script>
<script>
$('.home-partners').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  dots: true,
});
</script>

@include('partials.footer')
