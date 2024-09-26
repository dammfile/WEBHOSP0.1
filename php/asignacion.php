<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Nuevo Informe</title>
</head>
<body>

<header>
    <h1>Nuevo Informe</h1>
</header>

<a href="../index.html" class="backbtn">Atrás</a>

<div class="formulario">
    <form action="registros.php" method="post">
        <!-- Información del Usuario -->
         <div class="user-info">
         <legend><b>Información del Usuario</b></legend>
         <br>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido" required>

            <label for="acomp">   ¿Lleva acompañante?</label>
            <input type="checkbox" name="acomp" id="acomp" style="transform: scale(1.5);">
            <br>
            <label for="tipouser">Tipo de Usuario</label>
            <select name="tipo" id="tipouser" required>
                <option value="">- Seleccionar -</option>
                <option value="paciente">Paciente</option>
                <option value="especialista">Especialista</option>
                <option value="funcionario">Funcionario</option>
                <option value="acomp">Acompañante</option>
            </select>
            <br>
            <label for="cantidadp">Cantidad de Pasajes</label>
            <input type="number" name="cantidadp" id="cantidadp" required>
            <br>
            
            <label for="razon">Razón</label>
            <select name="razon" id="razon" required>
                <option value="">- Seleccionar -</option>
                <option value="tramite">Trámite</option>
                <option value="consulta">Consulta</option>
            </select>
           
            <label for="desc" id="descid">Descripción</label>
            <textarea name="desc" id="desc"></textarea>
            </div>

<br>
<div class="viaje-info">
            <legend><b>Información del Viaje</b></legend>
            <br>
            <label for="doctor">Doctor/Especialista</label>
            <input type="text" name="doctor" id="doctor" required>
            <br>
            <label for="lugar">Lugar destino</label>
            <input type="text" name="lugar" id="lugar" required>

            <label for="fconsulta">Fecha de consulta</label>
            <input type="date" name="fconsulta" id="fconsulta" required>

            <label for="ida">Fecha de ida</label>
            <input type="date" name="ida" id="ida" required>

            <label for="vuelta">Fecha de vuelta</label>
            <input type="date" name="vuelta" id="vuelta" required>
</div>

<input type="submit" class="btn" value="ENVIAR">
</form>
</body>
</html>

