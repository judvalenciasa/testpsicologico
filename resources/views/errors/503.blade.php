<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CognitiveSparks | Servicio no disponible</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(180deg, #0f2745 0%, #1e4a75 100%);
            font-family: Arial, sans-serif;
            color: #0f2745;
        }
        .card {
            width: min(92vw, 560px);
            background: #f4f7fb;
            border-radius: 12px;
            padding: 28px 24px;
            text-align: center;
            box-shadow: 0 10px 26px rgba(0, 0, 0, 0.2);
        }
        h1 {
            margin: 0 0 12px;
            font-size: 30px;
            color: #163c66;
        }
        p {
            margin: 0 0 18px;
            font-size: 16px;
            line-height: 1.4;
            color: #2a4460;
        }
        .actions {
            display: flex;
            gap: 10px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn {
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 8px;
            border: 1px solid #163c66;
            font-weight: 700;
            font-size: 14px;
        }
        .btn-primary {
            background: #163c66;
            color: #fff;
        }
        .btn-secondary {
            background: transparent;
            color: #163c66;
        }
    </style>
</head>
<body>
    <main class="card">
        <h1>503</h1>
        <p>{{ $message ?? 'Servicio temporalmente no disponible.' }}</p>
        <p>Intenta nuevamente en unos minutos.</p>
        <div class="actions">
            <a class="btn btn-primary" href="javascript:location.reload()">Reintentar</a>
            <a class="btn btn-secondary" href="{{ url('/') }}">Ir al inicio</a>
        </div>
    </main>
</body>
</html>
