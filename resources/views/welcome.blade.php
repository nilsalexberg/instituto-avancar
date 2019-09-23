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

      <div class="row text-center">
        <div class="col-md-4">
          <img src="https://placeimg.com/180/180/people?1" class="rounded-circle">
          <h4>Nome</h4>
          <p>Função</p>
        </div>
        <div class="col-md-4">
          <img src="https://placeimg.com/180/180/people?2" class="rounded-circle">
          <h4>Nome</h4>
          <p>Função</p>
        </div>
        <div class="col-md-4">
          <img src="https://placeimg.com/180/180/people?3" class="rounded-circle">
          <h4>Nome</h4>
          <p>Função</p>
        </div>
      </div>
    </div>

    <div class="wave-after-patners mt-5">
      @include('svg.wave-3')
    </div>
  </div>

  <div class="container pt-5 pb-4">
    <div class="row">
      <div class="col-md-6">
        <h2 class="mb-5 text-secondary">Blog</h2>
        <div class="media mb-4">
          <img src="https://placeimg.com/114/96/people?1" class="align-self-center mr-3" alt="...">
          <div class="media-body">
            <h5 class="mt-0">Center-aligned media</h5>
            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </div>
        <div class="media mb-4">
          <img src="https://placeimg.com/114/96/people?2" class="align-self-center mr-3" alt="...">
          <div class="media-body">
            <h5 class="mt-0">Center-aligned media</h5>
            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="mb-5 text-secondary">Depoimentos</h2>
        <div class="media mb-4">
          <img src="https://placeimg.com/72/72/people?1" class="align-self-center mr-3 rounded-circle" alt="...">
          <div class="media-body">
            <h5 class="mt-0">Center-aligned media</h5>
            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </div>
        <div class="media mb-4">
          <img src="https://placeimg.com/72/72/people?2" class="align-self-center mr-3 rounded-circle" alt="...">
          <div class="media-body">
            <h5 class="mt-0">Center-aligned media</h5>
            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('partials.footer')
