<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities 1 & 2 by Baltazar, Gabrielle Rae M. BSIT-204</title>
    <style>
        @keyframes blackWhiteAnimation {
            0% { background-color: white; }
            50% { background-color: black; }
            100% { background-color: white; }
        }
        
        @keyframes textColorAnimation {
            0% { color: black; }
            50% { color: white; }
            100% { color: black; }
        }
        
        @keyframes cardAnimation {
            0% { background-color: #f5f5f5; border: 2px solid black; }
            50% { background-color: #333; border: 2px solid white; }
            100% { background-color: #f5f5f5; border: 2px solid black; }
        }
        
        body { 
            font-family: 'Comic Sans MS', cursive, sans-serif;
            max-width: 1000px; 
            margin: 0 auto; 
            padding: 20px; 
            animation: blackWhiteAnimation 10s infinite;
            min-height: 100vh;
            transition: all 0.5s ease;
        }
        
        .container {
            animation: cardAnimation 10s infinite;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            overflow: hidden;
            margin: 20px 0;
            transition: all 0.5s ease;
        }
        
        .header {
            background: black;
            animation: blackWhiteAnimation 10s infinite;
            text-align: center;
            padding: 30px;
            transition: all 0.5s ease;
        }
        
        .header h1, .header p {
            margin: 0;
            font-size: 2.5em;
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        
        .header p {
            font-size: 1.2em;
            margin-top: 10px;
        }
        
        .activity { 
            animation: cardAnimation 10s infinite;
            margin: 20px; 
            padding: 25px; 
            border-radius: 20px; 
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            transition: all 0.5s ease;
        }
        
        .activity h2, .activity p {
            animation: textColorAnimation 10s infinite;
            font-size: 1.5em;
            margin-bottom: 20px;
            transition: all 0.5s ease;
        }
        
        .activity p {
            font-size: 1.1em;
        }
        
        pre { 
            background: white;
            color: black;
            padding: 20px; 
            border-radius: 15px; 
            overflow-x: auto; 
            border: 3px solid black;
            font-family: 'Courier New', monospace;
            margin: 15px 0;
        }
        
        .button { 
            display: inline-block; 
            background: black;
            color: white; 
            padding: 12px 25px; 
            text-decoration: none; 
            border-radius: 25px; 
            margin: 10px 5px;
            font-weight: bold;
            border: 2px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }
        
        .button:hover { 
            transform: translateY(-2px);
            background: white;
            color: black;
            border: 2px solid black;
            box-shadow: 0 6px 12px rgba(0,0,0,0.5);
        }
        
        .cli-section {
            animation: cardAnimation 10s infinite;
            margin: 20px;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            transition: all 0.5s ease;
        }
        
        .cli-section h2, .cli-section p {
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        
        .footer {
            background: black;
            animation: blackWhiteAnimation 10s infinite;
            text-align: center;
            padding: 20px;
            transition: all 0.5s ease;
        }
        
        .footer h3, .footer p {
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        
        .emoji {
            font-size: 1.5em;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1> Activities 1 & 2 by Baltazar, Gabrielle Rae M. BSIT-204 </h1>
        </div>
        
        <div class="activity">
            <h2><span class="emoji">🛍️</span>Activity 1: Gadgeticity Catalog with Arrays (Act1.php)</h2>
            <a href="?run=act1" class="button">🚀 Run Activity 1</a>
            
            <?php if (isset($_GET['run']) && $_GET['run'] == 'act1'): ?>
            <h3>📱 My Output:</h3>
            <?php 
                ob_start();
                include 'Act1.php';
                $output = ob_get_clean();
                echo $output;
            ?>
            <?php endif; ?>
        </div>

        <div class="activity">
            <h2><span class="emoji">🏠</span>Activity 2: User Dashboard with Conditionals (Act2.php)</h2>
            <a href="?run=act2" class="button">🚀 Run Activity 2</a>
            
            <?php if (isset($_GET['run']) && $_GET['run'] == 'act2'): ?>
            <h3>📱 My Output:</h3>
            <?php 
                ob_start();
                include 'Act2.php';
                $output = ob_get_clean();
                echo $output;
            ?>
            <?php endif; ?>
        </div>
</body>
</html>
