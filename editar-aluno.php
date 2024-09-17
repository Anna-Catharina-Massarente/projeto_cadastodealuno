<h1>Editar Aluno</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id" value="<?php print $row->id; ?>">
   
    <div class="mb-3">
        <label><strong>Nome</strong></label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label><strong>Sobrenome</strong></label>
        <input type="text" name="sobrenome" value="<?php print $row->sobrenome;?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>

     <div class="campo">
        <label><strong>Gênero:</strong></label> <br>
        <label>
                    <input type="radio" name="sexo" value="Homem" required>Homem
                </label><br>
                <label>
                    <input type="radio" name="sexo" value="Mulher" required>Mulher
                </label><br>
                <label>
                    <input type="radio" name="sexo" value="Outro" required>Outro
                </label>
        </div><br>

    <div class="mb-3">
        <label><strong>Data de Sascimento</strong></label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>" class="form-control">
    </div>

    <div class="campo">
        <label><strong>Idioma Matriculado</strong></label> <br>
        <label>
                    <input type="radio" name="curso" value="Inglês" required>Inglês
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Espanhol" required>Espanhol
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Francês" required>Francês
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Alemão" required>Alemão
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Italiano" required>Italiano
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Mandarim" required>Mandarim
                </label>
        </div><br>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">ATUALIZAR ALUNO</button>
    </div>
</form>