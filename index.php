<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reloj Digital</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 20px;
        }
        #message {
            font-size: 2rem; 
            color: white;
            margin-bottom: 20px; 
        }
        img {
            margin-top: 20px;
            max-width: 50%;

            height: auto;
        }
    </style>
</head>
<body>
    <div id="message"></div> 
    <img id="image" src="" alt="" style="display: none;"> 


    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            const messageElement = document.getElementById('message');
            const imageElement = document.getElementById('image');

            console.log(now.getHours());

            const timeString = `${hours}:${minutes}:${seconds}`;
            
            if (now.getHours() >= 5 && now.getHours() < 12) {
                document.body.style.backgroundColor = 'skyblue';
                messageElement.textContent = `BUENOS DÍAS ${timeString}`;
                imageElement.src = "https://i.pinimg.com/736x/dc/ee/97/dcee972af488b1b485543c12a360a0d2.jpg";
                imageElement.style.display = 'block'; 
            } else if (now.getHours() >= 12 && now.getHours() < 19) {
                document.body.style.backgroundColor = 'orange';
                messageElement.textContent = `BUENAS TARDES ${timeString}`;
                imageElement.src = ""; 
                imageElement.style.display = 'none'; 
            } else {
                document.body.style.backgroundColor = 'darkblue';
                messageElement.textContent = `BUENAS NOCHES ${timeString}`;
                imageElement.src = "https://misimagenesdebuenasnoches.com/wp-content/uploads/2021/09/buenas-noches-piolin-durmiendo.jpg";
                imageElement.style.display = 'block'; 

            }
        }

        setInterval(updateClock, 1000); 
        updateClock();  
    </script>
</body>
</html>
