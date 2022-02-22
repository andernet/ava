<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>Cadastro de usuários</title>
</head>

<body>
<div class="container mt-5">
<form>
  <div class="form-group">
    <label for="user_nome">Nome do usuário</label>
    <input type="text" class="form-control" id="user_nome" aria-describedby="user_nome" placeholder="2S Fulano">
    <small id="emailHelp" class="form-text text-muted">Nome do usuário</small>
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" placeholder="Senha">
  </div>

  <div class="form-group">
    <label for="senha_check">Confirmar senha:</label>
    <input type="password" class="form-control" id="senha_check" placeholder="Confirmar senha:">
  </div>

  <div class="form-group">
      <label class="mr-sm-2" for="tipo_user">Preference</label>
      <select class="custom-select mr-sm-2" id="tipo_user">
        <option selected>Selecione...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



</div>



    
</body>

</html>