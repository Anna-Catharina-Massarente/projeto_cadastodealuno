<h1>Cadastrar Novo Aluno</h1>

<form action="?page=salvar" method="POST">
<input type="hidden" name="acao" value="cadastrar">
   
    <div class="mb-3">
        <label><strong>Nome</strong></label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <div class="mb-3">
        <label><strong>Sobrenome</strong></label>
        <input type="text" name="sobrenome" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

     <div class="campo">
        <label><strong>Gênero:</strong></label> <br>
        <label>
                    <input type="radio" name="sexo" value="Homem" checked>Homem
                </label><br>
                <label>
                    <input type="radio" name="sexo" value="Mulher">Mulher
                </label><br>
                <label>
                    <input type="radio" name="sexo" value="Outro">Outro
                </label>
        </div><br>

    <div class="mb-3">
        <label><strong>Data de Sascimento</strong></label>
        <input type="date" name="data_nasc" class="form-control" required>
    </div>

    <div class="campo">
        <label><strong>Idioma Matriculado</strong></label> <br>
        <label>
                    <input type="radio" name="curso" value="Inglês" checked>Inglês
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Espanhol">Espanhol
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Francês">Francês
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Alemão">Alemão
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Italiano">Italiano
                </label><br>
                <label>
                    <input type="radio" name="curso" value="Mandarim">Mandarim
                </label>
        </div><br>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">CADASTRAR ALUNO</button>
    </div>
</form>