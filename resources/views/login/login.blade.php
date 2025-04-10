<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Inicio</title>
</head>
<body>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Iniciar Sesión</button>

        @if(session('error'))
            <div>{{ session('error') }}</div>
        @endif
    </form>
    
</body>
</html>