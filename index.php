<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Galeria de Imagens</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-12">
          <div class="form-group">
            <form id="formulario" method="post" action="" enctype="multipart/form-data">
            <h3>Upload de Imagens</h3>
              <div class="row">              
                  <div class="col-4">
                    <label for="empresa">Nome da Empresa</label>
                    <input placeholder="Nome da Empresa" class="form-control" type="text" name="empresa" id="empresa" required>
                  </div>
                  <div class="col-4">
                    <label for="cargo">Cargo Oferecido</label>
                    <input placeholder="Cargo" class="form-control" type="text" name="cargo" id="cargo" required>
                  </div>
                  <div class="col-4">
                    <label for="arquivo">Carregar a Imagem</label>
                    <input class="form-control-file" type="file" name="arquivo" id="arquivo" required>
                  </div>
                </div>            
                  <input class="btn btn-primary mt-2" type="submit" value="Enviar">
              </div> <!-- row -->
            </form>
            <div id="response">
              <p id="txtResponse"></p>
            </div>
          </div> <!-- form-group -->
        </div> <!-- col-6 -->
        <div id="fotos" class="row card-deck"></div>
      </div> <!-- row -->
    </div> <!-- container -->
    
      <!-- Optional JavaScript -->
      <script src="js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  </body>
</html>