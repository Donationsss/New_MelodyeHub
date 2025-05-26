<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="view/css/ARDCP.css" />
  <title>AreaDosCompositores</title>
</head>

<body>
  <div class="NavBar">
    <div class="nav-left">
      <span class="logo">MelodyeHub</span>
    </div>
    <div class="nav-center">
      <a href="#">ARCP</a>
      <a href="#">IFAT</a>
      <a href="#">Configurações</a>
    </div>
    <div class="nav-right">
      <a href="#" class="lg_rg">Login/Registro</a>
    </div>
  </div>

  <div class="anuncio">ANÚNCIO</div>
  <div class="top_area">Área do compositor</div>

  <div class="fundo_area">
    <div>
      <label for="nome-musica" class="nomeDaMusicaLabel">Nome da música</label>
      <input type="text" id="nome-musica" class="nomeDaMusica" placeholder="Digite o nome da música" />
      <textarea class="local_text" placeholder="Letra da música..."></textarea>
    </div>

    <div>
      <label for="nome-anot" class="nomeDaAnotLabel">Nome da anotação</label>
      <input type="text" id="nome-anot" class="nomeDaAnot" placeholder="Digite o nome da anotação" />
      <textarea class="local_anotar" placeholder="Anote algo..."></textarea>
    </div>
  </div>
    <button onclick="baixarTexto()" class="baixar-btn">Baixar tudo</button>

  <div class="footer">footer</div>
</body>

</html>
