<h1>Editar Usuário</h1>

<?php
$sql = "SELECT * FROM users WHERE id=" . $_REQUEST["id"];

$result = $connect->query($sql);
$row = $result->fetch_object();

?>

<form action="?page=save" method="POST">
    <input type="hidden" name="act" value="edit">
    <input type="hidden" name="id" value="<?= $row->id ?>">
    <div class="mb-3">
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control" value="<?= $row->name; ?>">
    </div>
    <div class="mb-3">
        <label for="date_bth">Data de Nascimento</label>
        <input type="date" name="date_bth" class="form-control" value="<?= $row->date_bth ?>">
    </div>
    <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" value="<?= $row->email ?>">
    </div>
    <div class="mb-3">
        <label for="password">Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>