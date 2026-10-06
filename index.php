<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora de IMC</title>
  <link rel="stylesheet" href="./css/style.min.css">
</head>
<body>
  <div class="container">
    <h1>Calcula tu Índice de Masa Corporal (IMC)</h1>
    <label for="peso">Peso (kg):</label>
    <input type="number" id="peso" placeholder="Ej. 70">

    <label for="estatura">Estatura (m):</label>
    <input type="number" step="0.01" id="estatura" placeholder="Ej. 1.70">

    <button onclick="calcularIMC()">Calcular IMC</button>

    <div id="resultado"></div>
    <img id="imagenEstado" alt="Estado IMC" style="display:none; margin-top:15px; max-width:200px;">

  </div>
  <script src="./js/script.min.js"></script>
</body>
</html>
