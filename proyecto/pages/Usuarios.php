<html>

<head>
    <title> Usuario </title>

</head>

<body>
    <ul>
        <li>
            <button onclick="location.href='Archivo.php'">Archivo</button>
        </li>
        <li>
            <button onclick="location.href='Torneos.php'">Torneos</button>
        </li>
        <li>
            <button onclick="location.href='Equipos.php'">Equipos</button>
        </li>
        <li>
            <button onclick="location.href='Usuarios.php'">Usuarios</button>
        </li>
        <li>
            <button onclick="location.href='AcercaDe.php'">Acerca de</button>
        </li>
    </ul>
    <h1>Usuarios</h1>
    <form name="login" method="POST" Action="">
        Nombre:
        <input name="nombre" type="text" value="" required placeholder="nombre" /> <br></br>

        Cédula:
        <input name="cedula" type="number" value="" required placeholder="cantidad" /> <br></br>

        Género:
        <br></br>
        <input name="genero" type="radio" value="femenino" /> <label>Femenino</label>

        <input name="genero" type="radio" value="masculino" /> <label>Masculino</label>
        <br></br>

        Estado:
        <br></br>
        <input name="estado" type="radio" value="activo" /> <label>Activo</label>
        <input name="estado" type="radio" value="inactivo" /> <label>Inactivo</label>
        <br></br>

        Fecha de registro:
        <input name="fecha" type="date" value="" required /> <br></br>

        Usuario:
        <input name="usuario" type="text" value="" required placeholder="Usuario" /> <br></br>
        Contraseña:
        <input name="contrasena" type="password" value="" required placeholder="Contraseña" /> <br></br>

        <input type="submit" name="regsitrar" value="Registrar" />
        <input type="reset" name="cancelar" value="Cancelar" />

    </form>

</body>

</html>

<?php
if (!empty($_REQUEST['aceptar'])) {
    echo $_REQUEST['usuario'] . "<br/>" . $_REQUEST['clave'];
}

?>