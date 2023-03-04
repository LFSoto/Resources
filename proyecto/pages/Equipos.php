<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
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
    <h1>Equipos</h1>
    <form name="login" method="POST" Action="">

        Nombre del equipo:
        <input type="text" name="nombre" placeholder="Nombre del equipo" /><br /> <br />

        Jugador 1:
        <input type="text" name="jugador1" placeholder="Alias del jugador 1" /><br /> <br />
        Jugador 2:
        <input type="text" name="jugador2" placeholder="Alias del jugador 2" /><br /> <br />
        Jugador 3:
        <input type="text" name="jugador3" placeholder="Alias del jugador 3" /><br /> <br />
        Jugador 4:
        <input type="text" name="jugador4" placeholder="Alias del jugador 4" /><br /> <br />

        Puntaje del equipo
        <input type="number" name="puntaje" placeholder="Puntaje del equipo" /><br /> <br />


        Tipo de equipo:
        <br />
        <input name="categoria" type="radio" value="beginner" /> <label>Beginner</label> <br>
        <input name="categoria" type="radio" value="middle" /> <label>Middle</label> <br>
        <input name="categoria" type="radio" value="expert" /> <label>Expert</label> <br>

        <input type="submit" name="registrar" value="Registrar" />
        <input type="reset" name="cancelar" value="Cancelar" />

    </form>

</body>

</html>

<?php

if (!empty($_REQUEST['registrar']) && !empty($_POST['categoria'])) {
    $categoria = $_POST['categoria'];
    $inicialCategoria = strtoupper(substr($categoria, 0, 1));
    $cantidadJugadores = 4;
    $digitosAleatorios = rand(10, 99);
    $ultimosDigitosAnio = substr(date("Y"), 3, 4);

    echo 'Codigo: ' . $inicialCategoria . $cantidadJugadores . $digitosAleatorios . $ultimosDigitosAnio;
}
?>