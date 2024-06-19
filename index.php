<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Leakage Sensor System</title>
    <LInk><a href="home.css"></a></LInk>
    <link rel="stylesheet" href="contact.php">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="password"], input[type="tel"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        p {
            text-align: center;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .sensor-data, .alerts {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Water Leakage Sensor System</h1>
        <h2>Welcome to the Water Leakage Sensor System</h2>
        <p>Monitor and prevent water damage with our water sensor system.</p>
    </header>
    <img src="landscape.jpg" alt="">
    
    <div class="container" id="register-container">
        <form id="register-form" action="register.php" method="POST">
            <h2>Register here</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email" required>
            <select name="area" required>
                <option value="" disabled selected>Choose Area</option>
                <option value="Mbalizi">Mbalizi</option>
                <option value="Iyunga">Iyunga</option>
                <option value="Sisimba">Sisimba</option>
                <option value="Nzovwe">Nzovwe</option>
            </select>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="#" onclick="toggleForm('login')">Sign here</a></p>
    </div>

    <div class="container" id="login-container" style="display: none;">
        <form id="login-form" action="login.php" method="POST">
            <h2>Login here</h2>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="#" onclick="toggleForm('register')">Register here</a></p>
    </div>

    <div class="sensor-data">
        <h2>Sensor Data</h2>
        <div id="sensor-data">
            <!-- Sensor data will be dynamically added here -->
        </div>
    </div>

    <div class="alerts">
        <h2>Alerts</h2>
        <ul id="alerts">
            <!-- Alerts will be dynamically added here -->
        </ul>
    </div>

    <script>
        function toggleForm(form) {
            if (form === 'login') {
                document.getElementById('register-container').style.display = 'none';
                document.getElementById('login-container').style.display = 'block';
            } else {
                document.getElementById('login-container').style.display = 'none';
                document.getElementById('register-container').style.display = 'block';
            }
        }
    </script>
</body>
</html>
