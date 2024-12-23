<h1>Listar Usuários</h1>

<?php
$sql = "SELECT * FROM users";

$result = $connect->query($sql);

// Puxando a quantidade de linhas do nosso resultado
$amout_users = $result->num_rows;

if ($amout_users > 0) {

    // trazendo os objetos do resultado da consulta ($result) e alocando na variável row
    echo "<table class='table table-hover table-striped table-bordered'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Nome</th>";
    echo "<th>Data de Nascimento</th>";
    echo "<th>E-mail</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    while ($row = $result->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->name . "</td>";
        echo "<td>" . $row->date_bth . "</td>";
        echo "<td>" . $row->email . "</td>";
        echo "<td>
                <button class='btn blue-300 btn-primary'><i class='bi bi-pencil-square'></i>Editar</button>
                <button class='btn btn-blue-300 btn-danger'><i class='bi bi-trash3-fill'></i> Excluir</button>
            </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p class='alert alert-danger'>Não foram encontrados nenhum usuário.</p>";
}
?>