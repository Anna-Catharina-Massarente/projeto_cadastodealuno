<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>CADASTRO DE ALUNO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SISTEMA DE ALUNOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="?page=novo">Novo Aluno</a>
                    <a class="nav-link" href="?page=listar">Listar Alunos</a>
                </div>
                </div>
            </div>
        </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-aluno.php");
                        break;
                        case "listar":
                            include("listar-alunos.php");
                        break;
                        case "salvar":
                            include("salvar-aluno.php");
                        break;
                        case "editar":
                            include("editar-aluno.php");
                        break;
                        default:
                            print "<h1>Bem Vindos</h1><br>";
                            print "<ul><li><h4>Para cadastrar um novo aluno, clique em novo aluno.</li></h4><br>";
                            print "<li><h4>Para consultar o cadastro de um aluno, clique em listar alunos.</li></h4><br>";
                            print "<li><h4>Para alterar o cadastro de um aluno, clique em listar alunos, e depois em editar no aluno que deseja fazer a alteração.</li></h4></ul>";
                            print "<ul><li><h4>Para voltar ao ínicio, clique em home.</li></h4>";
                    }
                ?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>