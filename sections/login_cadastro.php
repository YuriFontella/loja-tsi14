<div class="col-md-7">
  <h2>Cadastre-se</h2>
  <form action="index.php?acao=cadastrar" method="post" role="form" style="background-color: #fff; padding: 20px">
    <div class="form-group">
      <label for="nome">Seu nome</label>
      <input type="text" name="nome" class="form-control" placeholder="Nome...">
    </div>
    <div class="form-group">
      <label for="E-mail">E-mail</label>
      <input type="email" name="email" class="form-control" placeholder="E-mail...">
    </div>
    <div class="form-group">
      <label for="Senha">Senha</label>
      <input type="password" name="senha" class="form-control" placeholder="Senha...">
    </div>
    <button type="submit" class="btn btn-default">Cadastrar</button>
  </form>
</div>

<div class="col-md-5">  
  <h2>Log in</h2>
  <form action="index.php?acao=login" method="post" class="form-horizontal" role="form" style="background-color: #fff;padding: 20px">
    <div class="form-group">
      <label for="E-mail" class="col-sm-2 control-label">E-mail</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control" placeholder="E-mail...">
      </div>
    </div>
    <div class="form-group">
      <label for="Senha" class="col-sm-2 control-label">Senha</label>
      <div class="col-sm-10">
        <input type="password" name="senha" class="form-control" placeholder="Senha...">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Log in</button>
      </div>
    </div>
  </form>
</div>