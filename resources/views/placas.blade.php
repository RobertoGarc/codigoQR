<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Persona</th>
                <th>Placa</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($placas as $placa)
            <tr>
                <td>{{$placa->nombres}}</td>
                <td>{{$placa->nro_placa}}</td>
                <td><a href="{{route('generar-placa',$placa->id)}}">Generar Placa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>