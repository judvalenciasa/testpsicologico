<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CognitiveSparks | Error interno</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: linear-gradient(180deg, #0f2745 0%, #1e4a75 100%);
            font-family: Arial, sans-serif;
        }
        .card {
            width: min(92vw, 560px);
            background: #f4f7fb;
            border-radius: 12px;
            padding: 28px 24px;
            text-align: center;
            box-shadow: 0 10px 26px rgba(0, 0, 0, 0.2);
        }
        h1 { margin: 0 0 10px; color: #163c66; }
        p { margin: 0 0 14px; color: #2a4460; }
        .btn {
            display: inline-block;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 8px;
            background: #163c66;
            color: #fff;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <main class="card">
        <h1>500</h1>
        <p>{{ $message ?? 'Ocurrio un error inesperado.' }}</p>
        <a class="btn" href="{{ url('/') }}">Volver al inicio</a>
    </main>
</body>
</html>
