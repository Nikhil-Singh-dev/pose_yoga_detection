
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Yoga Assistant</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        header {
            background: linear-gradient(90deg, #4CAF50, #2E7D32);
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 15px;
            background-color: #388E3C;
            animation: slideIn 1s ease-in-out;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 12px 18px;
            transition: all 0.3s ease-in-out;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #2E7D32;
        }
        main {
            text-align: center;
            padding: 60px 20px;
        }
        #hero {
    position: relative;
    left: 115px;
    right: 100px;
    background: url('aiyoga1.jpg') no-repeat center center;
    background-size: cover; /* Use cover to ensure the background image covers the area */
    max-height: 800px;
    min-height: 800px; /* Ensures it stays around 600px even if content is smaller */
    width: 80%;
    color: white;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(1, 2, 3, 4.3);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 50px 0;
}
 #hero.hover{
    background: url('aiyoga.jpg') no-repeat center center;
    transform: scale(1.1);
}


        @media (max-width: 768px) {
            #hero {
                max-height: 400px;
            }
        }
        #hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        #hero h2, #hero p, #hero button {
            position: relative;
            z-index: 2;
        }
        #hero h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
        #hero p {
            font-size: 20px;
            margin-bottom: 20px;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.5);
        }
        button {
            background-color: #FF9800;
            color: white;
            padding: 18px 35px;
            border: none;
            cursor: pointer;
            font-size: 20px;
            border-radius: 12px;
            transition: all 0.3s ease-in-out;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        button:hover {
            background-color: #E65100;
            transform: scale(1.1);
        }
        #features {
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            max-width: 850px;
            margin: 50px auto;
            text-align: left;
        }
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>AI Yoga Assistant</header>
    <nav>
        <a href="index.php">Home</a>
        <a href="yoga-guide.html">Yoga Guide</a>
        <a href="chatbot.html">AI Chat</a>
        <a href="progress.html">Progress Tracker</a>
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a>
    </nav>
    
    <main>
        <section id="hero">
            <h2>Welcome to Your AI Yoga Trainer</h2>
            <p>Learn and practice yoga with the power of AI.</p>
            <button onclick="location.href='yoga-guide.html'">Start Learning</button>
        </section>
        <section id="features">
            <h3>Features</h3>
            <ul>
                <li>🌿 AI-powered Yoga Guide</li>
                <li>🎙️ Real-time Text Assistance</li>
                <li>📈 yoga Assistance </li>
            </ul>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 AI Yoga Assistant | Designed for a healthier life</p>
        <p>&copy; Design by Nidhi deshmukh</p>
    </footer>
</body>
</html>
