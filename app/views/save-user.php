<?php
switch ($_REQUEST["act"]) {
    case ("add"):
        $name = $_POST["name"];
        $date_bth = $_POST["date_bth"];
        $email = $_POST["email"];
        $pass = md5($_POST["password"]);

        $sql = "INSERT INTO users(name, date_bth, email, password) VALUES ('{$name}', '{$date_bth}', '{$email}', '{$pass}')";

        $result = $connect->query($sql);

        if ($result) {
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                    title: 'Cadastrado com sucesso!',
                    icon: 'success'
                }).then(() => {
                    window.location.href = '?page=list';
                });
            </script>";
        } else {
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo deu errado, cadastro não realizado!',
                }).then(() => {
                    window.location.href = '?page=list';
                });
            </script>";
        }
        break;

    case ("edit"):
        $name = $_POST["name"];
        $date_bth = $_POST["date_bth"];
        $email = $_POST["email"];
        $pass = md5($_POST["password"]);

        $sql = " UPDATE users SET 
        name = '{$name}',
        date_bth = '{$date_bth}',
        email = '{$email}',
        password = '{$pass}'
        WHERE 
        id=" .$_REQUEST["id"];

        $result = $connect->query($sql);

        if ($result) {
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                    title: 'Usuário editado com sucesso!',
                    icon: 'success'
                }).then(() => {
                    window.location.href = '?page=list';
                });
            </script>";
        } else {
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo deu errado, não foi possível editar usuário!',
                }).then(() => {
                    window.location.href = '?page=list';
                });
            </script>";
        }
        break;

    case ("delete"):

        $sql = "DELETE FROM users WHERE id=" . $_REQUEST["id"];

        $result = $connect->query($sql);

        if ($result) {
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                    title: 'Usuário excluído com sucesso!',
                    icon: 'success'
                }).then(() => {
                    window.location.href = '?page=list';
                });
            </script>";
        } else {
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo deu errado, não foi possível excluir usuário!',
                }).then(() => {
                    window.location.href = '?page=list';
                });
            </script>";
        }
        break;
}
?>