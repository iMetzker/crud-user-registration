<h1>Novo Usuário</h1>

<form action="?page=save" method="POST">
    <input type="hidden" name="act" value="add">
    <div class="mb-3">
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="date_bth">Data de Nascimento</label>
        <input type="date" name="date_bth" class="form-control">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password">Senha</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>