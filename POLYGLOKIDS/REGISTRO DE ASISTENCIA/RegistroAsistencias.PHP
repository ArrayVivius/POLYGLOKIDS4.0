<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Toma de Asistencias</title>
<link rel="stylesheet" href="estilos.css">

<?PHP
include ("CONEXION.PHP");
?>

<style>


  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: url(ImagIngles.jpg) no-repeat center center fixed;
    background-size: cover;
  }

  header {
    background-color: #2c3e50;
    color: white;
    text-align: center;
    padding: 1rem 0;
  }

  main {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
  }

  .asistencia-form,
  .lista-asistencia {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 0 20px;
    max-width: 400px;
  }

  .asistencia-form h2,
  .lista-asistencia h2 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    text-align: center;
  }

  .asistencia-form label,
  .asistencia-form input,
  .asistencia-form button {
    display: block;
    margin-bottom: 10px;
    width: 100%;
  }

  .lista-asistencia ul {
    list-style: none;
    padding: 0;
  }

  .chulito::before {
    content: "\2713";
    color: green;
    margin-right: 5px;
  }
</style>
<script>
  function registrarAsistencia() {
    var nombreEstudiante = document.getElementById("nombre").value;
    var fechaAsistencia = document.getElementById("fecha").value;
    
    if (nombreEstudiante.trim() !== "") {
      var lista = document.getElementById("lista");
      var nuevoElemento = document.createElement("li");
      
      
      nuevoElemento.innerHTML = `${nombreEstudiante} - ${fechaAsistencia}`;
      
    
      var iconoChulito = document.createElement("span");
      iconoChulito.classList.add("chulito");
      nuevoElemento.appendChild(iconoChulito);

      lista.appendChild(nuevoElemento);
      document.getElementById("nombre").value = "";
      document.getElementById("fecha").value = "";
    }
  }

  
  document.getElementById("nombre").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      event.preventDefault(); 
      registrarAsistencia();
    }
  });
  
  
  document.getElementById("fecha").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      event.preventDefault(); 
      registrarAsistencia();
    }
  });
</script>
</head>
<body>
  <header>
    <h1>Toma de Asistencias</h1>
  </header>
  <main>
    <div class="asistencia-form">
      <h2>Registro de Asistencia</h2>
      <form id="asistencia-form">
        <label for="nombre">Nombre del Estudiante:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha">
        <button type="button" onclick="registrarAsistencia()">Registrar Asistencia</button>
      </form>
    </div>
    <div class="lista-asistencia">
      <h2>Lista de Asistencia</h2>
      <ul id="lista">
      </ul>
    </div>
  </main>

</body>


</html>

