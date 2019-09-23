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

          <form id="contato">
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