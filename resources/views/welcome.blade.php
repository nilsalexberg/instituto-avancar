<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/fonts/stylesheet.css">
    
    <script src="/js/app.js"></script>
		<title>Avançar</title>
	</head>
	<body>
		<div class="site-header bg-dark pt-5" style="background-image: url('/images/header-1.png')">
      <div class="container my-5">
        <div class="row">
          <div class="col-md-4 offset-md-8">
            <div class="card my-5">
              <div class="card-body text-white">
                <h1>PRODUTO</h1>
                <p class="lead">Chamada</p>
                <p>Descrição</p>
                <a href="#" class="px-5 btn btn-outline-light rounded-pill">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="wave-before-navbar mt-5">
        @include('svg.wave-3')
      </div>
    </div>

    <nav class="site-nav navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="/images/logo.png" height="80" alt="Instituto Avançar">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quem somos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                O que fazemos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Para você</a>
                <a class="dropdown-item" href="#">Para psicólogos</a>
                <a class="dropdown-item" href="#">Para empresas</a>
                <a class="dropdown-item" href="#">Para o terceiro setor</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nossos parceiros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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

    <div class="wave-before-footer">
      @include('svg.wave-1-5')
    </div>

    <div class="site-footer text-white pb-5">
      <div class="container">
        <img src="/images/logo-branco.png" class="mb-4" height="50" alt="Instituto Avançar">
        <div class="row">
          <div class="col-md-4">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro iusto non obcaecati autem omnis, voluptatum nisi pariatur quae ipsa magnam praesentium, excepturi voluptas. Inventore voluptate porro sit deserunt ab sapiente?</p>
          </div>
          <div class="col-md-3">
            <h4>Redes sociais</h4>
            <h4>Horário de atendimento</h4>
          </div>
          <div class="col-md-5">
            <h3>Fale conosco</h3>

            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="email" placeholder="E-mail">
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="mensagem" placeholder="Mensagem"></textarea>
              </div>
              <button type="submit" class="px-5 btn btn-warning rounded-pill">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
	</body>
</html>
