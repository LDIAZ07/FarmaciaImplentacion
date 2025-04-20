<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>

<style>
        .form-login {
            max-width: 400px;
            margin: 60px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            font-family: 'Segoe UI', sans-serif;
        }

        .form-login label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-login input[type="email"],
        .form-login input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-login input[type="email"]:focus,
        .form-login input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-login button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-login button:hover {
            background-color: #0056b3;
        }

        .form-login div {
            margin-top: 15px;
            color: red;
            font-weight: bold;
            text-align: center;
        }
    </style>

    <form action="{{ route('login') }}" method="post" class="form-login">
        @csrf
        <label for="email">Correo Electrónico</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Iniciar Sesión</button>


        @if ($errors->has('error'))
        <div class="alert alert-danger">
            {{ $errors->first('error') }}
        </div>
        @endif
    </form>
    
</body>
</html>
