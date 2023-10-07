<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido al curso de Laravel 10</h1><br>
    <h2>{{ $nombre }}</h2>
    <p>Laravel utiliza una arquitectura MVC Modelo Vista Controlador</p>

    <h2>Lista de asistencia 07/10/2023</h2>
    <ul>
       @foreach ( $alumnos as $a)
            <li>{{ $a }}</li>           
       @endforeach
    </ul>

    <h2>Datos</h2>
        <table border="1">
            <tr>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Turno</td>
            </tr>
            @foreach($datos as $d)
            <tr>
                <td>{{ $d["nombre"] }}</td>
                <td>{{ $d["edad"] }}</td>
                <td>{{ $d["turno"] }}</td>
            </tr>    
            @endforeach
        </table>
    <p>
        Modelo: Es la base de datos, los modelos son nuestras tablas, por cada tabla 
        demebos tener un modelo.
        Los modelos están en la carpeta de <code>app/Models</code>
    </p>

    <p>
        Vistas: Las vistas son los HTML y CSS que se muestran en la página Web
        Están en la carpeta <code>resources/views</code>
    </p>

    <p>
        Controladores: Son archivos donde se plasma la lógica del negocio
        Están en <code>app/http/Controllers</code>
    </p>

    <p>
        Las rutas: son las urls que nos dirigen hacía una página específica
        Estan en <code>routes/web.php</code>
    </p>

</body>
</html>