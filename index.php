<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj Digital</title>
    <style>
        body {
            margin: 0;
            padding:20px;
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
            
            if (now.getHours() >= 5 && now.getHours() < 12) {
                document.body.style.backgroundColor = 'skyblue';
                document.body.innerHTML = `
                    <div>
                        <p style="color: white; font-size: 1.5rem;">BUENOS DÍAS ${hours}:${minutes}:${seconds}</p>
                        <img src="https://i.pinimg.com/736x/dc/ee/97/dcee972af488b1b485543c12a360a0d2.jpg" >
                    </div>
                `;
            } 
            else if (now.getHours() >= 12 && now.getHours() < 19)
            {
                document.body.style.backgroundColor = 'Orange'; 
                document.body.innerHTML = '
                <div> 
                <p style = "color: white; font-size: 1.5rem;"> BUENAS TARDES ${hours}:${minutes}:${seconds}</p>
                <img src="https://i.pinimg.com/736x/dc/ee/97/dcee972af488b1b485543c12a360a0d2.jpg" >
                </div>
                ';
            }
            
            else {
                document.body.style.backgroundColor = 'darkblue';
                document.body.innerHTML = `
                    <div>
                        <p style="color: white; font-size: 1.5rem;">BUENAS NOCHES ${hours}:${minutes}:${seconds}</p>
                        <img src="https://misimagenesdebuenasnoches.com/wp-content/uploads/2021/09/buenas-noches-piolin-durmiendo.jpg" >
                    </div>
                `;
            }
        }

        setInterval(updateClock, 1000);
        updateClock();
    </script>

</body>
</html>
