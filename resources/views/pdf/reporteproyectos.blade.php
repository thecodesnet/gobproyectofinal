<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
        </style>
</head>
<body>
    <h1>Listado de Proyectos</h1>
    <table>
        <th>
            <td>Nombre</td>
            <td>MOnto</td>
            <td>MOnto Patrocinado</td>
        </th>
        <tbody>
            @foreach($proyectos1 as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nombreproyecto}}</td>
                <td>{{$p->fuentefondo}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>