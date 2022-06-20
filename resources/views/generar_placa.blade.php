<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width:100%; display:flex; justify-content:center; gap:100px; align-items:center;">
        <h1 style="font-size:100px;">{{$placa->nro_placa}}</h1>
        <?php $url="http://192.168.1.26/laravel-qrcode-generator/public/placa/".$placa->id ?>
        
        <div>{{QrCode::generate($url);}}</div>
    </div>
    <div style="width:50px; margin-top:1em; margin-left:auto; margin-right:auto;">
        <button  onclick="window.print()">Imprimir</button>
    </div>
</body>
</html>