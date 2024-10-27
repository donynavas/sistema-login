<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos a [Nombre de tu Empresa]</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #333;
        }
        .header, .cta-btn {
            background: #0056b3;
            color: white;
        }
        .header {
            padding: 20px;
            text-align: center;
        }
        .content {
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .cta-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .cta-btn:hover {
            background: #00408d;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 15px;
            background-color: #000000;
            color: white;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar">
    <div>
        <a href="/" class="navbar-brand"><strong>MiEmpresa</strong></a>
    </div>
    <div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse</a>
                @endif
            @endauth
        @endif
    </div>
</nav>
    <!-- Encabezado de Bienvenida -->
    <div class="header">
        <h1>Bienvenidos a [Nombre de tu Empresa]</h1>
        <p>Tu aliado confiable para [breve descripción del servicio, ejemplo: soluciones empresariales efectivas].</p>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h2>Nosotros</h2>
        <p>
            En [Nombre de tu Empresa], nos dedicamos a ofrecer servicios de calidad para ayudar a nuestros clientes a alcanzar sus objetivos de negocio. Nuestro equipo de expertos trabaja constantemente para innovar y brindar soluciones personalizadas que respondan a las necesidades específicas de cada proyecto.
        </p>

        <h2>Nuestros Servicios</h2>
        <ul>
            <li><i class="fas fa-check-circle"></i> <strong>Consultoría:</strong> Estrategias que impulsan el crecimiento.</li>
            <li><i class="fas fa-check-circle"></i> <strong>Desarrollo de Software:</strong> Soluciones tecnológicas innovadoras.</li>
            <li><i class="fas fa-check-circle"></i> <strong>Soporte y Mantenimiento:</strong> Atención continua para asegurar el éxito.</li>
        </ul>

        <h2>¿Por qué Elegirnos?</h2>
        <p>
            Nos comprometemos con la excelencia en cada paso, desde el primer contacto hasta la entrega final. Nos distingue nuestra pasión por superar las expectativas y nuestro enfoque personalizado en cada proyecto.
        </p>

        <!-- Llamado a la Acción -->
     
    </div>

</body>
</html>
