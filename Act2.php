<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Portal Dashboard</title>
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
        
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            animation: blackWhiteAnimation 10s infinite;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.5s ease;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #f5f5f5;
            border: 2px solid black;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            overflow: hidden;
            animation: blackWhiteAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .header {
            background: black;
            text-align: center;
            padding: 30px;
            animation: blackWhiteAnimation 10s infinite;
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
        .task-section {
            padding: 30px;
            border-bottom: 3px dashed black;
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .task-title {
            background: black;
            color: white;
            padding: 15px;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.5em;
            font-weight: bold;
            border: 2px solid white;
            animation: blackWhiteAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .welcome-card {
            background: white;
            border: 2px solid black;
            color: black;
            padding: 25px;
            border-radius: 20px;
            margin: 20px 0;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            text-align: center;
        }
        .access-card {
            background: white;
            border: 2px solid black;
            color: black;
            padding: 25px;
            border-radius: 20px;
            margin: 20px 0;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }
        .notification-card {
            background: white;
            border: 2px solid black;
            color: black;
            padding: 25px;
            border-radius: 20px;
            margin: 20px 0;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            text-align: center;
        }
        .feature-item {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 10px;
            margin: 10px 0;
            border-left: 5px solid black;
            font-size: 1.1em;
            border: 2px solid black;
        }
        .emoji {
            font-size: 2em;
            margin-bottom: 10px;
            display: block;
        }
        .status-badge {
            background: black;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
            display: inline-block;
            margin: 5px;
            border: 2px solid white;
        }
        .premium-badge {
            background: white;
            color: black;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
            display: inline-block;
            margin: 5px;
            border: 2px solid black;
        }
        .footer {
            background: black;
            text-align: center;
            padding: 20px;
            animation: blackWhiteAnimation 10s infinite;
            transition: all 0.5s ease;
        }
        .footer h3, .footer p {
            animation: textColorAnimation 10s infinite;
            transition: all 0.5s ease;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🏠 Community Portal Dashboard 🏠</h1>
        </div>

<?php
echo '<div class="task-section">';
echo '<div class="task-title">👋 Task 1: Personal Welcome Center</div>';

$username = "gabbitot";
$role = "member";
$isActive = true;
$isPremium = true;
$lastLoginDaysAgo = 1;

$welcomeMessage = ($role === "administrator") ? "Welcome, Administrator!" : "Welcome, " . $username . "!";
$loginMessage = ($lastLoginDaysAgo <= 1) ? "You logged in recently." : "It's been a while since your last visit.";

echo '<div class="welcome-card">';
echo '<span class="emoji">🌟</span>';
echo '<h2 style="margin: 10px 0; font-size: 2em;">' . $welcomeMessage . '</h2>';
echo '<p style="font-size: 1.3em; margin: 15px 0;">' . $loginMessage . '</p>';
echo '<span class="status-badge">Active User</span>';
if ($isPremium) {
    echo '<span class="premium-badge">⭐ Premium Member</span>';
}
echo '</div>';
echo '</div>';

echo '<div class="task-section">';
echo '<div class="task-title">🔑 Task 2: Your Access Level</div>';

echo '<div class="access-card">';
echo '<span class="emoji">🎯</span>';
echo '<h3 style="margin-bottom: 20px; font-size: 1.5em;">Available Features:</h3>';

if (!$isActive) {
    echo '<div class="feature-item">❌ Account is inactive. Please contact support.</div>';
} else {
    if ($role === "administrator") {
        echo '<div class="feature-item">🔧 Full administrative access granted.</div>';
        echo '<div class="feature-item">✅ Access to all features and admin panel.</div>';
    } else if ($role === "moderator") {
        echo '<div class="feature-item">🛡️ Moderator access granted.</div>';
        echo '<div class="feature-item">✅ Access to Forum Posts, Profile Editor, and Moderation Tools.</div>';
        if ($isPremium) {
            echo '<div class="feature-item">⭐ Premium moderation features unlocked!</div>';
        }
    } else if ($role === "member") {
        echo '<div class="feature-item">✅ Access to Forum Posts and Profile Editor.</div>';
        if ($isPremium) {
            echo '<div class="feature-item">⭐ Premium content library unlocked!</div>';
        }
    } else {
        echo '<div class="feature-item">👤 Guest access only. Please register for more features.</div>';
    }
}
echo '</div>';
echo '</div>';

echo '<div class="task-section">';
echo '<div class="task-title">🔔 Task 3: Notification Settings</div>';

$notificationPreference = "email";

echo '<div class="notification-card">';
echo '<span class="emoji">📱</span>';
echo '<h3 style="margin-bottom: 20px; font-size: 1.5em;">Current Settings:</h3>';

switch ($notificationPreference) {
    case "email":
        echo '<div style="background: #e8f5e8; padding: 20px; border-radius: 15px; border: 3px solid #4caf50;">';
        echo '<h4 style="color: #2e7d32; margin: 0;">✉️ Email notifications are enabled.</h4>';
        echo '<p style="color: #388e3c; margin: 10px 0;">You\'ll receive updates via email!</p>';
        echo '</div>';
        break;
    case "sms":
        echo '<div style="background: #e3f2fd; padding: 20px; border-radius: 15px; border: 3px solid #2196f3;">';
        echo '<h4 style="color: #1565c0; margin: 0;">📱 SMS notifications are enabled.</h4>';
        echo '<p style="color: #1976d2; margin: 10px 0;">You\'ll receive text messages!</p>';
        echo '</div>';
        break;
    case "both":
        echo '<div style="background: #f3e5f5; padding: 20px; border-radius: 15px; border: 3px solid #9c27b0;">';
        echo '<h4 style="color: #6a1b9a; margin: 0;">✉️📱 Both email and SMS notifications are enabled.</h4>';
        echo '<p style="color: #7b1fa2; margin: 10px 0;">You\'ll get all updates!</p>';
        echo '</div>';
        break;
    case "none":
        echo '<div style="background: #ffebee; padding: 20px; border-radius: 15px; border: 3px solid #f44336;">';
        echo '<h4 style="color: #c62828; margin: 0;">🔕 All notifications are disabled.</h4>';
        echo '<p style="color: #d32f2f; margin: 10px 0;">Quiet mode is on.</p>';
        echo '</div>';
        break;
    default:
        echo '<div style="background: #fff3e0; padding: 20px; border-radius: 15px; border: 3px solid #ff9800;">';
        echo '<h4 style="color: #ef6c00; margin: 0;">⚠️ Invalid notification preference. Please check your settings.</h4>';
        echo '</div>';
        break;
}
echo '</div>';
echo '</div>';

echo '<div class="footer">';
echo '<h3> Thanks for using Community Portal! </h3>';
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>