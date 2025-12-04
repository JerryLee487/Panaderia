<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Sistema de Gestión</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        body {
            background: #b48d4bff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        .logo {
            width: 70px;
            height: 70px;
            background: #d4a574; /* color tipo panadería */
            margin: 0 auto 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
        }
        h1 {
            color: #333;
            margin-bottom: 16px;
            font-size: 28px;
        }
        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        .btn {
            display: inline-block;
            background: #d4a574;
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .btn:hover {
            background: #c2925f;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">🍞</div>
        <h1>Bienvenido</h1>
        <p>Bienvenido al sistema de gestión de panaderia.</p>
        <a href="{{ url('/admin') }}" class="btn">Acceder al Panel de Administración</a>
    </div>
</body>
</html>