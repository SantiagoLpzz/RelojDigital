<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj Digital</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #clock {
            font-size: 3rem;
        }
    </style>
</head>
<body>

    <div id="clock">00:00:00</div>

    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

          
            document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
            
            if (now.getHours() >= 5 && now.getHours() < 20) {
                document.body.style.backgroundColor = 'skyblue';
                document.body.innerHTML = `
                    <div>
                        <p style="color: white; font-size: 1.5rem;">BUENOS DÍAS ${hours}:${minutes}:${seconds}</p>
                        <img src="https://i.pinimg.com/736x/dc/ee/97/dcee972af488b1b485543c12a360a0d2.jpg" >
                    </div>
                `;
            }
        }

        setInterval(updateClock, 1000);
        updateClock();
    </script>

</body>
</html>
