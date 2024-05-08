<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Rol</title>
</head>
<body>

<h1><strong>FORMULARIO DE CREACION DE ROLES</strong></h1>
<form action="routes/registerRol.php" method="POST">
  <label>Nombre de rol</label><br>
  <input type="text" placeholder="Nombre de rol" name="name_rol"><br><br>
  <label>Estado de rol</label><br>
  <select name="state_rol">
    <option value="">NONE</option>
    <option value="1">Inactivo</option>
    <option value="2">Activo</option>
  </select><br><br>
  <button type="submit">Guardar</button>
</form>

  
</body>
</html>