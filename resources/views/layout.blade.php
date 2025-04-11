<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Farmacia</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }
        .sidebar {
            width: 220px;
            background: #777;
            padding: 20px;
            height: 100vh;
            color: white;
        }
        .sidebar button {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            background: #666;
            border: none;
            color: white;
            cursor: pointer;
        }
        .sidebar button:hover {
            background: #555;
        }
        .content {
            flex: 1;
            padding: 20px;
            background: #f2f2f2;
        }
        .card-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            background: #6e6e6e;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 6px;
        }
        .card-img {
            background: #4d4d4d;
            height: 100px;
            margin-bottom: 10px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-img::before {
            content: "🖼️";
            font-size: 30px;
        }
        .card a {
            display: block;
            margin-top: 10px;
            color: white;
            text-decoration: none;
            background: #555;
            padding: 8px;
            border-radius: 4px;
        }
        .card a:hover {
            background: #444;
        }
        .formulario-proveedor {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            margin-top: 20px;
        }
        .formulario-proveedor input {
            padding: 8px;
            background: #666;
            border: none;
            border-radius: 3px;
            color: white;
            width: 200px;
        }
        .formulario-proveedor button {
            background: #666;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        .formulario-proveedor button:hover {
            background: #444;
        }
        .tabla-proveedores {
            width: 90%;
            border-collapse: collapse;
            background: #ccc;
            margin-top: 20px;
        }
        .tabla-proveedores th,
        .tabla-proveedores td {
            border: 2px solid #888;
            padding: 10px;
            text-align: center;
        }
        .tabla-proveedores th {
            background: #aaa;
            color: black;
        }
        .accion-btn {
            background: #666;
            border: none;
            color: white;
            padding: 6px 10px;
            border-radius: 6px;
            margin: 0 2px;
            cursor: pointer;
        }
        .accion-btn:hover {
            background: #444;
        }
        .formulario-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background-color: #333;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        color: white;
        }
        .formulario-proveedor {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .formulario-proveedor label {
            margin-bottom: 6px;
            font-weight: bold;
        }
        .formulario-proveedor input,
        .formulario-proveedor select {
            padding: 10px;
            border-radius: 6px;
            border: none;
            background-color: #444;
            color: white;
            font-size: 16px;
        }
        .formulario-proveedor button {
            padding: 12px;
            background-color: #00aaff;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            color: white;
        }
        .formulario-proveedor button:disabled {
            background-color: #555;
            cursor: not-allowed;
        }
        .formulario-proveedor button:hover:enabled {
            background-color: #008ecc;
        }
        /*Estilo para formulario de proveedores*/
        .formulario-proveedor-simple {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            margin-top: 20px;
        }
        .formulario-proveedor-simple input {
            padding: 8px;
            background: #666;
            border: none;
            border-radius: 3px;
            color: white;
            width: 200px;
        }
        .formulario-proveedor-simple button {
            background: #666;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        .formulario-proveedor-simple button:hover {
            background: #444;
        }
        .formulario-container-ventas {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #333;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            color: white;
        }
        .formulario-ventas {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .formulario-ventas label {
            margin-bottom: 6px;
            font-weight: bold;
        }
        .formulario-ventas input,
        .formulario-ventas select {
            padding: 10px;
            border-radius: 6px;
            border: none;
            background-color: #444;
            color: white;
            font-size: 16px;
        }
        .formulario-ventas button {
            padding: 12px;
            background-color: #00aaff;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            color: white;
        }
        .formulario-ventas button:disabled {
            background-color: #555;
            cursor: not-allowed;
        }
        .formulario-ventas button:hover:enabled {
            background-color: #008ecc;
        }
        .alert-success {
            background-color: #155724;
            color: #d4edda;
            padding: 10px;
            margin-top: 10px;
            border-radius: 6px;
            font-weight: bold;
        }
        #warning-txt {
            margin-top: 15px;
            color: #ff6666;
            font-weight: bold;
            text-align: center;
        }
        /* === Estilos para Devoluciones === */
        .formulario-devolucion {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
        }
        .formulario-devolucion label {
            font-weight: bold;
            display: block;
            margin-top: 20px;
            margin-bottom: 8px;
        }
        .formulario-devolucion input,
        .formulario-devolucion textarea {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #696666;
            color: white;
            border-radius: 6px;
            font-size: 16px;
        }
        .formulario-devolucion textarea {
            resize: none;
            height: 120px;
        }
        .formulario-devolucion button {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            background-color: #696666;
            color: white;
            font-weight: bold;
            cursor: pointer;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .formulario-devolucion button:hover {
            background-color: #4d4d4d;
        }
        /*Estilos para Compras*/
        .formulario-compras {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
        }
        .formulario-compras label {
            font-weight: bold;
            margin-bottom: 8px;
            display: block;
        }
        .formulario-compras input,
        .formulario-compras select {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #696666;
            color: white;
            border-radius: 6px;
            font-size: 16px;
        }
        .boton-comprar {
            grid-column: span 2;
            justify-self: center;
            padding: 15px 30px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            background-color: #696666;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .boton-comprar:hover {
            background-color: #4d4d4d;
        }
        .btn-lateral-compras {
            position: absolute;
            right: 80px;
            top: 100px;
            padding: 15px 20px;
            background-color: #696666;
            color: white;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }
        .btn-lateral-compras:hover {
            background-color: #4d4d4d;
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <div style="text-align: center; margin-bottom: 20px;">
            <div style="width: 100px; height: 100px; background: #666; border-radius: 50%; margin: auto;"></div>
            <p style="text-align: center;">usuario</p>
        </div>
        <form action="/farmacia"><button>Inicio</button></form>
        <form action="/proveedor"><button>Proveedores</button></form>
        <form action="/compras"><button>Compras</button></form>
        <form action="/ventas"><button>Ventas</button></form>
        <form action="/devolucion"><button>Devoluciones</button></form>
        <!--<form action="/inventario"><button>Inventario</button></form>--> 
    </div>

    <div class="content">
        @yield('contenido')
    </div>
</body>
</html>
