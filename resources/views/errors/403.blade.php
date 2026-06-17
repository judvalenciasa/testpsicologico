<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso denegado</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .error403-page {
            min-height: 72vh;
            display: grid;
            place-items: center;
            padding: 2rem 1rem;
            background:
                radial-gradient(circle at 10% 10%, rgba(47, 128, 237, 0.25), transparent 35%),
                radial-gradient(circle at 90% 20%, rgba(111, 207, 151, 0.2), transparent 35%),
                linear-gradient(160deg, #0f1f35 0%, #1f3d63 100%);
        }

        .error403-card {
            width: min(680px, 100%);
            background: rgba(255, 255, 255, 0.96);
            border-radius: 14px;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.12);
            padding: 2.1rem 1.6rem;
            text-align: center;
            border: 1px solid #e2e8f0;
        }

        .error403-code {
            margin: 0;
            color: #183153;
            font-size: 3.2rem;
            line-height: 1;
            letter-spacing: 0.04em;
        }

        .error403-title {
            margin: 0.8rem 0 0.5rem;
            color: #0f172a;
            font-size: 1.6rem;
        }

        .error403-text {
            margin: 0 auto 1.2rem;
            color: #475569;
            max-width: 46ch;
            line-height: 1.5;
        }

        .error403-actions {
            display: flex;
            justify-content: center;
            gap: 0.6rem;
            flex-wrap: wrap;
        }

        .error403-btn {
            text-decoration: none;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }

        .error403-btn:hover {
            transform: translateY(-1px);
            opacity: 0.95;
        }

        .error403-btn-primary {
            background: #183153;
            color: #fff;
        }

        .error403-btn-secondary {
            background: #e2e8f0;
            color: #1e293b;
        }

        @media (max-width: 640px) {
            .error403-code {
                font-size: 2.8rem;
            }

            .error403-title {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    @include('shared.header')

    <main class="error403-page">
        <section class="error403-card">
            <p class="error403-code">403</p>
            <h1 class="error403-title">No tienes permisos para acceder aquí</h1>
            <p class="error403-text">
                Esta sección está disponible solo para usuarios administradores.
                Si necesitas acceso, contacta al equipo responsable del sistema.
            </p>
            <div class="error403-actions">
                <a class="error403-btn error403-btn-primary" href="{{ route('home') }}">Ir al inicio</a>
                @auth
                    <a class="error403-btn error403-btn-secondary" href="{{ route('administrator-page') }}">Ir a panel</a>
                @endauth
            </div>
        </section>
    </main>

    @include('shared.footer')
</body>

</html>

