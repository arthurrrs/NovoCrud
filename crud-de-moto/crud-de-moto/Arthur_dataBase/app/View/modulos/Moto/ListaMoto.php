<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Motos</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            transition: background-color 0.3s, color 0.3s;
        }

        .dark-mode {
            background-color: #121212;
            color: #f1f1f1;
        }

        .dark-mode table {
            color: #fff;
        }

        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 30px;
            z-index: 1000;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="theme-toggle">
            <button id="toggleTheme" class="btn btn-dark">
                <i class="fas fa-moon"></i> Modo Escuro
            </button>
        </div>

        <h1 class="text-center mb-4">📋 Lista de Motos</h1>

        <table id="motoTable" class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Excluir</th>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Nome</th>
                    <th>Quilômetros</th>
                    <th>Ano</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($model->rows as $item): ?>
                    <tr>
                        <td>
                            <a href="/Moto/delete?id=<?= $item->id ?>" class="text-danger" title="Excluir">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                        <td><?= $item->id ?></td>
                        <td>
                            <a href="/Moto/form?id=<?= $item->id ?>" class="text-decoration-none text-primary">
                                <?= htmlspecialchars($item->Marca) ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($item->nomeMoto) ?></td>
                        <td><?= number_format($item->Quilometros, 0, ',', '.') ?> km</td>
                        <td><?= $item->Ano ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery (necessário para DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#motoTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
                }
            });

            // Dark mode toggle
            const toggleBtn = document.getElementById('toggleTheme');
            toggleBtn.addEventListener('click', () => {
                document.body.classList.toggle('dark-mode');
                const icon = toggleBtn.querySelector('i');
                const isDark = document.body.classList.contains('dark-mode');
                toggleBtn.classList.toggle('btn-dark', !isDark);
                toggleBtn.classList.toggle('btn-light', isDark);
                toggleBtn.innerHTML = isDark
                    ? '<i class="fas fa-sun"></i> Modo Claro'
                    : '<i class="fas fa-moon"></i> Modo Escuro';
            });
        });
    </script>

</body>

</html>
