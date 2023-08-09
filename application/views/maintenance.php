<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Maintenance</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 100px 0;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            width: 100px;
            height: auto;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .countdown {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <h1>Website Under Maintenance</h1>
        <p>We're currently working to improve our website and will be back soon.</p>
        <div class="countdown">Maintenance Ends In: <span id="countdown"></span></div>
    </div>

    <script>
        // Set the maintenance end date and time (YYYY-MM-DD HH:MM:SS format)
        const maintenanceEnd = new Date('2023-08-07 09:47:57').getTime();
        
        // Countdown function
        function startCountdown() {
            const countdownElement = document.getElementById('countdown');
            
            const countdownInterval = setInterval(function () {
                const now = new Date().getTime();
                const timeRemaining = maintenanceEnd - now;

                if (timeRemaining <= 0) {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = 'Maintenance Complete';
                    return;
                }

                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                countdownElement.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }, 1000);
        }

        // Start countdown when the page loads
        window.onload = startCountdown;
    </script>
</body>
</html>
