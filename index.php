<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tareas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Gestión de Tareas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tareas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title text-center">Gestión de Tareas</h1>
            </div>
            <div class="card-body">
                <!-- Formulario para agregar tareas -->
                <form id="formTarea" class="mb-4">
                    <div class="input-group">
                        <input type="text" id="descripcion" class="form-control" placeholder="Descripción de la tarea" required>
                        <button type="submit" class="btn btn-success">Agregar Tarea</button>
                    </div>
                </form>
                
                <!-- Lista de tareas -->
                <ul id="listaTareas" class="list-group"></ul>

                <!-- Formulario de edición -->
                <div id="formEditar" class="mt-4" style="display: none;">
                    <h2 class="text-center">Editar Tarea</h2>
                    <form id="formEditarTarea">
                        <div class="input-group mb-3">
                            <input type="text" id="editarDescripcion" class="form-control" placeholder="Nueva descripción" required>
                            <input type="hidden" id="editarId">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            <button type="button" class="btn btn-secondary" onclick="cancelarEdicion()">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Gestión de Tareas | Creado con ❤️ por Kevin</p>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
