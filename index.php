<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reloj Funcional con PHP y JavaScript</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        #reloj {
            font-size: 5em;
            color: #333;
            background: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div id="reloj">
        <?php
            // **PHP:** Genera la hora inicial del servidor.
            // La función date() con el formato 'H:i:s' da Horas:Minutos:Segundos.
            $hora_inicial = date('H:i:s');
            echo $hora_inicial;
        ?>
    </div>

    <script>
        // **JavaScript:** Controla la actualización en tiempo real en el navegador.

        /**
         * Función para actualizar la hora.
         * Toma la hora del sistema operativo del cliente (navegador).
         */
        function actualizarReloj() {
            // 1. Obtiene la fecha y hora actual
            const ahora = new Date();

            // 2. Formatea la hora, minutos y segundos, añadiendo un cero al inicio si es necesario
            const horas = String(ahora.getHours()).padStart(2, '0');
            const minutos = String(ahora.getMinutes()).padStart(2, '0');
            const segundos = String(ahora.getSeconds()).padStart(2, '0');

            // 3. Combina las partes en el formato HH:MM:SS
            const tiempoActual = `${horas}:${minutos}:${segundos}`;

            // 4. Muestra la hora en el elemento con ID 'reloj'
            document.getElementById('reloj').textContent = tiempoActual;
        }

        // Llama a la función `actualizarReloj` cada 1000 milisegundos (1 segundo)
        // Esto crea el efecto de reloj en tiempo real.
        setInterval(actualizarReloj, 1000);

        // Llama a la función una vez de inmediato para asegurar que el JavaScript
        // tome el control desde el inicio, reemplazando la hora generada por PHP.
        actualizarReloj();
    </script>

</body>
</html>