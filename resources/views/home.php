
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
</head>
<body>
<h1>¡Hola<?=$nombre;?>!estas en la pagina Home</h1>
</body>
</html>



@extends('layouts.master')

@section('content')
    <h1>Página Principal</h1>
    <p>Bienvenido al Video Club.</p>
@endsection






