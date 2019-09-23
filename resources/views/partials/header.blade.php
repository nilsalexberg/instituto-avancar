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
      <div class="container {{ !empty($bigHeader) ? 'my-5' : '' }}">
        <div class="row">
          <div class="col-md-4 offset-md-8">
            <div class="card {{ !empty($bigHeader) ? 'my-5' : '' }}">
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
        <a class="navbar-brand" href="/">
          <img src="/images/logo.png" height="80" alt="Instituto Avançar">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Route::current()->uri == '/' ? 'active' : '' }}" {{ Route::current()->uri == '/' ? 'active' : '' }}">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item {{ Route::current()->uri == 'quem-somos' ? 'active' : '' }}">
              <a class="nav-link" href="/quem-somos">Quem somos</a>
            </li>
            <li class="nav-item {{ substr(Route::current()->uri, 0, 8) == 'servicos' ? 'active' : '' }} dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                O que fazemos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="servicos/para-voce">Para você</a>
                <a class="dropdown-item" href="servicos/para-psicologos">Para psicólogos</a>
                <a class="dropdown-item" href="servicos/para-empresas">Para empresas</a>
                <a class="dropdown-item" href="servicos/para-terceiro-setor">Para o terceiro setor</a>
              </div>
            </li>
            <li class="nav-item {{ Route::current()->uri == 'parceiros' ? 'active' : '' }}">
              <a class="nav-link" href="/parceiros">Nossos parceiros</a>
            </li>
            <li class="nav-item {{ Route::current()->uri == 'blog' ? 'active' : '' }}">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contato">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>