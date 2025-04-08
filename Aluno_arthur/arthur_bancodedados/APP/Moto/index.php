<?php include 'ListaMoto.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Motos</title>
</head>
<body>
    <h1>Motos Cadastradas</h1>
    <a href="FormMoto.php">Adicionar Moto</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM motos");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['marca']}</td>
                    <td>{$row['modelo']}</td>
                    <td>{$row['ano']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Editar</a> |
                        <a href='delete.php?id={$row['id']}'>Excluir</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
