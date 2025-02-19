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
  <div>
     <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Panel
</a>
</div>
<body class="bg-light">
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

                <!-- Formulario de edición (oculto por defecto) -->
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

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Desplegable</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

     <div class="offcanvas offcanvas-start show" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

    </div>
     <div class="offcanvas-body">
    Content for the offcanvas goes here.
     </div>
    </div>
   
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <ul>
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button1
      </button>
      </ul>
      <ul>
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button2
      </button>
     </ul>
      <ul>
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
        Dropdown button3
      </button>
      </ul>
    </div>
    
  </div>
</div>
    <script src="scripts.js"></script>
</body>
</html>