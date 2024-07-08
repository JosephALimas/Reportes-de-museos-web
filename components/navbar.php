<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid " style="background-color:#4492df;">
        <a class="navbar-brand title_custom" href="#" >Visitas a museos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="input-group">
                <select class="form-select" id="inputSelect" aria-label="Example select with button addon">
                    <option selected>Filtros</option>
                    <option value="1">Motivo de la visita</option>
                    <option value="2">Visitantes nacionales vs Extranjeros</option>
                </select>
                <button class="btn btn-outline-secondary btn-color" type="button" id="selectButton" onclick="selectedFilter()">Seleccionar</button>
            </div>
        </div>
      </div>
    </nav>

    <script src="./js/navbar-filter.js"></script>
</body>
</html>
